<?php
include('database.php');
$n = $_POST['name'];
$m = $_POST['Mobile'];
$at = $_POST['actype'];
$pc = $_POST['pcond'];
$ac = $_POST['accloc'];
$msg1=$_POST['msg'];

 $web=mysqli_query($conn,"insert into request values('$n','$m','$at','$pc','$ac','$msg1')");
	if (!$web)
   {
   		echo "not inser";
		//die('Error: ' . mysqli_error());
   		
	}
	else
	{
		echo "1 row Insert";
			header( "refresh:2;url=admin.php" );

	}
	/*echo "<h1>your request is submitted you will get a Ambulance Shortly</h1>";
	echo ' <a href="prequest.php">click here to know driver mobile number</a>.';
*/
	     mysqli_close($conn);
?> 
