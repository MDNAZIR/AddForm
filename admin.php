<!DOCTYPE html>

<!--?php
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

?-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

<!--script type="text/javascript" href="form-scripts.js"></script>

  <script type="text/javascript">
    var index=1;
    showImage(1);
    function showImage(n){
      var i;
      var x=document.getElementByClassName("slides");
      if(n>x.length){ index=1};
      if(n<1){ index=x.length};

      for(i=0;i<x.length;i++)
      {
        x[i].style.display="none";
      }
      x[index-1].style.display="block";
    }
    functi plusIndex(n)
    {
      index=index+1;
      showImage(index);
    }

    autoSlide();

    function autoSlide()
    {
      alert("hi");
       var i;
      var x=document.getElementByClassName("slides");
       for(i=0;i<x.length;i++)
      {
        x[i].style.display="none";
      }
      if(index>x.length){ index=1 }
      x[index-1].style.display="block";
      index++;
      setTimeout(autoSlide,2000)
    }

  </script-->
<script type="text/javascript">

        var i=0;

        var path=new Array();

        path[0]="img/acd2.jpg";


        path[1]="img/acd4.jpg";


        path[2]="img/acd5.jpg";


        path[3]="img/acd7.jpg";


        path[4]="img/acd8.jpg";


        path[5]="img/acd9.jpg";


        /*path[6]="img/7.jpg";*/


        function swapimage (){

            document.slide.src=path[i];

            if (i<path.length-1)

                i++;

            else

                i=0;

            setTimeout("swapimage()",2000);

        }

        window.onload=swapimage;



//<script type="text/javascript">

var slideIndex = 1;

showSlide(slideIndex);


function plusSlides(n){

showSlide(slideIndex += n);

}


function currentSlide(n) {

showSlide(slideIndex = n);

}


function showSlide(n){

var i;

var slides = document.getElementsByClassName("myslides");

var dots = document.getElementsByClassName("dots");

if (n > slides.length) { slideIndex = 1};

if (n < 1) { slideIndex = slides.length};

for (i=0;i<slides.length;i++) {

slides[i].style.display = "none";

};

for (i=0;i<dots.length;i++) {

dots[i].className = dots[i].className.replace(" active","");

};

slides[slideIndex-1].style.display = "block";

dots[slideIndex-1].className += " active";

}


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
} 



</script>




<style>

/*.navbar-nav ul > li:hover{
  color: red;
}*/

