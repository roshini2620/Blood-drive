<?php
session_start();
	
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood camp');

$username = $_POST['Name'];
$email = $_POST['Email'];
$phone_number = $_POST['Phone_no'];
$blood_group = $_POST['Blood_group'];
$location = $_POST['location'];



// Create connection

$s = "select * from booking where Email = '$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
   echo "email already exixts";
 }

else{
$reg = "INSERT INTO `booking` (`Name`, `Email`, `Phone_no`, `Blood_group`, `location`)values ('$username','$email','$phone_number','$blood_group','$location')";
 mysqli_query($con,$reg);
   echo "Registered successfully";
 }
 
?>