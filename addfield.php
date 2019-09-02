<?php

       // $name=mysql_real_escape_string($_POST['name']);
       //  $email=mysql_real_escape_string($_POST['email']);
       //  $mobile=mysql_real_escape_string($_POST['mobile']);
       //  $msg="";

       //  $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
       //  $mob="/^[789][0-9]{9}$/";
       //  if(!preg_match($regex, $email))
       //  { 
       //    $msg="check your Email";
            
       //  }
       //  else
       //  { 
       //  if(!preg_match($mob, $mobile))
       //  { 
       //    $msg="check your Number ";
            
       //  } 

       //  }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Contact form using Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
   <script src="lib/jquery.js"></script>
  <script src="lib/jquery.mockjax.js"></script>
  <script src="lib/jquery.validate.js"></script>
  
</head>
<body>
<div class="container-fluid">
<div class="col-md-12 clkform">
    <div class="well" style="margin-top: 4%;"> 
    <a href="profile.php" id="backtoprofile">Back</a>    
      <div id="header_menubtn">
            <button name="submit" type="submit"  id="contact_btn" class="btn1"  value="contact_btn" disabled="disabled">contact</button>  
            <button name="submit" type="submit" id="property_btn" class="btn2">property</button>
             <button name="submit" type="submit" id="rent_btn" class="btn3" >address</button> 
             <button name="submit" type="submit" id="facilitie_sbtn" class="btn4 ">facilities</button>
             <button name="submit" type="submit" id="amenities_btn" class="btn5">amenities</button>
             <button  name="submit" type="submit" id="additional_btn" class="btn6">additional</button>
       </div>

      <form  action="process.php"  name="myForm"  method="post" class="squirrel"  id ="formid">
      <div class="form_group_all">

         <!-- ******** PROPERTY CONTACT DETAILS  START********-->
           <div class="row contact_details">
               <div class="col-md-2"> <div class="form-group col-md-12"><div id="structures_previous" class="previousbtn1"></div> </div></div>
               <div class="col-md-8">  <div class="title_size">PROPERTY CONTACT DETAILS</div></div>
               <div class="col-md-2"> <div class="form-group col-md-12"><div id="property_details" class="nextbtn"></div> </div></div>
               <div class="form-group col-md-12 left">
                      <div class="form-group col-md-12"><div class="label_name" >name:</div>
                      <input type="text" name="name"  id="name" required></div>

                      

                      <div class="form-group col-md-12"><div class="label_name">mobile</div><input type="number" name="mobile" id="mobile" required></div>
                       <div class="form-group col-md-12"><div class="label_name">email id:</div><input type="email" name="email" id="email"  ></div>
                 
                 <div class="form-group col-sm-12"><div class="label_name">user type:</div>
                      <div type="text" name="user_type" id="user_type"  >

                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary" id="Ownerbtn">
                                <input type="radio" name="user_type"  value="Owner" id="Owner" autocomplete="off" required> Owner
                                </label>
                                <label class="btn btn-primary" id="Builderbtn">
                                <input type="radio" name="user_type" value="Builder"  id="Builder" autocomplete="off" required> Builder
                                </label>
                                <label class="btn btn-primary" id="Agentbtn">
                                <input type="radio" name="user_type"  value="Agent" id="Agent" autocomplete="off" required> Agent
                                </label>
                            </div>
                    </div>
              </div>


                 <div class="form-group col-md-12" id="builderfield"><div class="label_name">builder name:</div><input type="text" name="builder_name" id="builder_name"></div>
                </div>

                        <div class="form-group col-md-12"><button name="submit" type="submit" id="form-submit" class="submitbtn">Submit</button> </div>


            </div>

             

