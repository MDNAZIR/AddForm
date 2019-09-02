<?php
	include('database.php');
	$mobile=$_POST['mobile1'];
	$email=$_POST['email1'];
	
	$web=mysqli_query($conn,"select *from admin where Phone='$mobile' AND Email='$email'");
	$num=mysqli_num_rows($web);

	if($num>0)
	{
		while($row=mysqli_fetch_array($web))
		{
			$abc=$row['Password'];
			$un=$row['UserName'];
		?>
		<script type="text/javascript">
			alert("Your password is:<?php echo "$abc";?> and Username is:<?php echo "$un";?>",50,60);


		</script>
		<?php
		include('login1.php');
		 	//echo "<h2>" . $row['Password'] . "</h2>";
		}
	}
	else
	{
		echo "fghfg";
	}
?>