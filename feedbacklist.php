
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
/*body  {
    background-image: url("img/b1.jpg");
    background-color: #cccccc;
}*/




</style>
    </head>
    <body>
      <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <!--li class="hidden">
                    <a href="#page-top"></a>
                </li-->
                  <li class="page-scroll">
                     <a href="admin.php"><img src="img/h1.png" title="Home" /></a>
                </li>

                <li>
                <a class="navbar-brand" href="#page-top" readonly>HelpDesk</a>
              </li>

                <li class="page-scroll">
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
                 

                <li><a>ListView</a>
                    <ul>
                        <li><a href="requestlist.php">RequestList</a></li>
                        <li><a href="patientlist.php">PatientList</a></li>
                        <li><a href="Doctorlist.php">DoctorList</a></li>
                        <li><a href="hospitallist.php">HospitalList</a></li>
                        <li><a href="ambulancelist.php">AmbulanceList</a></li>
                        <li><a href="feedbacklist.php">FeedBackList</a></li>
                    </ul>
                </li>


                 <!--li><a>Resister</a>
                    <ul>
                        <li><a href="request.html">RequestRegister</a></li>
                        <li><a href="patient.html">PatientRegister</a></li>
                        <li><a href="Doctor.html">DoctorRegister</a></li>
                        <li><a href="hospital.html">HospitalRegister</a></li>
                        <li><a href="ambulance.html">AmbulanceRegister</a></li>
                    </ul>
                </li-->

                   <!--li class="dropdown"><a  href="#">More</a>
                         <ul class="submenu">
                         <li><a href="#"> Apply Online</a></li>
                         <li><a href="facility.aspx"> FACILITIES</a></li>
                         <li><a href="#"> TENDER</a></li>
                         <li><a href="#"> MEDIA </a></li>
                         <li><a href="acedimiccelender.aspx">Academic Calender</a></li>
                         <li><a href="#">NAAC</a></li>
                         <li><a href="staff.aspx">Staff</a>
                         </li>
                         </ul>
                         </li-->



                 <li class="page-scroll">
                    <a href="request.html">QuickInform</a>
                </li>
                
                <li class="page-scroll">
                    <a href="#feadback">FeedBack</a>
                </li>

                <li class="page-scroll">
                    <a href="login1.php">login</a>
                </li>
                <!--li class="page-scroll">
                    <a href="logout.php">logout</a>
                </li-->
            </ul>
            
                   
                

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<section style="display: block; height: 650px">
<?php
        $con = mysql_connect("localhost","root","");
        if (!$con)
          {
            die('Could not connect: ' . mysql_error());
          }
        echo "database connected";
        echo "<br>";
        mysql_select_db("help3");

  $res=mysql_query("Select * from contact");
  $numb=mysql_num_rows($res);
  if ($numb>0) 
    {                 
    echo "<center><br><br><br><table border=2 top-margin=200px width=70%>
               <tr>
    <th>Name</th>
    <th>Email_id</th> 
    <th>Mobile Number</th>
    <th>Message</th>    
    </tr>";
    while($row = mysql_fetch_array($res))
     {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";  
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";      
        echo "</tr>";
    }
            echo "</table></center>";
  }
  else
  {
               print "<h3>wrong input</h3>";
    }
       mysql_close($con);
?>
</section>
       <!--footer class="container" style="min-height:200px; background-color:#18bc9c;color:#fff;text-align:center;padding-top:50px;">
        INSPIRED BY PURECSS.IO © 2018 
    </footer-->  
       
    </body>
</html>