<!-- ******** PROPERTY CONTACT DETAILS  END********-->
                
              
<!-- ******** PROPERTY DETAILS  START********-->
            <div class="row property_data">
               


              <div class="col-md-2"> <div class="form-group col-md-12"><div id="contact_details" class="previousbtn"></div> </div></div>
              <div class="col-md-8">  <div class="title_size">PROPERTY DETAILS</div></div>
              <div class="col-md-2"> <div class="form-group col-md-12"><div id="rent_details" class="nextbtn"></div></div></div>
 

                <div class="form-group col-md-12 left">
                    <div class="form-group col-md-12"><div class="label_name">Project Name:</div><input type="text" name="project_name"  id="project_name" required></div>
                    <div class="form-group col-md-12"><div class="label_name">Purpose:</div>
                          <div type="text" name="purpose" id="purpose" required>
                            

                      <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" id="property_data_rent_btn">
                            <input type="radio" name="purpose" value="rent" id="rent" autocomplete="off" required> Rent
                            </label>
                            <label class="btn btn-primary" id="property_data_lease_btn">
                            <input type="radio" name="purpose" value="lease" id="option2" autocomplete="off" required> Lease
                            </label>
                            <label class="btn btn-primary" id="pgbtn">
                            <input type="radio" name="purpose"  value="pg" id="option2" autocomplete="off" required> PG
                            </label>

                           <!--  <label class="btn btn-primary" id="property_data_sell_btn">
                            <input type="radio" name="purpose"  value="sell" id="sell" autocomplete="off"> Sell
                            </label> -->

                        </div>

                          
                        </div>
                    </div>

                    <div class="form-group col-md-12" id="type_btn"><div class="label_name">Property Type:</div>
                       <div type="text" name="property_type" id="property_type" required>
                          
                        <div class="btn-group" data-toggle="buttons">
                            
                           <label class="btn btn-primary">
                            <input type="radio" name="property_type" id="option2" autocomplete="off" required> Apartment
                            </label>

                            <label class="btn btn-primary">
                            <input type="radio" name="property_type" id="option2" autocomplete="off" required> Inpendent House
                            </label>

                            <label class="btn btn-primary">
                            <input type="radio" name="property_type" id="Villa" autocomplete="off" required> Villa
                            </label>

                            
                        </div>



                     </div>
                    </div>
                    <div class="form-group col-md-12" id="bhks_btn"><div class="label_name">BHKs:</div>
                       <div type="text" name="BHKs" id="BHKs"  required>
                         <div class="btn-group" data-toggle="buttons">

                            <label class="btn btn-primary">
                            <input type="radio" name="BHKs"  value="1R" id="option2" autocomplete="off" required> 1R
                            </label>

                            <label class="btn btn-primary">
                            <input type="radio" name="BHKs"  value="1RK" id="option2" autocomplete="off" required> 1RK
                            </label>

                            <label class="btn btn-primary">
                            <input type="radio" name="BHKs"  value="1 BHK" id="option1" autocomplete="off" required > 1 BHK
                            </label>

                          

                            <label class="btn btn-primary">
                            <input type="radio" name="BHKs"  value="2 BHK" id="option2" autocomplete="off" required> 2 BHK
                            </label>
                            

                            <label class="btn btn-primary">
                              <input type="radio" name="BHKs"  value="3 BHK" id="option2" autocomplete="off" required> 3 BHK
                            </label>

                            

                            <label class="others_bhk">
                                 <input type="text" name="BHKs" value="" id="option2" autocomplete="off">
                            </label>



                        </div>
                       </div>
                     </div>

                    <div class="form-group col-md-12" id="sharing_btn"><div class="label_name">Sharing:</div>
                       <div type="text" name="sharing" id="sharing"  required>
                         <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary">
                            <input type="radio" name="sharing"  value="1" id="option1" autocomplete="off"> 1
                            </label>

                            <label class="btn btn-primary">
                            <input type="radio" name="sharing"  value="2" id="option2" autocomplete="off"> 2
                            </label>

                            <label class="btn btn-primary">
                            <input type="radio" name="sharing"  value="3" id="option2" autocomplete="off"> 3
                            </label>
                              <label class="btn btn-primary">
                            <input type="radio" name="sharing"  value="4" id="option2" autocomplete="off"> 4
                            </label>

                            <label class="others_sharing">
                                 <input type="text" name="sharing"  value="" id="option2" autocomplete="off">
                            </label>
                               
                          
                        </div>
                       </div>
                     </div>
                    <div class="form-group col-md-12" id="Builtup_Area_btn"><div class="label_name">Builtup Area(sq.ft):</div><input type="text" name="builtup_area" id="builtup_area" required></div>
                    <div class="form-group col-md-12" id="carpet_Area_btn"><div class="label_name">carpet Area(sq.ft):</div><input type="text" name="carpet_area" id="carpet_area" required></div>




          <!--   rent_amount_tab -->

                <div class="rent_amount_tab">
                      <div class="form-group col-md-12"><div class="label_name">rent amount:</div><input type="text" name="rent_amount" id="rent_amount" required></div>
                       <div class="form-group col-md-12"><div class="label_name">advance amount:</div><input type="text" name="advance_amount" id="advance_amount" required></div>
                     
                      <div class="form-group col-md-12"><div class="label_name">rent negotiable</div>
                      <div type="text" name="rent_negotiable" id="rent_negotiable" required>
                          <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="rent_negotiable" value="Yes" id="option1" autocomplete="off" required> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="rent_negotiable" value="No" id="option2" autocomplete="off" required> No
                                  </label> 
                          </div>
                      </div>
                      </div>


                      <div class="form-group col-md-12"><div class="label_name">advance negotiable</div>
                      <div type="text" name="advance_negotiable" id="advance_negotiable" required>
                          <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="advance_negotiable" value="Yes" id="option1" autocomplete="off" required> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="advance_negotiable" value="No" id="option2" autocomplete="off" required> No
                                  </label> 
                          </div>
                      </div>
                      </div>

                      <div class="form-group col-md-12"><div class="label_name">brokerage terms:</div>
                      <div type="text" name="brokerage_terms" id="brokerage_terms">
                         <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="brokerage_terms" value="Yes" id="option1" autocomplete="off" required> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="brokerage_terms" value="No" id="option2" autocomplete="off" required> No
                                  </label>
                                  
                          </div>
                      </div>
                      </div>
               </div>  <!--  close  rent_amount_tab -->

          
        <!-- lease_amount_tab -->
                 <div class="lease_amount_tab">
                      <div class="form-group col-md-12"><div class="label_name">lease amount:</div><input type="text" name="lease_amount" id="lease_amount" ></div>
                       <div class="form-group col-md-12"><div class="label_name">lease tenure:</div><input type="text" name="lease_tenure" id="lease_tenure" ></div>
                      <div class="form-group col-md-12"><div class="label_name">negotiable</div>
                      <div type="text" name="negotiable" id="negotiable" required>
                         
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                <input type="radio" name="negotiable" value="Yes" id="option1" autocomplete="off" > Yes
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="negotiable" value="No" id="option2" autocomplete="off"> No
                                </label>
                                
                            </div>
                        </div>

                      </div>
                      <div class="form-group col-md-12"><div class="label_name">brokerage terms:</div>
                      <div type="text" name="brokerage_terms" id="brokerage_terms">
                           <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="brokerage_terms" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="brokerage_terms" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                 
                          </div>
                          </div>
                      </div>
                 </div> <!--  Close lease_amount_tab -->

      <!--     pg_amount_tab -->
                <div class="pg_amount_tab">
                      <div class="form-group col-md-12"><div class="label_name">PG amount:</div><input type="text" name="lease_amount" id="lease_amount" ></div>
                       <div class="form-group col-md-12"><div class="label_name">PG advance:</div><input type="text" name="lease_tenure" id="lease_tenure" ></div>
                      <div class="form-group col-md-12"><div class="label_name">negotiable</div>
                      <div type="text" name="negotiable" id="negotiable" required>
                         
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                <input type="radio" name="negotiable" value="Yes" id="option1" autocomplete="off"> Yes
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="negotiable" value="No" id="option2" autocomplete="off"> No
                                </label>
                                
                            </div>
                        </div>

                      </div>
                      <div class="form-group col-md-12"><div class="label_name">brokerage terms:</div>
                      <div type="text" name="brokerage_terms" id="brokerage_terms"  required>
                           <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="brokerage_terms" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="brokerage_terms" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                 
                          </div>
                          </div>
                      </div>
                 </div> <!-- close pg_amount_tab -->

         <!--  sell_amount_tab -->
           <div class="sell_amount_tab">
                      <div class="form-group col-md-12"><div class="label_name">Sale Price:</div><input type="text" name="lease_amount" id="lease_amount"></div>
                      <div class="form-group col-md-12"><div class="label_name">negotiable</div>
                      <div type="text" name="negotiable" id="negotiable">
                         
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                <input type="radio" name="negotiable" value="Yes" id="option1" autocomplete="off"> Yes
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="negotiable" value="No" id="option2" autocomplete="off"> No
                                </label>
                                
                            </div>
                        </div>

                      </div>
                      <div class="form-group col-md-12"><div class="label_name">brokerage terms:</div>
                      <div type="text" name="brokerage_terms" id="brokerage_terms">
                           <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="brokerage_terms" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="brokerage_terms" value="No" id="option2" autocomplete="off"> No
                                  </label>   
                          </div>

                          </div>
                      </div>
                 </div> <!-- close sell_amount_tab -->
                        <div class="form-group col-md-12"><button name="submit" type="submit" id="form-submit" class="submitbtn">Submit</button> </div>

                 </div>
           </div>

