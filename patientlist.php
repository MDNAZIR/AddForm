
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
              <li class="page-scroll">
                     <a href="admin.php"><img src="img/h1.png" title="fghfjkghdkfjghdfk" /></a>
                </li>
            
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
                    <a href="quickinfo.html">QuickInform</a>
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
    include('database.php');

    $result = mysqli_query($conn,"Select *from patients");
$num_rows = mysqli_num_rows($result);
  if ($num_rows > 0) 
    {                 
        echo "<center><br><br><br><table border=1 width=70%>
                 <tr>
        <th> Patient Name</th>
        <th>Patient Mobile</th> 
        <th>Patient Address</th>
        <th>Patient days admmited</th>      
        <th>Patient Bill in RS</th>     
        </tr>";
        while($row = mysqli_fetch_array($result))
         {
              echo "<tr>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['mobile'] . "</td>";   
              echo "<td>" . $row['address'] . "</td>";
              echo "<td>" . $row['days'] . "</td>";
              echo "<td>" . $row['bill'] . "</td>";       
              echo "</tr>";
        }
                echo "</table><center>";
  }
    else
  {
                 print "<h3>wrong input</h3>";
      }
         mysqli_close($conn);
?> 
</section>

<section class="gallery" id="portfolio">
  
  <!-- Container (Portfolio Section) -->
<div id="gallary" class="container-fluid text-center bg-grey">
  <h2>Gallary Photos</h2>
     <div class="row">
      <div class="col-md-3">
        <img src="img/acd2.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd4.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd6.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd7.jpg">
        
      </div>

     </div>
     <div class="row">
      <div class="col-md-3">
        <img src="img/acd8.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd9.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd10.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd.jpg">
        
      </div>

     </div>
     <div class="row">
      <div class="col-md-3">
        <img src="img/acd1.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd3.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd5.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/acd11.jpg">
        
      </div>

     </div>
</div>
  
</section>


<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About</h2>
            <hr class="star-light">
        </div>
    </div>
<div class="row" style="color :blue;font-size: 30px;font-size-adjust: initial;">
    <div class="col-lg-10 col-lg-offset-1">
                    <p><h4>We’re National Accident Helpline
We’re the UK’s leading provider of personal injury advice, services and support. With 20 years’ experience, we’ve helped more people injured in accidents than anyone else.

We believe that if you’ve had an injury and it feels wrong, it probably is – and we’re committed to helping you make it right. We do this by guiding you through the steps of making a personal injury claim, and by giving free, impartial advice on compensation.<h4></p>
</div>
 <div class="col-lg-10 col-lg-offset-1">
<p><h2><center>Our Team</center></h2><h2>
  
<p><h4>
Our advisors are based in our legal support centre in Kettering, Northamptonshire and are all legally trained, so that they’re ready to help you when you call us.

We also have a network of specialist personal injury solicitors across the UK. This means we can put you forward to the right solicitor if you do decide you’d like to go ahead with a claim. And we monitor the standards of all our solicitors to make sure you’re receiving the best possible service.

Our solicitors work on a no win no fee basis, which means if your claim isn’t successful, then you won’t need to pay any money. Visit our no win no fee page to learn more.
</h4></p>
        </div>
    </div>
</div>
</section>

<section class="primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row-8">
                <div class="col-lg-4 col-lg-offset-3">
                    <li>
                        <strong class="pull-left">Mail</strong>
                        <span class="pull-right">sahibganjcollege@email.com</span>
                    </li>
                    <li>
                        <strong class="pull-left">Phone</strong>
                        <span class="pull-right">+6436 222344</span>
                    </li>
                    <li>
                        <strong class="pull-left">Address</strong>
                        <span class="pull-right" >Sahibganj College Sahibganj <br>Jharkhand 816109</span>
                    </li>
                    
                </div>
            </div>
        </div>
    </section>



    <section class="primary" id="feadback">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Feadback</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate="" action="contact.php" method="POST">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" name="message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

       <!--footer class="container" style="min-height:200px; background-color:#18bc9c;color:#fff;text-align:center;padding-top:50px;">
        INSPIRED BY PURECSS.IO © 2018 
    </footer-->  
       
    </body>
</html>


