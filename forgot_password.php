<?php
include 'includes/connection.php';
require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));
        $expiry = date("Y-m-d H:i:s", strtotime("+2 hour")); // 1-hour expiry

        // Save token and expiry in the database
        $update_stmt = $conn->prepare("UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?");
        $update_stmt->bind_param("sss", $token, $expiry, $email);
        if ($update_stmt->execute()) {





            $reset_link = "https://prepstack.olamzyweb.com.ng/reset_password.php?token=" . $token;

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
                            <p>Hello <strong></strong>,</p>
                            <p>You recently requested to change your password on PrepStack.</p>
                           
                            <p>Click the button below to get started:</p>
                            <a href="$reset_link" class="button">Reset password</a>
                        '.$reset_link;'
                        </div>
                        <div class="footer">
                            <p>&copy; 2024 PrepStack. All rights reserved.</p>
                            <p>Lagos, Nigeria.</p>
                        </div>
                    </div>
                </body>
                </html>';
            
                $mail->send();
                echo 'Reset Details sent successfully! Check your email for instructions';
            } catch (Exception $e) {
                echo "Error: {$mail->ErrorInfo}";
            }
            
            
            


            // Send reset link to user's email
            // $reset_link = "https://prepstack.com.ng/reset_password.php?token=" . $token;
            // $subject = "Password Reset Request";
            // $message = "Click the link below to reset your password:\n" . $reset_link;
            // $headers = "From: noreply@yourwebsite.com";

            // if (mail($email, $subject, $message, $headers)) {
            //     echo "A reset link has been sent to your email.";
            // } else {
            //     echo "Failed to send email. Please try again.";
            // }
        } else {
            echo "Failed to generate reset token.";
        }
    } else {
        echo "No account found with that email.";
    }

    $stmt->close();
    $conn->close();
}
?>
