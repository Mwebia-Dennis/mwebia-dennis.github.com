<?php
	

	//session_start()



;?>
<!DOCTYPE html>
<html>
<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!---fontawesome---->
    <script src="https://kit.fontawesome.com/fe39f99d95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">

	<title>Sign Up with Chattie</title>
</head>
<body>

	<div class="top_bar">
      
      <h2>Chattie</h2>
    </div>
    
	<div class="sign_up">
		
		<div class="sign_up_header">
			
			<h2>Sign Up With Chattie</h2>

			<div class="why_choose_chattie">
				
				<p>Discover New Friends</p>
				<p>Share Your Thoughts Anytime Anywhere</p>
				<p>Discover Groups Of Your Liking</p>
			</div>
		</div>

		<form method="POST" action="action.php?action=signup&user_type=user">
			
			<div class="input_box">
				
				<input type="text" name="f_name" placeholder="First name" required="required">
				<input type="text" name="l_name" placeholder="Last name" required="required">
			</div>

			<input type="text" name="user_name" placeholder="User Name" required="required">
			<input type="email" name="email" placeholder="email" required="required">
			<input type="password" name="password" placeholder="password" required="required">

			<div class="input_box">
				
				<select name="gender" required="required">
					
					<option selected="selected" disabled="true">Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>

				<input type="text" name="age" placeholder="age" required="required">
			</div>

			<button type="submit">Sign Up</button>

			<div class="already_have_account" style="margin: 7px 0;width: 100%;">
			
				<p style="text-align: center;font-size: 13px;">Already A Member? <a href="login.php">Sign In</a></p>
			</div>
		</form>

		
	</div>


	<!-------------------snack bar----------------------->

	


	<?php
		//displaying our snackbar with error msg for 4 seconds;
		if (isset($_GET['error'])) {

			echo '<div class="snackbar" id="snackbar">'. $_GET['error'].'</div>';
			
			?>

		<script type="text/javascript">			

  			

  			var snackbar = document.getElementById('snackbar');

  			
	        clearTimeout (timer);
	        var timer = setTimeout(function(){

	        	snackbar.style.display = 'block';

	        }, 3000);

		</script>
			<?php
		}

	?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>