<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db("nm", $conn);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query("select username from internal_user where username='$user_check'", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}



//Last time user logged in to their account 


date_default_timezone_set("Asia/Kolkata");
	$datetime = date("d/m/Y").' '.date("h:i:s");
	echo $datetime;
	$qry="UPDATE internal_user SET last_login_date='".$datetime."' WHERE username='".$user_check."'";
	$result=mysql_query($qry);


?>	



