<?php

  session_start();

  if (isset($_COOKIES['user_id'])) {

    $_SESSION['user_id'] = $_COOKIES['user_id'];

  }

  if (isset($_SESSION['user_id'])) {

    //echo $_SESSION['user_id'];
    
  }else {

    header('location: login.php');
    exit();
  }
  


?>

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

    <!-------css--------->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>HomePage</title>

    <style type="text/css">
      

.top_nav .top_right_menu .menu_option .drop_down p:hover {text-decoration: underline;transform: scale(1.04);}

      @media only screen and (min-width: 768px) {


        /*------------------------main content----------------------------------*/

        body {

          height: 100%;
          overflow-y: hidden;
        }

        
        .main_content {
          width: 100%;
          display: inline-flex;
          height: 100%;
          display: relative;
        }


        .main_content .left_menu {

          left: 0;
          position: static;
          z-index: 0;
          width: 23%;
          margin-left: 15px;
          height: 100%;
          margin-top: 30px;

        }
        
        .main_content .left_menu ul li {padding: 10px 0;padding-left: 10px;}
        
        .main_content .left_menu ul li a i {margin-right: 20px;margin-top: 5px;}
        
        .main_content .left_menu .footer {padding: 20px 10px;}

        .main_content .posts_content {

          width: 47%;
          overflow-y: auto;
          margin-top: 20px;
          padding-bottom: 100px;
        }

        .main_content .posts_content .post {

          width: 80%;
          margin-left: 10%;
          padding: 10px;
        }

        .main_content .posts_content .post .post_image img {

          width: 93%;
          margin-left: 3%;
          height: 250px;
        }

        .main_content .fast_links {

          width: 25%;
          margin-top: 10px;
          height: 100%;
          display: inline-block;
        }

        .main_content .fast_links .events_shortcut {

          width: 100%;
          height: 370px;
          margin-left: 10px;
          background-color: #fff;
          margin-top: 10px;
          position: relative;
        }

        .main_content .fast_links .events_shortcut .events_header {

          width: 80%;
          height: 70px;
          margin-left: 8%;
          margin-bottom: 10px;
          padding: 10px 0;
          text-align: center;
          border-bottom: 1px solid #f33;
        }

        .main_content .fast_links .events_shortcut .events_header h2 {

          font-size: 24px;
          font-weight: bold;
          color: #000;
          padding-top: 5px;
          margin-top: 5px;
        }

        .main_content .fast_links .events_shortcut .event_list {

          width: 100%;
          padding: 10px 0;
        }

        .main_content .fast_links .events_shortcut .event_list .event {

          width: 80%;
          margin-left: 15px;
        }
        .main_content .fast_links .events_shortcut .event_list .event .card {

          width: 14rem;
          margin-left: 15px;
        }
        .main_content .fast_links .events_shortcut .event_list .event .card img {height: 120px;}

        
        .main_content .fast_links .events_shortcut .event_list .event .card .card-text {

          margin-top: 0;
          padding-top: 0;
        }

        .main_content .fast_links .events_shortcut .more{

          width: 100%;
          position: absolute;
          bottom: 0;
          margin-top: 20px;
          padding: 10px 0;
          text-align: right;
        }

        .main_content .fast_links .events_shortcut .more a{

          color: #f33;
          text-decoration: none;
          font-size: 15px;
          margin-right: 20px;
        }

        .main_content .fast_links .events_shortcut .more a:hover {text-decoration: underline;}
        
        .main_content .fast_links .friend_zone {

          margin-top: 10px;
          background-color: #fff;
          width: 100%;
          padding: 10px 5px 0 5px;
          margin-left: 10px;
          height: 200px;
        }

        .main_content .fast_links .friend_zone .top_header {

          width: 100%;
          height: 30px;
          padding: 3px 0;
          text-align: center;
          border-bottom: 1px solid #d3d3d3;
          box-shadow: 2px 2px 4px #d3d3d3;
        }

        .main_content .fast_links .friend_zone .top_header h2 {

          font-size: 15px;
          color: #000;
          font-weight: bolder;
        }

        .main_content .fast_links .friend_zone .friends_list {

          overflow-y: auto;
          height: 138px;
          padding-bottom: 25px;
        }

        .main_content .fast_links .friend_zone .friends {

          width: 100%;
          display: inline-flex;
          border: 1px solid #d3d3d3;
          border-radius: 10px;
          height: 100px;
          margin-top: 15px;
        }

        .main_content .fast_links .friend_zone .friends img {
          width: 65px;
          height: 65px;
          border-radius: 50%;
          margin: 10px 10px;
        }

        .main_content .fast_links .friend_zone .friends .friend_info {

          width: 220px;
          display: inline-block;
          padding-top: 10px;
        }

        .main_content .fast_links .friend_zone .friends .friend_info a {

          padding: 0 5px;
          line-height: 20px;
          color: #000;
          font-weight: bold;
        }
        .main_content .fast_links .friend_zone .friends .friend_info span {

          font-size: 13px;
          line-height: 0px;
          padding: 0;
        }
        
        .main_content .fast_links .friend_zone .friends .friend_info button {

          width: 130px;
          padding: 3px 0;
          text-align: center;
          font-size: 15px;
          background-color: #fff;
          color: #f33;
          border: 1px solid #f33;
          border-radius: 3px;
          margin-top: 5px;
        }

        .main_content .fast_links .friend_zone .friends .friend_info button:hover {background-color: #f33;color: #fff;}
        
        

        
        
      }



    </style>
  </head>
  <body>

    <div class="top_nav">
      
      <div class="logo">

        <button id="menu_open"><i class="fas fa-bars"></i></button>
        <button id="menu_close"><i class="fas fa-times"></i></button>
        
        <a href="index.php">HFFW<small>orld</small></a>
        
      </div>

      <div class="top_nav_menu">
        
        <ul>
          <li title="Home"><a href="index.php" class="active"><i class="fas fa-home"></i></a></li>
          <li  title="friends"><a href="friends.php"><i class="fas fa-user-friends"></i></a></li>
          <li title="meetings"><a href="meetings.php"><i class="far fa-handshake"></i></a></li>
          <li title="groups"><a href="groups.php"><i class="fas fa-users"></i></a></li>
          <li title="events"><a href="events.php"><i class="fas fa-calendar-check"></i></a></li>
        </ul>
      </div>

      <div class="top_right_menu">

        <a href="aboutme.php" title="me"><img src="images/avatar.png"></a>
        
        <div class="menu_option">
          
          <button class="top_menu_btn"><i class="fas fa-plus"></i></button>

          <div class="drop_down">

            <h2>Create New:</h2>
            <p class="create_new">Post</p>
            <p class="create_new">Message</p>
            <p class="create_new">Event</p>
          </div>

        </div>

         <div class="menu_option">
          
          <button class="top_menu_btn" title="Notifications"><i class="far fa-bell"></i></button>

          <div class="drop_down">

            <h2>Notifications</h2>
            <p class="notification"><img src="images/avatar.png"><span>Jesse jones liked your picture...</span></p>
            <p class="notification"><img src="images/avatar.png"><span>Jesse jones liked your picture...</span></p>
            <p class="notification"><img src="images/avatar.png"><span>Jesse jones liked your picture...</span></p>

            <div class="more">
              <a href="notification.php">View More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
          
        </div>

         <div class="menu_option">
          
          <button class="top_menu_btn" title="Account Settings"><i class="fas fa-user-cog"></i></button>

          <div class="drop_down">

            <h2>Account Settings</h2>
            <p><a href="#">Settings & Privacy</a></p>
            <p><a href="#">Help & Support</a></p>
            <p><a href="#">Logout</a></p>
          </div>
          
        </div>



      </div>
    </div>

    <!----------------------------main_content------------------------------------>




    <div class="main_content">
      

      <!-------------left menu----------------------->


      <div class="left_menu">
        
        <ul>
          
          <li><a href="aboutme.php"><img src="images/avatar.png"><span>Dennis Gitonga</span></a></li>
          <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>          
          <li><a href="friends.php"><i class="fas fa-user-friends"></i>Friends</a></li>
          <li><a href="messages.php"><i class="fas fa-envelope"></i>Messages</a></li>
          <li><a href="groups.php"><i class="fas fa-users"></i>Groups</a></li>
          <li><a href="events.php"><i class="fas fa-bell"></i>Notifications</a></li>
          <li><a href="friends.php"><i class="fas fa-user-friends"></i>Friends</a></li>
        </ul>


        <div class="footer">
          
          <a href="#">Privacy</a>
          <a href="#">Terms</a>
          <a href="#">Report</a>
          <a href="#">Contact Us</a>
          <a href="#">About</a>
          <a href="#">HappyFeetFamily</a>

          <p>&copy Copyright HappyFeetFamily 2020</p>
        </div>

      </div>


<!----------------------------posts content/ home------------------------------->

      <div class="posts_content">
        
        <div class="post">
          
          <div class="post_info">
            
            <div class="user_info">
            
              <img src="images/avatar.png">
              <div class="user">
                
                <p>Dennis Gitonga</p>
                <span>20 min ago</span>
              </div>
            </div>

            <div class="post_actions">
              
              <button class="open_post_actions"><i class="fas fa-ellipsis-v"></i></button>

              <div class="options">
                
                <ul>
                  <li>Open</li>
                  <li>Share</li>
                  <li>Block</li>

                  <p><button class="close_options">Close</button></p>
                </ul>
              </div>
            </div>
          </div>


         <div class="post_text">
           
           <p>Hello! Just got a new group of friends..
            I love You Maggie, Dennis, Brown, Alice. You made my day.
           </p>
         </div> 
          <div class="post_image">
            
            <img src="images/welcome.jpg">
          </div>

          <div class="post_user_actions">
            
            <button><i class="far fa-heart"></i></button><span>2000</span>
            <button><i class="far fa-comment"></i></button><span>24</span>
            <button><i class="fas fa-share"></i></button><span>45</span>

          </div>

        </div>


        <div class="post">
          
          <div class="post_info">
            
            <div class="user_info">
            
              <img src="images/avatar.png">
              <div class="user">
                
                <p>Dennis Gitonga</p>
                <span>20 min ago</span>
              </div>
            </div>

            <div class="post_actions">
              
              <button class="open_post_actions"><i class="fas fa-ellipsis-v"></i></button>

              <div class="options">
                
                <ul>
                  <li>Open</li>
                  <li>Share</li>
                  <li>Block</li>

                  <p><button class="close_options">Close</button></p>
                </ul>
              </div>
            </div>
          </div>


         <div class="post_text">
           
           <p>Hello! Just got a new group of friends..
            I love You Maggie, Dennis, Brown, Alice. You made my day.
           </p>
         </div> 

          <div class="post_user_actions">
            
            <button><i class="far fa-heart"></i></button><span>2000</span>
            <button><i class="far fa-comment"></i></button><span>24</span>
            <button><i class="fas fa-share"></i></button><span>45</span>

          </div>

        </div>



        <div class="post">
          
          <div class="post_info">
            
            <div class="user_info">
            
              <img src="images/avatar.png">
              <div class="user">
                
                <p>Dennis Gitonga</p>
                <span>20 min ago</span>
              </div>
            </div>

            <div class="post_actions">
              
              <button class="open_post_actions"><i class="fas fa-ellipsis-v"></i></button>

              <div class="options">
                
                <ul>
                  <li>Open</li>
                  <li>Share</li>
                  <li>Block</li>

                  <p><button class="close_options">Close</button></p>
                </ul>
              </div>
            </div>
          </div>


         <div class="post_text">
           
           <p>Hello! Just got a new group of friends..
            I love You Maggie, Dennis, Brown, Alice. You made my day.
           </p>
         </div> 
          <div class="post_image">
            
            <img src="images/welcome.jpg">
          </div>

          <div class="post_user_actions">
            
            <button><i class="far fa-heart"></i></button><span>2000</span>
            <button><i class="far fa-comment"></i></button><span>24</span>
            <button><i class="fas fa-share"></i></button><span>45</span>

          </div>

        </div>



        <div class="post">
          
          <div class="post_info">
            
            <div class="user_info">
            
              <img src="images/avatar.png">
              <div class="user">
                
                <p>Dennis Gitonga</p>
                <span>20 min ago</span>
              </div>
            </div>

            <div class="post_actions">
              
              <button class="open_post_actions"><i class="fas fa-ellipsis-v"></i></button>

              <div class="options">
                
                <ul>
                  <li>Open</li>
                  <li>Share</li>
                  <li>Block</li>

                  <p><button class="close_options">Close</button></p>
                </ul>
              </div>
            </div>
          </div>


         <div class="post_text">
           
           <p>Hello! Just got a new group of friends..
            I love You Maggie, Dennis, Brown, Alice. You made my day.
           </p>
         </div> 
          <div class="post_image">
            
            <img src="images/welcome.jpg">
          </div>

          <div class="post_user_actions">
            
            <button><i class="far fa-heart"></i></button><span>2000</span>
            <button><i class="far fa-comment"></i></button><span>24</span>
            <button><i class="fas fa-share"></i></button><span>45</span>

          </div>


        </div>



        <div class="post">
          
          <div class="post_info">
            
            <div class="user_info">
            
              <img src="images/avatar.png">
              <div class="user">
                
                <p>Dennis Gitonga</p>
                <span>20 min ago</span>
              </div>
            </div>

            <div class="post_actions">
              
              <button class="open_post_actions"><i class="fas fa-ellipsis-v"></i></button>

              <div class="options">
                
                <ul>
                  <li>Open</li>
                  <li>Share</li>
                  <li>Block</li>

                  <p><button class="close_options">Close</button></p>
                </ul>
              </div>
            </div>
          </div>


         <div class="post_text">
           
           <p>Hello! Just got a new group of friends..
            I love You Maggie, Dennis, Brown, Alice. You made my day.
           </p>
         </div> 
          <div class="post_image">
            
            <img src="images/welcome.jpg">
          </div>

          <div class="post_user_actions">
            
            <button><i class="far fa-heart"></i></button><span>2000</span>
            <button><i class="far fa-comment"></i></button><span>24</span>
            <button><i class="fas fa-share"></i></button><span>45</span>

          </div>

        </div>


        <div class="post">
          
          <div class="post_info">
            
            <div class="user_info">
            
              <img src="images/avatar.png">
              <div class="user">
                
                <p>Dennis Gitonga</p>
                <span>20 min ago</span>
              </div>
            </div>

            <div class="post_actions">
              
              <button class="open_post_actions"><i class="fas fa-ellipsis-v"></i></button>

              <div class="options">
                
                <ul>
                  <li>Open</li>
                  <li>Share</li>
                  <li>Block</li>

                  <p><button class="close_options">Close</button></p>
                </ul>
              </div>
            </div>
          </div>


         <div class="post_text">
           
           <p>Hello! Just got a new group of friends..
            I love You Maggie, Dennis, Brown, Alice. You made my day.
           </p>
         </div> 
          <div class="post_image">
            
            <img src="images/welcome.jpg">
          </div>

          <div class="post_user_actions">
            
            <button><i class="far fa-heart"></i></button><span>2000</span>
            <button><i class="far fa-comment"></i></button><span>24</span>
            <button><i class="fas fa-share"></i></button><span>45</span>

          </div>

        </div>



      </div>


<!--------------------------------------fast navigation links and activities---------------------------->
      <div class="fast_links">
        
        <div class="events_shortcut">
          
          <div class="events_header">
            
            <h2>New Events</h2>

          </div>

          <div class="event_list">
            
            <div class="event">

              <div class="card">
                <img src="images/welcome.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <p class="card-text">Paris Mountain-Bike race.</p>
                  <small>20 min ago</small>
                </div>
              </div>

            </div>            
          </div>

          <div class="more">
              
            <a href="#">View More <i class="fas fa-arrow-right"></i></a>

          </div>
        </div>


        <div class="friend_zone">
          
          <div class="top_header">
            
            <h2>Friend Zone</h2>
          </div>

          <div class="friends_list">
            
            <div class="friends">
            
            <img src="images/avatar.png">

            <div class="friend_info">
              
              <a href="#">Penguins Technologies</a>

              <span>@penguins_tech</span>
              <button>Follow</button>

            </div>

          </div>

          <div class="friends">
            
            <img src="images/avatar.png">

            <div class="friend_info">
              
              <a href="#">Penguins Technologies</a>

              <span>@penguins_tech</span>

              <button>Follow</button>

            </div>

          </div>

          <div class="friends">
            
            <img src="images/avatar.png">

            <div class="friend_info">
              
              <a href="#">Penguins Technologies</a>

              <span>@penguins_tech</span>
              <button>Follow</button>

            </div>

          </div>

          </div>

        </div>

      </div>


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>


  <script type="text/javascript">
    
    var top_menu_btn = document.getElementsByClassName('top_menu_btn');
    var drop_down = document.getElementsByClassName('drop_down');

    for (var i = 0; i < top_menu_btn.length; i++) {

      //adding click listener;
      top_menu_btn[i].addEventListener('click', function() {


        open_drop_down(this);

      });
    }

    function open_drop_down(btn_context) {
      
      var menu_option = btn_context.parentElement;
      var drop_down_child = menu_option.children[1];
       for (var i = 0; i < top_menu_btn.length; i++) {
          
          top_menu_btn[i].style.border = 'none';
        } 

      if (drop_down_child.style.display == 'block') {

        drop_down_child.style.display = 'none';

      } else {

        
        //close any open drop down menu first;
        for (var i = 0; i < drop_down.length; i++) {
          
          drop_down[i].style.display = 'none';
        }

        btn_context.style.border = '2px solid #000';
        drop_down_child.style.display = 'block';

      }
    }

    //opening and closing the menu;

    var menu_open = document.getElementById('menu_open');
    var menu_close = document.getElementById('menu_close');
    var left_menu = document.getElementsByClassName('left_menu')[0];

    menu_open.addEventListener('click', function() {

      menu_open.style.display = 'none';
      menu_close.style.display = 'block';
      left_menu.style.left = '0';

    });

    menu_close.addEventListener('click', function() {

      menu_close.style.display = 'none';
      menu_open.style.display = 'block';
      left_menu.style.left = '-500px';

    });

    //opening post actions;

    var open_post_actions = document.getElementsByClassName('open_post_actions');

    for (var i = 0; i < open_post_actions.length; i++) {
      
      open_post_actions[i].addEventListener('click', function() {

        openPostActions(this);
      });
    }

    function openPostActions(button_context) {
      
      var parent = button_context.parentElement;
      var options = parent.children[1];

      if (options.style.display == 'block') {

        options.style.display = 'none';

      } else {

        options.style.display = 'block';

      }
    }

    //closing post actions via close button

    var close_options = document.getElementsByClassName('close_options');
    for (var i = 0; i < close_options.length; i++) {
      
      close_options[i].addEventListener('click', function () {
      
        //close top level parent div options
        this.parentElement.parentElement.parentElement.style.display = 'none';
      });
    }

  </script>
</html>
