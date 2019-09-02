<?php
	include('database.php');
	session_start();
	$error='';

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	$query=mysqli_query($conn,"insert into contact(Name,Email,Phone,Message)values('$name','$email','phone','$message')");

	if(@query)
	{
		//sleep(3);
		//header("location: admin.php");
		echo("<script type='text/javascript'>alert('1 row inserted'); </script>");

        //$answer = "<script type='text/javascript'> document.write(answer); </script>";
		header( "refresh:2;url=admin.php" );

		//newt_delay(10);
		//sleep(3);
		//include('admin.php');
	}
	else
	{
		echo "Failed...!";
	}
?>