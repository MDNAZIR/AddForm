<?php
include('database.php');
       
      echo "Successfully Submitted";
       $result = mysqli_query( $conn, "select property_id from list_property where user_id='1'") or die(mysqli_error());
       $rowscount = mysqli_num_rows($result);
       $row = mysqli_fetch_row($result);
       $property_id = $row[0];


       $name=  $_POST['name'];
       $mobile= $_POST['mobile'];
       $user_type=  $_POST['user_type'];
       $email= $_POST['email'];
       $builder_name   = $_POST['builder_name'];
      mysqli_query($conn, "INSERT INTO  list_property (name, mobile, user_type, email) VALUES('$name','$mobile','$user_type','$email')") or die(mysqli_error());


       $project_name=  $_POST['project_name'];
       $purpose= $_POST['purpose'];
       $property_type=  $_POST['property_type'];
       $BHKs= $_POST['BHKs'];
       $builtup_area   = $_POST['builtup_area'];
       $carpet_area    =$_POST['carpet_area'];
       $door_number   = $_POST['door_number'];
       $building_name   = $_POST['building_name'];
       $street_name=$_POST['street_name'];
       $area  =$_POST['area'];
       $district   =$_POST['district'];
       $state=$_POST['state'];
       $landmark  =$_POST['landmark'];
       $GPS_coordinates   =$_POST['GPS_coordinates'];
       $EB_account_number=$_POST['EB_account_number'];

mysqli_query($conn, "INSERT INTO  rent_details (property_id,project_name,purpose,property_type,BHKs,builtup_area, carpet_area,door_number,building_name,street_name,area,district,state,landmark,GPS_coordinates,EB_account_number) 
     VALUES('$property_id','$project_name','$purpose','$property_type','$BHKs','$builtup_area', '$carpet_area', '$door_number','$building_name','$street_name','$area','$district','$state','$landmark','$GPS_coordinates','$EB_account_number')") or die(mysql_error());

       
//RENT DETAILS / 
       
       $rent_amount= $_POST['rent_amount'];
       $advance_amount=  $_POST['advance_amount'];
       $rent_negotiable= $_POST['rent_negotiable'];
       $advance_negotiable= $_POST['advance_negotiable'];
       $brokerage_terms   = $_POST['brokerage_terms'];
      
     
  
       
   mysqli_query($conn, "INSERT INTO  rent_details (property_id,rent_amount,advance_amount,rent_negotiable,advance_negotiable,brokerage_terms) VALUES('$property_id', '$rent_amount','$advance_amount','$rent_negotiable', '$advance_negotiable', '$brokerage_terms')") or die(mysqli_error());
        
//LEASE DETAILS  START 

       // $lease_amount= $_POST['lease_amount'];
       // $lease_tenure=  $_POST['lease_tenure'];
       // $negotiable= $_POST['negotiable'];
       // $brokerage_terms   = $_POST['brokerage_terms'];
       // $area   = $_POST['area'];
  
       
       // mysqli_query($conn, "INSERT INTO  lease_details (lease_amount,lease_tenure,negotiable,brokerage_terms) VALUES('$lease_amount','$lease_tenure','$negotiable','$brokerage_terms')") or die(mysqli_error());
        


//property_facilities DETAILS  START 

       $floor_number= $_POST['floor_number'];
       $total_floors=  $_POST['total_floors'];
       $flooring_type= $_POST['flooring_type'];
       $property_age   = $_POST['property_age'];
       $facing   = $_POST['facing'];
       $number_of_balconies   = $_POST['number_of_balconies'];
       $number_of_bathrooms=$_POST['number_of_bathrooms'];
       $separate_dinning_space  =$_POST['separate_dinning_space'];

       $furnishing_status=$_POST['furnishing_status'];
       $parking_availability  =$_POST['parking_availability'];
       
    mysqli_query($conn, "INSERT INTO  property_facilities (property_id,floor_number,total_floors,flooring_type,property_age,facing,number_of_balconies,number_of_bathrooms,separate_dinning_space,furnishing_status,parking_availability)
      VALUES('$property_id','$floor_number','$total_floors','$flooring_type','$property_age','$facing','$number_of_balconies','$number_of_bathrooms','$separate_dinning_space','$furnishing_status','$parking_availability')") or die(mysqli_error());
        



//project_amenities DETAILS  START 

       $visitor_parking= $_POST['visitor_parking'];
       $lift=  $_POST['lift'];
       $gym= $_POST['gym'];
       $partyhall   = $_POST['partyhall'];
       $water_supply   = $_POST['water_supply'];
       $garden   = $_POST['garden'];
       $sports_facility=$_POST['sports_facility'];
       $security  =$_POST['security'];
       $amphitheatre= $_POST['amphitheatre'];
       $jogging_track   = $_POST['jogging_track'];
       $power_backup   = $_POST['power_backup'];
       $children_play_area   = $_POST['children_play_area'];
       $swimming_pool=$_POST['swimming_pool'];
       $gated_community  =$_POST['gated_community'];
       
       mysqli_query($conn, "INSERT INTO  project_amenities (property_id,visitor_parking,lift,gym,partyhall,water_supply,garden,sports_facility,security,amphitheatre,jogging_track,power_backup,children_play_area,swimming_pool,gated_community)
        VALUES('$property_id','$visitor_parking','$lift','$gym','$partyhall','$water_supply','$garden','$sports_facility','$security','$amphitheatre','$jogging_track','$power_backup','$children_play_area','$swimming_pool','$gated_community')") or die(mysqli_error());
        


//property_additional_detail DETAILS  START 

       $vaastu_compliant= $_POST['vaastu_compliant'];
       $private_garden=  $_POST['private_garden'];
       $servant_accomodation= $_POST['servant_accomodation'];
       $restrictions   = $_POST['restrictions'];
       $pets_allowed   = $_POST['pets_allowed'];
       $remarks   = $_POST['remarks'];
  
      mysqli_query($conn, "INSERT INTO  property_additional_detail (property_id,vaastu_compliant,private_garden,servant_accomodation,restrictions,pets_allowed,remarks)
        VALUES('$property_id','$vaastu_compliant','$private_garden','$servant_accomodation','$restrictions','$pets_allowed','$remarks')") or die(mysqli_error());
       
?>