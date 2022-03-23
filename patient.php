<?php

  $conn = mysqli_connect("localhost", "root", "", "patient");
    
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }
    
  // Taking all 5 values from the form data(input)
  $name =  $_REQUEST['name'];
  $dob = $_REQUEST['dob'];
  $age =  $_REQUEST['age'];
  $gender = $_REQUEST['gender'];
  $marital_status =  $_REQUEST['marital_status'];
  $address =  $_REQUEST['address'];
  $city =  $_REQUEST['city'];
  $state =  $_REQUEST['state'];
  $pincode =  $_REQUEST['pincode'];
  $email = $_REQUEST['email'];
  $mobile =  $_REQUEST['mobile'];

    
  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO patient_details  VALUES ('$name', '$dob','$age','$gender',
  '$marital_status','$address','$city','$state','$pincode','$email','$mobile')";
    
  if(mysqli_query($conn, $sql)){
      echo "<h3>data stored successfully</h3>"; 

  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
  ?>