<!-- ******** PROPERTY PROPERTY DETAILS  END********-->

                                          
                  
<!-- ******** Address DETAILS  START********-->
           <div class="row rent_details">
              
               <div class="col-md-2"> <div class="form-group col-md-12"><div id="property_data_previous" class="previousbtn"></div> </div></div>
               <div class="col-md-8">  <div class="title_size">Address DETAILS</div></div>
               <div class="col-md-2"> <div class="form-group col-md-12"><div id="facilities" class="nextbtn"></div> </div></div>
              <div class="form-group col-md-12 left">

         
                       <div class="form-group col-md-12"><div class="label_name">Door number:</div><input type="text" name="door_number" id="door_number" required></div>
                       <div class="form-group col-md-12"><div class="label_name">Building Name:</div><input type="text" name="building_name" id="building_name" required></div>
                       <div class="form-group col-md-12"><div class="label_name">Street Name:</div><input type="text" name="street_name" id="street_name" required></div>
                   
                       <div class="form-group col-md-12"><div class="label_name">Area:</div><input type="text" name="area" id="area" required></div>
                        <div class="form-group col-md-12"><div class="label_name">District:</div>
                          <select type="text" name="district" id="district" required>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Mangalore">Mangalore</option>
                            <option value="Tumkur">Tumkur</option>
                          </select>
                        </div>
                       <div class="form-group col-md-12"><div class="label_name">State:</div>
                          <select type="text" name="state" id="state" required>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Kerala">Kerala</option>
                              <option value="Tamilnadu">Tamilnadu</option>
                          </select>
                       </div>
                       <div class="form-group col-md-12"><div class="label_name">Pin Code:</div><input type="text" name="pin_code" id="pin_code" required></div>
                       <div class="form-group col-md-12"><div class="label_name">Landmark:</div><input type="text" name="landmark" id="landmark" required></div>
                       <div class="form-group col-md-12"><div class="label_name">GPS Coordinates:</div><input type="text" name="GPS_coordinates" id="GPS_coordinates" required></div>
                       <div class="form-group col-md-12"><div class="label_name">EB Account Number:</div><input type="text" name="EB_account_number" id="EB_account_number" required></div>
               </div>
                                       <div class="form-group col-md-12"><button name="submit" type="submit" id="form-submit" class="submitbtn">Submit</button> </div>

              </div>