.collapsible1 {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active1, .collapsible1:hover {
    background-color: #555;
}

.content1 {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 2.2s ease-out;
    background-color: #f1f1f1;
}
</style>

 
    <style type="text/css">

        body{

            margin: 0;

            padding: 0;

        }

        .box{

            height: 100%;

            width: 100%;

        }
        img{
          margin: 0;
          padding: 0;
        }

    </style>


    </head>
    <body>
    
      <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <!--div class="navbar-header page-scroll">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="Doctor.html"><img src="img/h1.png" title="fghfjkghdkfjghdfk" /></a>
            <a class="navbar-brand" href="#page-top" readonly>Accident HelpDesk</a>
        </div-->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div>

            <ul class="nav navbar-nav navbar-left">
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
                
                  <li class="hidden">
                    <a href="#page-top"></a>
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
              <!--div class="search">

            <form>

                <input type="text" placeholder="Search.....">

                <button>Search</button>

            </form>

        </div-->
            
                   
                

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!--header id="page-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" class="slideshow">
              <!--figure>
                <img class="img-responsive" src="img/1.jpg" alt="1">
                
              </figure-->


              <!--div class="slidesshow">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!--ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <!--div class="carousel-inner">
    <div class="item active" class="slides">
      <img src="img/1.jpg" alt=" 1">
    </div>

    <div class="item">
      <img src="img/2.jpg" alt="7">
    </div>

    <div class="item">
      <img src="img/1.jpg" alt="9">
    </div>
  </div>

  <!-- Left and right controls -->
  <!--a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

                 
  </div>
</div-->
<section>
  <div id="container" class="carousel-inner">
    <img class="box" name="slide" src="acd9.jpg" width="100%" height="70%">
 </div>
</section>
 <!--div id="container">
      
      <img name="slides" src="img/1.jpg" alt=" 4" />
      <img name="slides" src="img/4.jpg" alt="1" />

      <img class="slides" src="img/2.jpg" alt=" 2" />

    
    <button class="btn" onclick="plusIndex(-1)">&#10094</button>
     <button class="btn" id="btn2" onclick="plusIndex(1)">&#10095</button>
    
  </div>

</header>


<!--div class="content-wrapper">
    <!--section class="primary" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>PORTAFOLIO</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row boxestion">
                <div class="col-sm-4">
                    <img src="img/1.jpg">    
                </div>
                <div class="col-sm-4">
                    <img src="img/2.jpg">    
                </div>
                <div class="col-sm-4">
                    <img src="img/3.png">    
                </div>
            </div>
        </div>
    </section-->
<!--section>
    <div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Gallary Photos</h2>
     <div class="row">
      <div class="col-md-3">
        <img src="img/1.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/2.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/4.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/1.jpg">
        
      </div>

     </div>
     <div class="row">
      <div class="col-md-3">
        <img src="img/2.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/4.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/7.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/1.jpg">
        
      </div>

     </div>
     <div class="row">
      <div class="col-md-3">
        <img src="img/1.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/1.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/1.jpg">
        
      </div>
      <div class="col-md-3">
        <img src="img/1.jpg">
        
      </div>

     </div>
</div>
</section-->

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
We’re the India's leading provider of personal injury advice, services and support. With 2 years’ experience, we’ve helped more people injured in accidents than anyone else.

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
    <!--section id="about" class="success">
        <div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div> 
        <div class="col-lg-4">
            <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
        </div>
    </div>
    </section-->

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
                        <span class="pull-right">nazir5246ahmad@email.com</span>
                    </li>
                    <li>
                        <strong class="pull-left">Phone</strong>
                        <span class="pull-right">7004674540,8083831418</span>
                    </li>
                    <li>
                        <strong class="pull-left">Address</strong>
                        <span class="pull-right" >Minhaj Nagar,Jp Nagar,Bangalore 560070<br>Jharkhand 816109</span>
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

    <!--section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            
        </div>
    </section-->

     
<button class="collapsible1">Request List</button>
<div class="content1">
  <?php
  include('database.php');

  $result = mysqli_query($conn,"SELECT * FROM request  ");
$num_rows = mysqli_num_rows($result);
  if ($num_rows > 0) 
    {                 
    echo "<center><br><br><br><table border=1 width=70%>
               <tr>
    <th>Name</th>
    <th>Mobile</th> 
    <th>Accident Location</th>
    <th>Accident Type</th>    
    <th>Patient Condition</th>  
      
    </tr>";
    while($row = mysqli_fetch_array($result))
     {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>"; 
        echo "<td>" . $row['alocation'] . "</td>";
        echo "<td>" . $row['accidenttype'] . "</td>";
        echo "<td>" . $row['pcondition'] . "</td>";
                
        echo "</tr>";
    }
            echo "</table></center>";
  }
  else
  {
               print "<h3>wrong input</h3>";
    }
       mysqli_close($conn);
?> 
</div>
</br>
  
   <button class="collapsible1">Hospital List</button>
<div class="content1">
  
<?php
  include('database.php');

$result = mysqli_query($conn,"SELECT * FROM HOSPITALS");
$num_rows = mysqli_num_rows($result);
  if ($num_rows > 0) 
    {                 
    echo "<center><br><br><br><table border=1 width=70%>
               <tr>
    <th> Hospital Name</th>
    <th>Hospital Area</th>  
    <th>Hospital Address</th>
    <th>Hospital Sepciality</th>    
    <th>Hospital Rattings</th>    
    </tr>";
    while($row = mysqli_fetch_array($result))
     {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['area'] . "</td>"; 
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['ratting'] . "</td>";      
        echo "</tr>";
    }
            echo "</table></center>";
            #include('admin.php');
  }
  else
  {
               print "<h3>No Doctors Record Present</h3>";
    }
       mysqli_close($conn);
?> 

</div><br><br>

</div>
       <footer class="container" style="min-height:200px; background-color:#18bc9c;color:#fff;text-align:center;padding-top:50px;">
        INSPIRED BY PURECSS.IO © 2018 
    </footer>  
      </body> 
      <!--script type="text/javascript">
    var index=1;
    showImage(1);
    function showImage(n){
      var i;
      var x=document.getElementByClassName("slides");
      if(n>x.length){ index=1};
      if(n<1){ index=x.length};

      for(i=0;i<x.length;i++)
      {
        x[i].style.display="none";
      }
      x[index-1].style.display="block";
    }
    functi plusIndex(n)
    {
      index=index+1;
      showImage(index);
    }
  </script-->

  <script>
var coll = document.getElementsByClassName("collapsible1");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

</html>


