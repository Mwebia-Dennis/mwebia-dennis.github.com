

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!---fontawesome---->
    <script src="https://kit.fontawesome.com/fe39f99d95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <title>Login To Chattie</title>
  </head>
  <body>
    <!------------------welcome screen------------------>

    <div class="top_bar">
      
      <h2>Chattie</h2>
    </div>
    <div class="main_content">
      
      <div class="welcome_screen">
      
        <div class="welcome_header">
          <h2>Chattie</h2>
        </div>
        

        <div class="welcome_text">

          <h3>Discover new stories that you'll love</h3>
          <p>discover whats happening around you!.</p>

          <button onclick="setLoginForm()">Get Started <i class="fas fa-arrow-right"></i> </button>
        </div>
      </div>

      <!---------------login form-------------------------->

      <div class="login_form">

        <div class="login_form_top">
          
          <img src="images/avatar.png">

        </div>

        <?php

          if (isset($_GET['error'])) {
            
            echo "<div class = 'alert alert-danger'>".$_GET['error']."</div>";

          }

        ?>
        
        <form method="POST" action="action.php?action=login">
          
          <div class="input_box">

            <label for="email">Email or Username</label>

            <input type="text" name="email" onclick="stylingInputs(this)"  required="required">

          </div>

          <div class="input_box">
            
            <label for="password">Password</label>
            <input type="password" name="password" onclick="stylingInputs(this)"  required="required">
          </div>

          <button type="submit">Sign In</button>
          
        </form>

          <div class="form_info">
            
            <p><a href="forgot_password.php">Forgot password?</a></p>

            <p>Not A Member?<a href="signup.php">Sign Up</a></p>
          </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/login.js"></script>
  </body>
</html>