<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <title>Organizer Login </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="organizerconnect.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Admin Login</header>
        <form action="validation.php"  method="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="adminname" required placeholder="Adminname">
          </div>
<div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" name="password" required placeholder="Password">
            <span class="show">SHOW</span>
          
<div class="field">
            <input type="submit" value="LOGIN" onclick="change_page()"/>
          </div>
</form>
</div>
</div>
<script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
      <script>
          function change_page(){
              window.location.href="admin.html";
          }
      </script>
  </body>
</html>
