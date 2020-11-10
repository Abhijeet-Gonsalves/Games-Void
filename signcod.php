<?php
if(isset($_POST['submit'])){
      $username = mysqli_real_escape_string($con, $_POST['username']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      $conpassword = mysqli_real_escape_string($con, $_POST['conpassword']);

      $pass = password_hash($password, PASSWORD_BCRYPT);
      $conpass = password_hash($conpassword, PASSWORD_BCRYPT);
      $emailquery = " select * from registration where email='$email' ";
      $query = mysqli_query($con,$emailquery);
      $emailcount = mysqli_num_rows($query);

      if($emailcount>0){
        /*echo "email already exists";*/
         ?>
          <script >alert("Email already exists");
          </script>
           <?php
      }else{
        if($password === $conpassword){

          $insertquery ="insert into registration(username, email, password, conpassword) values('$username','$email','$pass','$conpass')";
          $iquery = mysqli_query($con, $insertquery);

          if($iquery){
             ?>
          <script >alert("Registered Successfully ");
          </script>
          <script>
            location.replace("login.php");
          </script>
           <?php
          }else{
             ?>
          <script >alert("Registration failed");
          </script>
           <?php
          }


        }else{
          ?>
          <script >alert("invalid password");
          </script>
           <?php
        }
      }
    }
    ?>