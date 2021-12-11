<?php

  $con =mysqli_connect('localhost','root','ajay@118');
  if(!$con){
      echo 'Not Connected to the server';
  }
  
  if(!mysqli_select_db($con,'household solutions')){
      echo 'Data base not selected';
  }
  
  $name=$_POST['name'];
  $username=$_POST['username'];
  $pass=$_POST['password'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];

  $s="select * from users_data where Name='$name' && Mobile_Number='$mobile' && Password='$pass' ";

  $result=mysqli_query($con,$s);

  $num=mysqli_num_rows($result);

  if($num==1){
    echo '<script>alert("User Already Registered!!")</script>';
    header("refresh:1;url=Register.html");
   }else{
    $reg=" insert into users_data(Name,Email_id,Password,Mobile_Number,Address) values ('$name','$username','$pass','$mobile','$address')";
    mysqli_query($con,$reg);
    echo'<script>alert("Registered Succesfully")</script>'; 
    header("refresh:1;url=login.html");
   }
   
?>