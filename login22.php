<?php
include('database.php');
session_start(); // Starting Session
$error=''; // Variable To Store Error Message


//if (isset($_POST['submit'])) {
//if (empty($_POST['username']) || empty($_POST['password'])) {
	//$error = "Username or Password is invalid";
//}
	//else
 //{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

	$username = stripslashes($username);
	$password = stripslashes($password);
	// $username = mysqli_real_escape_string($username);
	// $password = mysqli_real_escape_string($password);



$query = mysqli_query($conn, "select * from internal_user where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {

	 $row = mysqli_fetch_array($query);
	
	 $user_id=$row['internal_user_id'];
	 $user_catagory = $row['catagory'];
	 $_SESSION['user_catagory'] = $user_catagory;
     $_SESSION['login_user']=$username; 
     $_SESSION['user_id'] = $user_id;
   
	

     if(strcasecmp($user_catagory, 'admin') == 0){
         
             header( "refresh:1; url=administrator.php" ,TRUE,301 ); 
             echo 'You\'ll be redirected in about 1 secs. If not, click <a href="administrator.php">here</a>.';
        }



     /*else if(strcasecmp($user_catagory, 'fa') == 0){
     	
          header( "refresh:1; url=profile.php",TRUE,302 ); 
          echo 'You\'ll be redirected in about 1 secs. If not, click <a href="profile.php">here</a>.';
		} 
*/




	else {
    $error = "Username or Password is invalid";
}
    mysqli_close($conn); // Closing Connection
//}
//}

}
?>