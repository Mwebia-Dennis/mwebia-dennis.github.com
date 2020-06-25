<?php
	
	include 'Dao/authenticate.php';

	session_start();

	if (isset($_GET['action'])) {
		

		if ($_GET['action'] == 'signup') {
			
			//setting customer depending on type of user;
			$customer = ($_GET['user_type'] == 'admin')?new Customer(1):new Customer(0);

			if ($_POST['f_name'] == "") {
				
				header('location: signup.php?error= All fields are required');
				exit();

			}else if ($_POST['l_name'] == "") {
				
				header('location: signup.php?error= All fields are required');
				exit();

			}else if ($_POST['user_name'] == "") {
				
				header('location: signup.php?error= All fields are required');
				exit();

			}else if ($_POST['email'] == "") {
				
				header('location: signup.php?error= All fields are required');
				exit();

			}else if ($_POST['password'] == "") {
				
				header('location: signup.php?error= All fields are required');
				exit();

			}else if ($_POST['gender'] == "") {
				
				header('location: signup.php?error= All fields are required');
				exit();

			}else if ($_POST['age'] == "") {
				
				header('location: signup.php?error= All fields are required');
				exit();

			} else {
				//signup the user;

				$sign_up = $customer->setCustomer($_POST['f_name'],$_POST['l_name'],$_POST['user_name'],$_POST['email'],$_POST['password'],$_POST['gender'],$_POST['age']);

				//checking if there was any sign up;
				if (is_numeric($sign_up)) {
					
					//successful sign up;
					//set session user id and redirect.
					$_SESSION['user_id'] = $sign_up;
					setcookie('user_id',$sign_up, time() + 3600 * 24 * 365); //setting cookies for a whole year;

					echo('<div style="background-color:green; padding:10px; width: 350px; height: 300px; text-align:center;
						font-size:18px;">Successful Sign Up, Thanks for being part of us.</div>');

					header('location: index.php');
					exit();
				}else {

					//failed signup;
					

					header('location: signup.php?error='.$sign_up);
					exit();
				}
			}

		}

		if ($_GET['action'] == 'login') {
			
			$customer = new AuthenticateUsers();

			if ($_POST['email']  == "" || $_POST['password'] == "") {

				header('location: login.php?error=All fields are required');
				exit();

			}

			$user_id = $customer->get_user($_POST['email'], $_POST['password']);

			if (is_numeric($user_id)) {
				
				$_SESSION['user_id'] = $user_id;

				setcookie('user_id',$user_id, time() + 3600 * 24 * 365); //setting cookies for a whole year;

				echo('<div style="background-color:green; padding:10px; width: 350px; height: 300px; text-align:center;
					font-size:18px;">Successful Login.</div>');

				header('location: index.php');
				exit();
				
			} else {

				header('location: login.php?error='.$user_id);
				exit();
			}
		}
	}
?>