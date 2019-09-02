  <?php 
include('database.php');
$userid=$_POST['userid'];
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['uname'];
$password=$_POST['password'];
$catagory=$_POST['catagory'];
$mobilenum=$_POST['mobile'];
echo "$userid";
$query =mysqli_query($conn,"insert into internal_user(internal_user_id,name,email_id,username,password,catagory,mobile_number) values('$userid','name','email','$username','password','catagory','mobilenum')");

if($query)
{
  echo "inserted";
}
else
{
  echo "failed";
}

?>
