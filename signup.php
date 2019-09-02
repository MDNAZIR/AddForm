
<?php

//include('login.php'); // Includes Login Script

//  if(isset($_SESSION['login_user'])){
//  header("location: profile.php");
// }
?>


 <!DOCTYPE html>
<html>
<head>
      <title>Contact form using Bootstrap</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/login_style.css">
</head>
<body>
<div class="container-fluid">
 

       <div class="">
      
                <div class="loginmodal-container">
                    <h1>Login to Your Account</h1><br>
                  <form action="login.php" method="post">
	                  
					    <input id="name" name="username" placeholder="Username" type="text" required>
				        <input id="password" name="password" placeholder="Password" type="password" required >
	                    <input name="submit"  type="submit"  class="login loginmodal-submit" value="Login">
	                   
                  </form>
               
                </div>
            </div>
          </div>
         </body>

     <script  type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html> 