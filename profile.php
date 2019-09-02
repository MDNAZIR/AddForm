<!DOCTYPE html>

<?php
include('database.php');
session_start();
if(isset($_SESSION['user_catagory'])){
    if(strcmp($_SESSION['user_catagory'], 'fa') == 0){        
    }
    else {
        header("location: index.php");
    }
}  else {
    header("location: index.php");
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
       
    </head>
    <body>
        <h1>welcome to profile</h1>
       
     
    </body>
</html>


