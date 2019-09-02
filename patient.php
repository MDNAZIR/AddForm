 <?php
include('database.php');
$nm = $_REQUEST['name'];
$ar = $_REQUEST['mobile'];
$adr = $_REQUEST['address'];
$tp = $_REQUEST['days'];
$rt = $_REQUEST['bill'];
#$sql="insert into request values('$n','$m','$at','$pc','$ac')";

 $web=mysqli_query($conn,"insert into patients values('$nm','$ar','$adr','$tp','$rt')");
	if (!$web)
   {
		die('Error: ' . mysql_error());
   		
	}
	else
	{
		echo("<script type='text/javascript'>alert('1 Row Inserted');</script>");
		//echo "1 row Inserted";
			header( "refresh:2;url=administrator.php" );

	}
	//echo "<h1>your request is submitted you will get a Ambulance Shortly</h1>";
	//echo ' <a href="prequest.php">click here to know driver mobile number</a>.';

	     mysqli_close($conn);
?> 