<!-- ******** Address DETAILSDETAILS  END********-->

          
<!-- ******** PROPERTY FACILITIES DETAILS  START********-->

        <div class="row property_facilities">
               
              <div class="col-md-2"> <div class="form-group col-md-12"><div id="rent_details_previou" class="previousbtn"></div> </div></div>
              <div class="col-md-8">  <div class="title_size">PROPERTY FACILITIES</div></div>
              <div class="col-md-2"> <div class="form-group col-md-12"><div id="amenities" class="nextbtn"></div> </div></div>

            <div class="form-group col-md-12 left">
                      <div class="form-group col-md-12"><div class="label_name">floor number:</div>
                         <input type="text" name="floor_number" id="floor_number"  required></div>
                     <div class="form-group col-md-12"><div class="label_name">total floors:</div><input type="text" name="total_floors" id="total_floors"  required></div>
                      
                      <div class="form-group col-md-12"><div class="label_name">flooring type:</div>
                          <div type="text" name="flooring_type" id="flooring_type" required>
                          
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                <input type="radio" name="flooring_type" value="Vertified Tiles" id="option1" autocomplete="off"> Vertified Tiles
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="flooring_type" value="Granite" id="option2" autocomplete="off"> Granite
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="flooring_type" value="Mosaic Tiles" id="Mosaic Tiles" autocomplete="off"> Mosaic Tiles
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="flooring_type" value="cement_flooring" id="cement_flooring" autocomplete="off"> Cement Flooring
                                </label> 
                                
                          </div>

                        </div>
                       </div>

                       <div class="form-group col-md-12"><div class="label_name">property age:</div>
                          <div type="text" name="property_age" id="property_age" required>
                          

                              <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                <input type="radio" name="property_age" value="0" id="0" autocomplete="off"> 0
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="property_age" value="1" id="1" autocomplete="off"> 1
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="property_age" value="2 Tiles" id="2" autocomplete="off"> 2
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="property_age" value="3" id="3" autocomplete="off"> 3
                                </label> 
                                <label class="btn btn-primary">
                                <input type="radio" name="property_age" value="4" id="4" autocomplete="off"> 4
                                </label>
                                <label class="btn btn-primary">
                                  <input type="radio" name="property_age" value="5" id="5" autocomplete="off"> 5
                                </label>
                                 <label class="facility_others_btn">
                                  <input type="text" name="property_age" value="" id="5" autocomplete="off"> 
                                </label>
                          </div>


                        </div>
                       </div>
                     <div class="form-group col-md-12"><div class="label_name">facing:</div>
                     <div type="text" name="facing" id="facing"  required>
                             <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                <input type="radio" name="facing" value="Vertified Tiles" id="option1" autocomplete="off">East
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="facing" value="west" id="west" autocomplete="off"> west
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="facing" value="north Tiles" id="north Tiles" autocomplete="off"> north
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="facing" value="south" id="south" autocomplete="off"> south
                                </label> 
                               
                          </div>
                            </div>

                     </div>
                     
                    
                     <div class="form-group col-md-12"><div class="label_name">number of balconies:</div>
                         <div type="text" name="number_of_balconies" id="number_of_balconies"  required>
                          <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                <input type="radio" name="number_of_balconies" value="0" id="0" autocomplete="off"> 0
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="number_of_balconies" value="1" id="1" autocomplete="off"> 1
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="number_of_balconies" value="2 Tiles" id="2" autocomplete="off"> 2
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="number_of_balconies" value="3" id="3" autocomplete="off"> 3
                                </label> 
                              
                                 <label class="facility_others_btn">
                                  <input type="text" name="number_of_balconies" value="" id="5" autocomplete="off"> 
                                </label>
                          </div>
                        </div>
                        </div>
                       <div class="form-group col-md-12"><div class="label_name">number of bathrooms:</div>
                       <div type="text" name="number_of_bathrooms" id="number_of_bathrooms" required>
                           <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                <input type="radio" name="number_of_bathrooms" value="0" id="0" autocomplete="off"> 0
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="number_of_bathrooms" value="1" id="1" autocomplete="off"> 1
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="number_of_bathrooms" value="2 Tiles" id="2" autocomplete="off"> 2
                                </label>
                                <label class="btn btn-primary">
                                <input type="radio" name="number_of_bathrooms" value="3" id="3" autocomplete="off"> 3
                                </label> 
                              
                                 <label class="facility_others_btn">
                                  <input type="text" name="number_of_bathrooms" value="" id="5" autocomplete="off"> 
                                </label>
                          </div>
                        </div>
                       </div>
                       <div class="form-group col-md-12"><div class="label_name">separate dinning space:</div>
                       <div type="text" name="separate_dinning_space" id="separate_dinning_space" required>
                            <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="separate_dinning_space" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="separate_dinning_space" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  
                          </div>
                        </div>
                       </div>
                      <div class="form-group col-md-12"><div class="label_name">Furnishing Status:</div>
                       <div type="text" name="furnishing_status" id="furnishing_status" required>
                              

                                <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="furnishing_status" value="Unfurnished" id="Unfurnished" autocomplete="off"> Unfurnished
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="furnishing_status" value="Semi Furnished" id="Semi Furnished" autocomplete="off"> Semi Furnished
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="furnishing_status"  value="Fully Furnished" id="Fully Furnished" autocomplete="off">Fully Furnished
                                  </label>
                          </div>


                       </div>
                      </div>
                       <div class="form-group col-md-12"><div class="label_name">Parking Availability:</div>
                       <div type="text" name="parking_availability" id="parking_availability"  required>
                           

                              <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                  <input type="radio" name="parking_availability" value="No Parking" autocomplete="off"> No Parking
                                </label>

                                <label class="btn btn-primary">
                                  <input type="radio" name="parking_availability" value="Bike" autocomplete="off"> Bike 
                                </label>
                                <label class="btn btn-primary">
                                  <input type="checkbox" name="parking_availability" value="1 Car" autocomplete="off"> 1 Car 
                                </label>
                                <label class="btn btn-primary">
                                  <input type="checkbox" name="parking_availability" value="2 Cars" autocomplete="off"> 2 Cars
                                </label>


                              </div>


                        </div>
                       </div>
                 </div>
                                         <div class="form-group col-md-12"><button name="submit" type="submit" id="form-submit" class="submitbtn">Submit</button> </div>


              </div>

