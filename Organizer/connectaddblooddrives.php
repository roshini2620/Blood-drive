<?php
session_start();
$con=mysqli_connect('localhost','root','','sangamdb');
         if(isset($_POST['submit'])){
                $campaignname=$_POST['campaignname'];
                $organizer=$_POST['organizer'];
                $date=$_POST['date'];
                $location=$_POST['location'];
                $description=$_POST['description'];
                
$s = "select * from `campaign` where location='$location'";
$result = mysqli_query($con,$s);
//$res=mysqli_result($result);
$num = mysqli_num_rows($result);

    if($num==1){
    echo "<script language='javascript'>";
    echo "alert('Already Exist.')";
    echo "</script>";
}
else{
    $reg="insert into `campaign`(`campaignname`,`organizer`,`date`,`location`,`description`) values ('$campaignname','$organizer','$date','$location','$description')";
    mysqli_query($con,$reg);
     echo "<script language='javascript'>"; 
     echo "alert('Added Sucessfully')";
     echo "</script>";  
}
}
?>





