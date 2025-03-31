<?php
session_start();
 include 'includes/connection.php';
  require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
  

//  if (isset($_POST['register'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);


if(empty($username)){
  echo "username field empty";
} elseif(empty($email)) {
  echo "Email field empty";
}elseif(empty($password)) {
  echo "Password field empty";
}
else{ 


  // Check if either the username or email already exists
  $query = "SELECT * FROM users WHERE username = ? OR email = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ss", $username, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if any records were found for username or email
  if ($result->num_rows > 0) {
      // Fetch the existing record to determine which field is a duplicate
      $existingUser = $result->fetch_assoc();
      if ($existingUser['username'] === $username) {
          echo "Username already exists. Please choose a different one.";
      } elseif ($existingUser['email'] === $email) {
          echo "Email already exists. Please choose a different one.";
      }
  } else {

    
   $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES(?,?,?)");
   $stmt->bind_param("sss", $username, $email, $password);

      if($stmt->execute()){
        echo '<div class="card card-success">user successfully registered</div>';

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
                <p>Thank you for signing up for PrepStack. We are excited to have you onboard. Here’s what you can do next:</p>
                <ul>
                    <li>Explore our features</li>
                    <li>Customize your settings</li>
                    <li>Start using our services</li>
                </ul>
                <p>Click the button below to get started:</p>
                <a href="https://prepstack.com.ng/catalog.php" class="button">Get Started</a>
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

       
      }else{
        echo "An error occurred";
      }
    }
 }
//  }
?>