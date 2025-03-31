<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?><!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    
body {
  /* background: #007bff; */
  /* background: linear-gradient(to right, #0062E6, #33AEFF); */
  background-image: url('images/bg.jpg');
}

.card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('images/bg.jpg');
  background-size: cover;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}
    </style>
</head>
<body>



  <?php 

   
   include 'includes/connection.php';
   require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  
   if (isset($_POST['login'])) {
  
      function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      // $username = test_input($_POST['username']);
      $email = test_input($_POST['email']);
      $password = test_input($_POST['password']);
  
      
     $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
     $result = mysqli_query($conn, $sql);
  
        
          
          $email_result = "";
               $username = "";
       $pass_result = "";
       
       
      while($row = mysqli_fetch_assoc($result)){
          $username = $row['username'];
          $email_result = $row['email'];
      $pass_result = $row['password'];
                
      }
  
      if($email_result == $email && $pass_result == $password){
           $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
          //   $_SESSION['pass'] = $password;
          
          
        



$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'mail.olamzyweb.com.ng';
    $mail->SMTPAuth = true;
    $mail->Username = 'olanrewaju@olamzyweb.com.ng';
    $mail->Password = 'Olamzyweb@17';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->isHTML(true);
    $mail->setFrom('prepstack@olamzyweb.com.ng', 'PrepStack');
    $mail->addAddress($email);
    $mail->Subject = 'PrepStack Notice';
    $mail->Body = '<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            .email-container {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .header {
                text-align: center;
                background-color: #ffc107;
                color: white;
                padding: 10px 0;
                border-radius: 10px 10px 0 0;
            }
            .body {
                padding: 20px;
                line-height: 1.6;
                color: black;
            }
            .footer {
                text-align: center;
                padding: 10px;
                background-color: #f4f4f4;
                border-radius: 0 0 10px 10px;
                color: #666;
                font-size: 0.9em;
            }
            .button {
                display: inline-block;
                padding: 10px 20px;
                color: white;
                background-color: #ffc107;
                text-decoration: none;
                border-radius: 5px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="email-container">
            <div class="header">
                <h1>Welcome to PrepStack</h1>
            </div>
            <div class="body">
                <p>Hello <strong>'.$username.'</strong>,</p>
                <p>You recently logged in to PrepStack. We are excited to have you onboard. Here’s what you can do next:</p>
                <ul>
                    <li>Explore our features</li>
                    <li>Customize your settings</li>
                    <li>Start using our services</li>
                </ul>
                <p>Click the button below to get started:</p>
                <a href="https://prepstack.olamzyweb.com.ng/catalog.php" class="button">Get Started</a>
            </div>
            <div class="footer">
                <p>&copy; 2024 PrepStack. All rights reserved.</p>
                <p>Lagos, Nigeria.</p>
            </div>
        </div>
    </body>
    </html>';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}


          
          
          
            header('location:catalog.php');
         
              
              
          } else {
            
            
              echo '<script>alert("Invalid name or password")</script> ';
            //   sleep(5);
            
            // header('location:login.html');
            
                  
          }
    
    
   
   }
  
  ?>


    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set n CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
            <button onclick="goBack()"><img width="30" height="30" src="https://img.icons8.com/windows/32/circled-left.png" alt="circled-left"/></button>
              <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
              <form method="post" enctype="multipart/form-data" action="login.php">
  
                <!-- <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
                  <label for="floatingInputUsername">Username</label>
                </div> -->
  
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="email" id="floatingInputEmail" placeholder="name@example.com" required autofocus>
                  <label for="floatingInputEmail">Email address</label>
                </div>
  
                <hr>
  
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required >
                  <label for="floatingPassword">Password</label>
                </div>
  
                <!-- <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                  <label for="floatingPasswordConfirm">Confirm Password</label>
                </div> -->
  <!-- <input type="submit" name="login"> -->
                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="login" type="submit">Login</button>
                </div>
  
                <a class="d-block text-center mt-2 small" href="register.html">Don't Have an account? Sign Up</a>
                <a class="d-block text-center mt-2 small" href="forgot_password.html">Forgot Password?</a>
  
  
                <hr class="my-4">
  
                <!-- <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                    <i class="fab fa-google me-2"></i> Sign up with Google
                  </button>
                </div>
  
                <div class="d-grid">
                  <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                    <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                  </button>
                </div> -->
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
function goBack() {
    window.history.back();
}
</script>
  </body>
</html>