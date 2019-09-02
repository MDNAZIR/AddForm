<!DOCTYPE html>

<?php
include('database.php');
session_start();
if(isset($_SESSION['user_catagory'])){
    if(strcmp($_SESSION['user_catagory'], 'admin') == 0){        
    }
    else {
        header("location: login1.php");
    }
}  else {
    header("location: login1.php");
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body bgcolor="#fff">
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
            <a class="navbar-brand" href="#page-top">Accident HelpDesk</a>
                
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <!--li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="">RequestList</a>
                </li>
                <!--li class="page-scroll">
                    <a href="">Patient List</a>
                </li>
                <li class="page-scroll">
                    <a href="">Hospital List List</a>
                </li>
                <li class="page-scroll">
                    <a href="">Ambulance List</a>
                </li>
                <li><a>ListView</a>
                    <ul>
                        <li><a>PatientList</a></li>
                        <li><a>DoctorList</a></li>
                        <li><a>HospitalList</a></li>
                        <li><a>AmbulanceList</a></li>
                    </ul>
                </li>

                <li class="page-scroll">
                    <a href=""></a>
                </li-->
                 <li><a>ListView</a>
                    <ul>
                        <li><a href="requestlist.php">RequestList</a></li>
                        <li><a href="patientlist.php">PatientList</a></li>
                        <li><a href="Doctorlist.php">DoctorList</a></li>
                        <li><a href="hospitallist.php">HospitalList</a></li>
                        <li><a href="ambulancelist.php">AmbulanceList</a></li>
                    </ul>
                </li>


                 <li><a>Resister</a>
                    <ul>
                        <li><a href="request.html">RequestRegister</a></li>
                        <li><a href="patient.html">PatientRegister</a></li>
                        <li><a href="Doctor.html">DoctorRegister</a></li>
                        <li><a href="hospital.html">HospitalRegister</a></li>
                        <li><a href="ambulance.html">AmbulanceRegister</a></li>
                    </ul>
                </li>
                
                 <a class="navbar-brand"><img src="img/un.jpg" width="30px" height="20px" alt=""></a>
                <a class="navbar-brand"> Welcome <?php print $_SESSION['user_catagory'] ?></a>
                

                <li class="page-scroll">
                    <a href="logout.php">logout</a>
                </li>
            </ul>
            
                   
                

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section>
    
</section>

<section>
    

</section>
   
    <!--footer class="container" style="min-height:200px; background-color:#18bc9c;color:#fff;text-align:center;padding-top:50px;">
        INSPIRED BY PURECSS.IO © 2018 
    </footer-->

       
       
    </body>
</html>


