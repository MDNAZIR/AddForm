 <?php 
include('database.php');
echo "hjjjhjhgf";
$userid=$_POST['userid'];
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$admin=$_POST['admin'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$address=$_POST['address'];
echo "$userid\n";
echo "$username\n";
echo "$email\n";
echo "$password\n";
echo "$rpassword\n";
echo "$address\n";
echo "$mobile\n";
echo "$admin\n";

 $web=mysqli_query($conn,"insert into admin values('$username','$mobile','$email','$admin','$password','$rpassword','$address','$userid')");
	if (!$web)
   {
		die('Error: ' . mysql_error());
   		
	}
	else
	{
		echo "1 row Insert";
			header( "refresh:2;url=login1.php" );

	}


?>