<!-- ******** PROPERTY FACILITIES DETAILS  END********-->

<!-- ******** PROJECT AMENITIES DETAILS  START********-->

           <div class="row project_amenities">
              
              <div class="col-md-2"> <div class="form-group col-md-12"><div id="amenities_previous" class="previousbtn"></div> </div></div>
              <div class="col-md-8">  <div class="title_size">PROJECT AMENITIES</div></div>
              <div class="col-md-2"> <div class="form-group col-md-12"><div id="additional_detail" class="nextbtn"></div> </div></div>


            <div class="form-group col-md-12 left">
                 <div class="form-group col-md-12"><div class="label_name">Visitor Parking:</div>
                       <div type="text" name="visitor_parking" id="visitor_parking" required>
                            <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="visitor_parking" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="visitor_parking" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="visitor_parking" value="Not sure" id="option3" autocomplete="off"> Not sure
                                  </label>
                          </div>
                        </div>
                  </div>
                    <div class="form-group1 col-md-12"><div class="label_name">lift:</div>
                        <div id="lift" required>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary">
                            <input type="radio" name="lift"  value="Yes" id="option1" autocomplete="off"> Yes
                            </label>
                            <label class="btn btn-primary">
                            <input type="radio" name="lift" value="No" id="option2" autocomplete="off"> No
                            </label>
                         
                         </div>
                         </div>
                    </div>
                    <div class="form-group1 col-md-12"><div class="label_name">Gym:</div>
                         <div id="gym" required>
                            <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="gym" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="gym" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  
                          </div>
                         </div>
                    </div>

                     <div class="form-group col-md-12"><div class="label_name">partyhall:</div>
                       <div type="text" name="partyhall" id="partyhall" required>
                           <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="partyhall" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="partyhall" value="no" id="option2" autocomplete="off"> No
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="partyhall" value="Not sure" id="option3" autocomplete="off"> Not sure
                                  </label>
                          </div>
                        </div>
                     </div>
                    <div class="form-group col-md-12"><div class="label_name">water supply:</div>
                           <div type="text" name="water_supply" id="water_supply" required>
                               <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="checkbox" name="water_supply" value="Corporation" id="Corporation" autocomplete="off"> Corporation 
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="checkbox" name="water_supply" value="Borewell" id="Borewell" autocomplete="off"> Borewell
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="checkbox" name="water_supply" value="Tanker" id="Tanker" autocomplete="off">Tanker 
                                  </label>
                          </div>
                            </div>
                    </div>
                    <div class="form-group col-md-12"><div class="label_name">garden:</div>
                           <div type="text" name="garden" id="garden" required>
                               <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="garden" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="garden"  value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="garden" value="Not sure" id="option3" autocomplete="off"> Not sure
                                  </label>
                          </div>
                            </div>
                    </div>

                    <div class="form-group col-md-12"><div class="label_name">sports facility:</div>
                           <div type="text" name="sports_facility" id="sports_facility" required>
                               <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="sports_facility" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="sports_facility" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="sports_facility" value="Not sure" id="option3" autocomplete="off"> Not sure
                                  </label>
                          </div>
                            </div>
                    </div>
              
                   <div class="form-group col-md-12"><div class="label_name">security:</div>
                       <div type="text" name="security" id="security" required>
                          <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="security" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="security" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  
                          </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12"><div class="label_name">amphitheatre:</div>
                         <div type="text" name="amphitheatre" id="amphitheatre" required>
                           <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="amphitheatre" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="amphitheatre" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="amphitheatre" value="No sure" id="option3" autocomplete="off"> Not sure
                                  </label>
                          </div>
                          </div>
                    </div>
                     <div class="form-group col-md-12"><div class="label_name">jogging track:</div>
                       <div type="text" name="jogging_track" id="jogging_track" required>
                           <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="jogging_track" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="jogging_track" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="jogging_track" value=Not sure"" id="option3" autocomplete="off"> Not sure
                                  </label>
                          </div>
                        </div>
                    </div>
                     <div class="form-group col-md-12"><div class="label_name">power backup:</div>
                       <div type="text" name="power_backup" id="power_backup" required>
                           <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="power_backup" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="power_backup" value="'No" id="option2" autocomplete="off"> No
                                  </label>
                                 
                          </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12"><div class="label_name">children play area:</div>
                          <div type="text" name="children_play_area" id="children_play_area" required>
                             <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="children_play_area" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="children_play_area" value="no" id="option2" autocomplete="off"> No
                                  </label>
                                 
                          </div>
                          </div>
                  </div>
                       <div class="form-group col-md-12"><div class="label_name">swimming pool:</div>
                         <div type="text" name="swimming_pool" id="swimming_pool"  required>
                            <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="swimming_pool" value="yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="swimming_pool" value="no" id="option2" autocomplete="off"> No
                                  </label>
                                
                          </div>
                          </div>
                       </div>
          
                       <div class="form-group col-md-12"><div class="label_name">gated community:</div>
                          <div type="text" name="gated_community" id="gated_community"  required>
                            <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="gated_community" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="gated_community" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                
                          </div>
                          </div>
                       </div>   
                 </div>
                                         <div class="form-group col-md-12"><button name="submit" type="submit" id="form-submit" class="submitbtn">Submit</button> </div>


          </div>
