<?php
$con=mysqli_connect('localhost','root','','blood camp');
$query="select * from booking";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE HTML>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <title>Admin </title>
        <link rel="stylesheet" href="adminhome.css">

    <style>
        table,tr,th{
            align-content: center;
            align-items: center;
            text-decoration: none;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Dashboard</header>
  <ul>
    <li><a href="appoinments.php"><i class="fas fa-images"></i>Appointments</a></li>
    <li><a href="addblooddrives.php"><i class="fas fa-plus"></i>Add Blood Drives</a></li>
  </ul>
</div>
<center>
    <section id="room">
<table align="center" border="1px" style="width: 1000px; line-height: 50px;">
    <tr>
        <th colspan="7"> <h2>View Appoinments</h2></th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone_no</th>
        <th>Blood_group</th>
        <th>location</th>
        <th>Action</th>
    </tr>
    <?php 
       $i=0;
       while ($rows=mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $rows['Name'];?></td>
            <td><?php echo $rows['Email'];?></td>
            <td><?php echo $rows['Phone_no'];?></td>
            <td><?php echo $rows['Blood_group'];?></td>
            <td><?php echo $rows['location'];?></td>
            <td><a href="delete.php?Name=<?php echo $rows["Name"]; ?>">Accept</a></td>
            </tr>
    <?php
       $i++;
       }
    ?>
</table>
</section>
</center>
</body>
</html>