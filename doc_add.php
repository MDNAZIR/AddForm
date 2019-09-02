<?php
include('database.php');
$n = $_POST['name'];
$m = $_POST['mobile'];
$ad = $_POST['add'];
$e = $_POST['exp'];
$p = $_POST['pay'];
	
 $web=mysqli_query($conn,"insert into docters values('$n','$m','$ad','$e','$p')");
	if($web)
	{
		//sleep(3);
		//header("location: admin.php");
		echo "1 row Inserted";
		header( "refresh:2;url=administrator.php" );

		//newt_delay(10);
		//sleep(3);
		//include('admin.php');
	}
	else
	{
		echo "Failed...!";
	}

/*$sql="insert into doctorlist values('$n','$m','$ad','$e','$p')";

 $web=mysql_query($sql);
	if (!$web)
   {
		die('Error: ' . mysql_error());
	} 
	echo "<h1>Doctor Details is registered sucessfully</h1>";
	/*echo ' <a href="hdoctor.php">click here for know the hospital</a>.';
*/
	     mysqli_close($conn);
?> 