<!-- ******** PROJECT AMENITIES DETAILS  START********-->



<!-- ******** ADDITIONAL DETAILS  START********-->

              <div class="row property_additional_detail">
               
               <div class="col-md-2"> <div class="form-group col-md-12"><div id="additional_previous" class="previousbtn"></div> </div></div>
               <div class="col-md-8">  <div class="title_size">ADDITIONAL DETAILS</div></div>
               <div class="col-md-2"> <div class="form-group col-md-12"><div id="visited_Next" class="nextbtn1"></div> </div></div>
               
               <div class="form-group col-md-12 left">
                  <div class="form-group col-md-12"><div class="label_name">vaastu compliant:</div>
                       <div type="text" name="vaastu_compliant" id="vaastu_compliant" required>
                          <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="vaastu_compliant" value="Yes" id="yes" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="vaastu_compliant" value="No" id="no" autocomplete="off"> No
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="vaastu_compliant" value="Not sure" id="notsure" autocomplete="off"> Not sure
                                  </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-12"><div class="label_name">private garden:</div>
                       <div type="text" name="private_garden" id="private_garden" required>
                          <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="private_garden" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="private_garden" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                  
                          </div>
                        </div>
                      </div>
                    <div class="form-group col-md-12"><div class="label_name">servant accomodation:</div>
                          <div type="text" name="servant_accomodation" id="servant_accomodation" required>
                            <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="servant_accomodation"  value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="servant_accomodation" value="No" id="option2" autocomplete="off"> No
                                  </label>
                                 
                          </div>
                          </div>
                  </div>
                       <div class="form-group col-md-12"><div class="label_name">restrictions:</div>
                         <div type="text" name="restrictions" id="restrictions"  required>
                             <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="restrictions" value="No restrictions" id="no_restrictions" autocomplete="off"> No restrictions
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="restrictions" value="Only Vegeterians" id="only_vegeterians" autocomplete="off"> Only Vegeterians
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="restrictions" value="Only Family" id="only_family" autocomplete="off"> Only Family
                                  </label>
                          </div>
                          </div>
                       </div>
          
                       <div class="form-group col-md-12"><div class="label_name">pets allowed:</div>
                          <div type="text" name="pets_allowed" id="pets_allowed"  required>
                            <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                  <input type="radio" name="pets_allowed" value="Yes" id="option1" autocomplete="off"> Yes
                                  </label>
                                  <label class="btn btn-primary">
                                  <input type="radio" name="pets_allowed"  value="'No" id="option2" autocomplete="off"> No
                                  </label>
                                  
                          </div>
                          </div>
                       </div>

                       </div>


                        <div class="form-group col-md-12"><div class="label_name">remarks:</div>
                         <input type="textarea" name="remarks" id="remarks"  rows="5"></div>
                        <div class="form-group col-md-12"><button name="submit" type="submit" id="form-submit" class="submitbtn">Submit</button> </div>
                   </div> 


            </div>
<!-- ******** ADDITIONAL DETAILS  START********-->


   </div>
  </form>
</div>
</div>
</div>

</body>
<script  type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/form-scripts.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
<script type="text/javascript" src="js/jquery.squirrel.min.js"></script> 


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
