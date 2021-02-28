<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin </title>
    <link rel="stylesheet" href="adminhome.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  line-height: 2;
}
.btn {
    background-color: rgba(0,0,0,.95);
    color:#fff;
    padding: 10px 20px;
    border: none;
    font-size: 18px;
    border-radius: 100px;
    box-shadow: 7px 10px 12px rgba(0,0,0,.1);
    cursor: pointer;
    transition: all -3s;
    text-align:center;
}
.btn a{
  text-decoration: none;
  color: white;
}

.btn:hover {
    transform: scale(1.0);
    box-shadow: 10px 12px 15px rgba(0,0,0,.3);
}


input[type=text], input[type=password],input[type=date],input[type=time],select[name=select] {
  width: 20%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  
}

input[type=text]:focus, input[type=password]:focus,input[type=date]:focus,input[type=time]:focus ,select[name=select]:focus{
  background-color: #ddd;
  outline: none;
}

</style>
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
        <div class="bd">
            <form action= "connectaddblooddrives.php" method="POST">
        <h2><center>ADD BLOOD DRIVES</center></h2>
    <center>
    <div class="form-field">
        <p><b>Name of the Blood drive:</b></p>
        <input type="text" placeholder="Name of BloodDrive" name="campaignname" required>
    </div>
    <div class="form-field">
       <div class="form-field">
        <p><b>Name of the Organizer:</b></p>
        <input type="text" placeholder="Organizer Name" name="organizer" required>
    </div>
        <p> <b> Date of camp:</b></p>
        <input type="date" placeholder="Date" name="date" required> 
    </div>
    <div class="form-field">
        <p><b>Venue of camp:</b></p>
        <input type="text" placeholder="Venue" name="location" required>
    </div>
   <div class="form-field">
        <p><b>Description:</b></p>
        <textarea rows="4" cols="50" name="description"></textarea>
    </div>
    </center>
    <center><input type="submit" class="btn" name="submit"></center>
  </form>
</div>
</body>
</html>
