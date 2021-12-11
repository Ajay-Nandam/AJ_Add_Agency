<?php

  $con =mysqli_connect('localhost','root','ajay@118');
  if(!$con){
      echo 'Not Connected to the server';
  }
  
  if(!mysqli_select_db($con,'household solutions')){
      echo 'Data base not selected';
  }

  $username=$_POST['username'];
  $pass=$_POST['password'];

  $s="select * from users_data where Email_id='$username'&& Password='$pass'";

  $result=mysqli_query($con,$s);

  $num=mysqli_num_rows($result);
 
  if($num==1){
     header("refresh:0;url=home.html?u=$username");
   }else{
    echo '<script> alert("Please check your username and password")</script>';
    header("refresh:1;url=login.html");
   }
   
?>