<?php
$con=mysqli_connect('localhost','root','','sangamdb');
$query="select * from campaign";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE HTML>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
    <title>Upcoming Campaign</title>
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
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Blood drive</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Blood camps</a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="campaign.php">New campaigns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">contact</a>
          </li>
           
        </ul>
      </div>
    </div>
  </nav>
 
    <section>
<table align="center" border="1px" style="width: 1000px; line-height: 50px;">
    <tr>
        <th colspan="7"> <h2>Upcoming Campaign</h2></th>
    </tr>
    <tr>
        <th>Campaign Name</th>
        <th>Organizer</th>
        <th>Date</th>
        <th>Location</th>
        <th>Description</th>
        
    </tr>
    <?php 
       $i=0;
       while ($rows=mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $rows['campaignname'];?></td>
            <td><?php echo $rows['organizer'];?></td>
            <td><?php echo $rows['date'];?></td>
            <td><?php echo $rows['location'];?></td>
            <td><?php echo $rows['description'];?></td>
            
            </tr>
    <?php
       $i++;
       }
    ?>
</table>
<section>
    <br>

</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
<section>
    <br>
    
</section>
</section>
<!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Blooddrives@2021</p>
    </div>
    <!-- /.container -->
  </footer>
</center>
</body>
</html>