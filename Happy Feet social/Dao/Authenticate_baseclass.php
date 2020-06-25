<?php
		
	
	include 'connection.php';


	class AuthenticateUsers
	{

		protected $error;

		public function get_error()
		{
			return $this->error;
		}

		function __construct()
		{

		}

		public function set_user($query)
		{
			
			global $conn;
			$result = $conn->query($query);

			return ($result)?$conn->insert_id:""; 
		}

		public function get_user($email, $password)
		{

			global $conn;

			$user_id = "";

			$sql = "SELECT id,email,password FROM users WHERE email = '".$conn->real_escape_string($email)."' limit 1";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				
				$row = $result->fetch_assoc();

				$db_email = $row['email'];
				$db_password = $row['password'];
				$cust_id = $row['id'];

				$salt = "thankyouforloggingintooursite".$cust_id;
				$salt_and_password = $salt.$password;

				if ($db_email == $email && password_verify($salt_and_password, $db_password)) {
					
					$user_id = $cust_id;
				}else{
					$this->error = "wrong user email and password";
				}
			} else {

				$this->error = "Sorry user does not exist, Don't hesitate <br><a href='signup.php'>Sign Up Today</a>";
			}


			return ($this->get_error() == "")?$user_id:$this->get_error();
		}

		//getting user info;
		public function get_user_data($user_id)
		{
			
			global $conn;
			$user_data = array();

			if (is_numeric($user_id)) {
				
				$sql = "SELECT * FROM `user_data` WHERE user_id = ".$conn->real_escape_string($user_id)." limit 1";

				$result = $conn->query($sql);

				if ($result->num_rows > 0 ) {
					//we got data now;

					while ($row = $result->fetch_assoc()) {
						
						$user_data[] = $row;
					}
				}else {

					//no user info available;
					$this->error = "Sorry could not find this users info";
				}
			}

			return (!empty($user_data))?$user_data:$this->get_error();
		}


		//setting user details;
		public function set_user_data($user_id, $age, $secondary_school, $campus, $place_of_work, $place_of_residence, $family_member, $family_member_relationship)
		{

			global $conn;
			$msg = "";

			$sql = "INSERT INTO `user_info` (`id`, `user_id`, `age`, `secondary_school`, `campus`, `place_of_work`, `place_of_residence`, `family_member`, `family_member_relationship`) VALUES (NULL, '".$conn->real_escape_string($user_id)."', '".$conn->real_escape_string($age)."', '".$conn->real_escape_string($secondary_school)."', '".$conn->real_escape_string($campus)."', '".$conn->real_escape_string($place_of_work)."', '".$conn->real_escape_string($place_of_residence)."', '".$conn->real_escape_string($family_member)."', '".$conn->real_escape_string($family_member_relationship)."')";

			$result = $conn->query($sql);

			if ($result) {
				
				$msg = "info updated successfully";
			}else {
				$this->error = "sorry could not update your info, try again later";
			}

			return ($this->error != "")?$msg:$this->get_error();
		}
	}
?>