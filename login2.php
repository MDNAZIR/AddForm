<?php
	include('database.php');
	$un=$_POST['username'];
	$pass=$_POST['password'];
	//echo "$un";
	//echo "$pass\n";

	$query = mysqli_query($conn, "select * from admin where Password='$pass' AND UserName='$un'");
	$rows = mysqli_num_rows($query);
	//echo "$rows";

	if($rows>0)
	{

		$row=mysqli_fetch_array($query);

		$username=$row['UserName'];
		$password=$row['Password'];
		$admin=$row['Admin'];
		//echo "$username";
		//echo "$password";
		echo "$admin";
		
		
	 	if(strcasecmp($un,$admin) == 0){
         
             header( "refresh:5; url=administrator.php" ,TRUE,301 ); 
             echo 'You\'ll be redirected in about 5 secs. If not, click <a href="administrator.php">here</a>.';
        }
        
	}
	else {
    		
		?>

    		<script type="text/javascript">
    			alert("Please Enter Valid Username and Password");
    		</script>

    	<?php
    		include('login1.php');
    	}

 mysqli_close($conn); 

?>