<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16 32x32">

    <title>Games Void Signup</title>
  </head>
  <body>

   <?php

    include 'dbcon.php';

    include 'signcod.php';

    ?>
 

    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-4 col-sm-12">
          <div class="title text-center">
            <h1><i class="fas fa-gamepad fa-xl pr-2"></i>Games Void</h1>
          </div>
        </div>
      </div> 
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="login col-md-5 col-lg-5 col-sm-12">

          <div class="heading text-center">
            <h2>SIGNUP</h2>
            <h5>Lets get started!!</h5>
          </div>
          
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="justify-content-center" >
                <div class="mb-4">
                  <input type="text" name="username" class="form-control form-control-sm" placeholder="Username" required><i class="fas fa-user"></i>
                </div>
                <div class="mb-4">
                  <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required><i class="fas fa-envelope"></i>
                </div>
                <div class="pass">
                  <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Password" required>
                  <span><i class="fas fa-lock"></i><i class="far fa-eye-slash" id="eye" onclick="cansee()"></i></span>
                </div>
                <div class="conpass" style="margin-top: -4%; margin-bottom: 9%;">
                  <input type="password" name="conpassword" id="conpassword" class="form-control form-control-sm" placeholder="Confirm Password" required>
                  <span><i class="fas fa-lock"></i><i class="far fa-eye-slash" id="coneye" onclick="seeagain()"></i></span>
                </div>
                <div class="mb-4">
                  <input type="submit" name="submit" class="btn btn-block btn-sm btn-outline-success" value="Sign Up">
                </div>
              </form>
               <div class="signup text-center">
                <p>Already have an account ?<a class="btn btn-outline-dark" href="login.php">login</a></p>
              </div>
        </div>
      </div>
      
    </div>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    <script>
      var state= false;
      function cansee(){
          if(state){
        document.getElementById("password").setAttribute("type","password");
        document.getElementById("eye").style.color='gray';
        document.getElementById("eye").setAttribute("class","far fa-eye-slash");
        state = false;
           }
           else{
        document.getElementById("password").setAttribute("type","text");
        document.getElementById("eye").style.color='#03e9f4';
        document.getElementById("eye").setAttribute("class","far fa-eye");
        state = true;
           }
      }
    </script>
     <script>
      var state= false;
      function seeagain(){
          if(state){
        document.getElementById("conpassword").setAttribute("type","password");
        document.getElementById("coneye").style.color='gray';
        document.getElementById("coneye").setAttribute("class","far fa-eye-slash");
        state = false;
           }
           else{
        document.getElementById("conpassword").setAttribute("type","text");
        document.getElementById("coneye").style.color='#03e9f4';
        document.getElementById("coneye").setAttribute("class","far fa-eye");
        state = true;
           }
      }
    </script>
    

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>
</html>