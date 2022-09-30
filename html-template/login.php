<<<<<<< HEAD
=======
<?php
require "config.php";
?>

>>>>>>> 19cfeb520f8632491dbe9b0556b01f4e7a39331d
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/php-template/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:39 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Login</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
<<<<<<< HEAD
=======
   <?php
   $formValues = [];

   if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Check if user exists
      $sql = "select * from user where username= '" . $username . "'";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($result);


      $errors = [];
      $formValues['username'] = $username;

      if (!$user) {
         $errors['username'] = true;
      } else {
         // check if password is OK
         if ($password != $user['password']) {
            $errors['password'] = true;
         } else {
            $role = $user['role'];
            if ($role == "Admin") {
               unset($user['password']);
               $_SESSION['user'] = $user;
               header("Location: admin-dashboard.php");
            } elseif ($role == "Teacher") {
               unset($user['password']);
               $_SESSION['user'] = $user;
               header("Location: teacher-dashboard.php");
            } elseif ($role == "Student") {
               unset($user['password']);
               $_SESSION['user'] = $user;
               header("Location: student-dashboard.php");
            }
         }
      }
   }
   ?>
>>>>>>> 19cfeb520f8632491dbe9b0556b01f4e7a39331d
      <div class="main-wrapper login-body">
         <div class="login-wrapper">
            <div class="container">
               <div class="loginbox">
                  <div class="login-left">
                     <img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                  </div>
                  <div class="login-right">
                     <div class="login-right-wrap">
<<<<<<< HEAD
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <form action="https://preschool.dreamguystech.com/php-template/index.php">
                           <div class="form-group">
                              <input class="form-control" type="text" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="text" placeholder="Password">
                           </div>
                           <div class="form-group">
                              <button class="btn btn-primary btn-block" type="submit">Login</button>
                           </div>
                        </form>
                        <div class="text-center forgotpass"><a href="forgot-password.php">Forgot Password?</a></div>
                        <div class="login-or">
                           <span class="or-line"></span>
                           <span class="span-or">or</span>
                        </div>
                        <div class="social-login">
                           <span>Login with</span>
=======
                     <h1>Login</h1>
                     <p method="POST" class="account-subtitle">Access to our dashboard</p>

                     <form method="POST" class="col-md-60">
                        <div class="form-group">
                           <label for="username">Username</label>
                           <input type="text" class="form-control <?php print (isset($errors['username'])) ? 'is-invalid' : '' ?>" name="username" aria-describedby="username_validation" placeholder="Enter Username" value="<?php print (isset($formValues['username'])) ? $formValues['username'] : '' ?>">
                           <div id="username_validation" class="invalid-feedback">Username not found!</div>
                        </div>
                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" class="form-control  <?php print (isset($errors['password'])) ? 'is-invalid' : '' ?>" name="password" placeholder="Enter Password" area_describedby="password_validation">
                           <div id="password_validation" class="invalid-feedback">Password does not match!</div>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary px-4" name="login">Login</button>
                           <div class="social-login">
                              <span>Login with</span>
>>>>>>> 19cfeb520f8632491dbe9b0556b01f4e7a39331d
                           <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>
                        <div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/php-template/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:40 GMT -->
</html>