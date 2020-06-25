<?php

	include 'Authenticate_baseclass.php';
	include 'connection.php';

	/**
	 * authenticate clients/admin, login/signup.
	 */
	class Customer extends AuthenticateUsers
	{
		private $is_admin;

		function __construct($is_admin)
		{
			$this->is_admin = $is_admin;
		}

		function get_is_admin () {

			return $this->is_admin;
		}

		function setCustomer($f_name,$l_name,$user_name,$email,$password,$gender,$age)
		{


			//todo: send email to user to verify email;
			
			global $conn;
			$sql = "";
			$user_id = "";

			//check if customer exists;

			$sql = "SELECT * FROM users WHERE email = '".$conn->real_escape_string($email)."' limit 1";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				
				$this->error = 'Sorry this user already exists';
			}

			//inserting our user;
			$sql = "INSERT INTO `users` (`id`, `f_name`, `l_name`, `user_name`, `email`, `password`, `gender`, `age`, `date_added`, `is_admin`) VALUES (NULL, '".$conn->real_escape_string($f_name)."', '".$conn->real_escape_string($l_name)."', '".$conn->real_escape_string($user_name)."', '".$conn->real_escape_string($email)."', '".$conn->real_escape_string($password)."', '".$conn->real_escape_string($gender)."', '".$conn->real_escape_string($age)."', current_timestamp(), '".$conn->real_escape_string($this->get_is_admin())."')";



		   if ($sql != "") {
		   	
		   	//get last inserted id;
		   	$last_inserted_id = $this->set_user($sql);

		   	if ($last_inserted_id != "") {
		   		
		   		//update password;
		   		$sql = "SELECT id,password FROM users WHERE id = '".$conn->real_escape_string($last_inserted_id)."' limit 1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					
					$row = $result->fetch_assoc();

					$db_password = $row['password'];
					$cust_id = $row['id'];

					$salt = "thankyouforloggingintooursite".$cust_id;
					$salt_and_password = $salt.$db_password;
					$hashed_password = password_hash($salt_and_password, PASSWORD_DEFAULT);

					$sql = "UPDATE `users` SET `password` = '".$hashed_password."' WHERE `users`.`id` = ".$cust_id;

					if($conn->query($sql)) {

						$user_id = $cust_id;
					}
				}
		   	}else {

		   		$this->error = 'Failed Sign Up';
		   	}

		   }

		   //return our id if no errors are found else return error;
		   return ($this->get_error() == "")?$user_id:$this->get_error();
			
		}

		function getCustomer($email, $password)
		{
			return $this->get_user($email, $password,$this->is_admin);
		}
	}
?>