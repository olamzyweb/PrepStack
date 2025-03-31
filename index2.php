
<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Access a wide range of past questions and study materials to ace your exams. PrepStack offers secure Paystack payment integration for easy downloads. Start preparing smarter today Discover and purchase past question and notes">
<meta name="keywords" content="Past Questions,exam Preparation,prepstack, Educational Resources,Study Materials,notes,pdf, Past Questions,Download Questions,Online Learning,Paystack Integration,Exam Success,Study Tools,Education,Exam Practice,Student Portal,Prepare for Exams,Academic Resources">
<meta name="author" content="Prepstack Olamzyweb Olanrewaju">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.prepstack.olamzyweb.com.ng">
    
    <meta property="og:title" content="PrepStack">
    <meta property="og:description" content="Access a wide range of past questions and study materials to ace your exams. Download past questions easy and affordable.">
    <meta property="og:image" content="https://prepstack.olamzyweb.com.ng/images/bg.jpg">
    <meta property="og:url" content="https://prepstack.com.ng">
    <meta property="og:type" content="website">
    <!--<meta property="og:locale" content="e">-->
    <title>PrepStack| Past questions Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .bg-image {
            background-image: url('images/hero3.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
          }

          .carousel-button {
  /* position: absolute; */
  top: 50%;
  left: 50%;
  /* transform: translate(-50%, -50%); */
}
div .cbutton{
  width: 50px;
}



          footer {
    background-color: #fff;
    color: #fff;
    padding: 40px 0;
    text-align: center;
    box-shadow: #ccc;
}

footer .footer-section h3 {
    font-size: 18px;
    margin-bottom: 15px;
}

footer a {
    color: #ccc;
    text-decoration: none;
    transition: color 0.3s;
}

footer a:hover {
    color: #ddd;
}

footer .social-icons a {
    font-size: 18px;
    margin: 0 10px;
}

    </style>
</head>
<body>
    <!-- <div class="overlay">
        <div class="container">
            <div class="landing-text">
                <h1>Welcome to Pasque</h1>
<p>Your One-Stop Platform for Accessing Past Questions</p>
                <h1>Access Past Questions Easily</h1> -->
                <!-- <p>Browse, Pay, Download. Simple and Secure.</p>
                <a href="catalog.html" class="btn btn-custom">Browse Questions</a>
            </div>
        </div> -->
    <!-- </div> --> 
    <div id="loading">
      <div class="spinner"></div>
   </div>

    <!-- Navigation
     this navbar 2 does not include warning to login -->
<?php include 'includes/navbar2.php'; ?> 
  <header>
  
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('images/hero-bg.jpg')">
          <div class="carousel-caption" style="top:30%;">
          <div class="carousel-button"><button class="btn btn-custom" style="color:white; text-decoration: none;"><a href="catalog.php">Get Started</a></button></div>
            <h1>Explore millions of past questions</h1>
            <p>Download past questions and answers .</p>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/bg.jpg')">
          <div class="carousel-caption">
            <h1>Up to date Past Questions</h1>
            <!--<p>Some representative placeholder content for the second slide.</p>-->
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/hero2.jpg')">
          <div class="carousel-caption">
            <h1>Success Comes with Hardwork and lots of revisions</h1>
            <!--<p>Some representative placeholder content for the third slide.</p>-->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
  
  <!-- Page Content -->
  <section class="py-5" id="about">
    <div class="container">
      <h1 class="fw-light">About PrepStack</h1>
      <p class="lead">At PrepStack, we understand the importance of effective preparation, which is why we've made it our mission to provide students and learners with seamless access to educational resources.</p>
<br>
<h1 class="fw-light">What We Offer</h1>
<p class="lead"><ul>
<li>A comprehensive library of past questions to help you excel in exams.</li>
<!--Easy-to-use payment integration powered by Paystack for secure transactions.-->
<li>A user-friendly dashboard for managing your downloads and payment history.</li>
<li>A robust platform for students to register, log in, and stay organized.</li>
</ul></p>
<!--Why Choose PrepStack?-->

<!--Convenience: Access past questions anytime, anywhere.-->
<!--Security: Enjoy safe and reliable transactions.-->
<!--Efficiency: Save time and focus on what's important – your studies.-->
<!--PrepStack is designed with students in mind, bridging the gap between academic challenges and success. Whether you're preparing for exams or looking to revisit concepts, our platform ensures that you have the right tools at your fingertips.-->

Join us today and take the next step toward achieving your academic goals with confidence!

</p>
    </div>
  </section>




  <div class="container-fluid px-5 my-5">
    <div class="container">
  <div class="row">
  <h1 class="fw-light">Explore</h1>
  <div class="col-md-4">
    <div class="card question-card">
        <div class="card-body">
            <h4 class="card-title">Differential Calculus</h4>
            <h5 class="card-title">MTH 112</h5>
            <p class="card-text">Past question for MTH 112.</p>
            <a href="catalog.php" class="btn btn-custom">Get Now</a>
        </div>
    </div>
</div>


<div class="col-md-4">
    <div class="card question-card">
        <div class="card-body">
             <h4 class="card-title">Programming & Algorithms</h4>
            <h5 class="card-title">CIT 237</h5>
            <p class="card-text">Past question for CIT237.</p>
            <a href="catalog.php" class="btn btn-custom">Get Now</a>
        </div>
    </div>
</div>



<div class="col-md-4">
    <div class="card question-card">
        <div class="card-body">
             <h4 class="card-title">Chemistry</h4>
            <h5 class="card-title">CHM 102</h5>
            <p class="card-text">Past question for CHM 102.</p>
            <a href="catalog.php" class="btn btn-custom">Get Now</a>
        </div>
    </div>
</div>

</div>
    </div>
</div>





<!-- this is the contact form -->
  <div class="container-fluid px-5 my-5" id="contact">
   
    <div class="row justify-content-center">
        
      <div class="col-xl-10">
        <h1>Contact </h1>
        <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-sm-6 d-none d-sm-block bg-image"> </div>
              <div class="col-sm-6 p-4">
                <div class="text-center">
                  <div class="h3 fw-light">Contact Us</div>
                  <p class="mb-4 text-muted">Reach out to us</p>
                  <p><a href="+2348165621984" style="color: #222; text-decoration: none; margin: 0 10px;">+234 816 562 1984</a> |
                  <a href="https://wa.me/2348165621984" style="color: #222; text-decoration: none; margin: 0 10px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
<path d="M 25 2 C 12.309534 2 2 12.309534 2 25 C 2 29.079097 3.1186875 32.88588 4.984375 36.208984 L 2.0371094 46.730469 A 1.0001 1.0001 0 0 0 3.2402344 47.970703 L 14.210938 45.251953 C 17.434629 46.972929 21.092591 48 25 48 C 37.690466 48 48 37.690466 48 25 C 48 12.309534 37.690466 2 25 2 z M 25 4 C 36.609534 4 46 13.390466 46 25 C 46 36.609534 36.609534 46 25 46 C 21.278025 46 17.792121 45.029635 14.761719 43.333984 A 1.0001 1.0001 0 0 0 14.033203 43.236328 L 4.4257812 45.617188 L 7.0019531 36.425781 A 1.0001 1.0001 0 0 0 6.9023438 35.646484 C 5.0606869 32.523592 4 28.890107 4 25 C 4 13.390466 13.390466 4 25 4 z M 16.642578 13 C 16.001539 13 15.086045 13.23849 14.333984 14.048828 C 13.882268 14.535548 12 16.369511 12 19.59375 C 12 22.955271 14.331391 25.855848 14.613281 26.228516 L 14.615234 26.228516 L 14.615234 26.230469 C 14.588494 26.195329 14.973031 26.752191 15.486328 27.419922 C 15.999626 28.087653 16.717405 28.96464 17.619141 29.914062 C 19.422612 31.812909 21.958282 34.007419 25.105469 35.349609 C 26.554789 35.966779 27.698179 36.339417 28.564453 36.611328 C 30.169845 37.115426 31.632073 37.038799 32.730469 36.876953 C 33.55263 36.755876 34.456878 36.361114 35.351562 35.794922 C 36.246248 35.22873 37.12309 34.524722 37.509766 33.455078 C 37.786772 32.688244 37.927591 31.979598 37.978516 31.396484 C 38.003976 31.104927 38.007211 30.847602 37.988281 30.609375 C 37.969311 30.371148 37.989581 30.188664 37.767578 29.824219 C 37.302009 29.059804 36.774753 29.039853 36.224609 28.767578 C 35.918939 28.616297 35.048661 28.191329 34.175781 27.775391 C 33.303883 27.35992 32.54892 26.991953 32.083984 26.826172 C 31.790239 26.720488 31.431556 26.568352 30.914062 26.626953 C 30.396569 26.685553 29.88546 27.058933 29.587891 27.5 C 29.305837 27.918069 28.170387 29.258349 27.824219 29.652344 C 27.819619 29.649544 27.849659 29.663383 27.712891 29.595703 C 27.284761 29.383815 26.761157 29.203652 25.986328 28.794922 C 25.2115 28.386192 24.242255 27.782635 23.181641 26.847656 L 23.181641 26.845703 C 21.603029 25.455949 20.497272 23.711106 20.148438 23.125 C 20.171937 23.09704 20.145643 23.130901 20.195312 23.082031 L 20.197266 23.080078 C 20.553781 22.728924 20.869739 22.309521 21.136719 22.001953 C 21.515257 21.565866 21.68231 21.181437 21.863281 20.822266 C 22.223954 20.10644 22.02313 19.318742 21.814453 18.904297 L 21.814453 18.902344 C 21.828863 18.931014 21.701572 18.650157 21.564453 18.326172 C 21.426943 18.001263 21.251663 17.580039 21.064453 17.130859 C 20.690033 16.232501 20.272027 15.224912 20.023438 14.634766 L 20.023438 14.632812 C 19.730591 13.937684 19.334395 13.436908 18.816406 13.195312 C 18.298417 12.953717 17.840778 13.022402 17.822266 13.021484 L 17.820312 13.021484 C 17.450668 13.004432 17.045038 13 16.642578 13 z M 16.642578 15 C 17.028118 15 17.408214 15.004701 17.726562 15.019531 C 18.054056 15.035851 18.033687 15.037192 17.970703 15.007812 C 17.906713 14.977972 17.993533 14.968282 18.179688 15.410156 C 18.423098 15.98801 18.84317 16.999249 19.21875 17.900391 C 19.40654 18.350961 19.582292 18.773816 19.722656 19.105469 C 19.863021 19.437122 19.939077 19.622295 20.027344 19.798828 L 20.027344 19.800781 L 20.029297 19.802734 C 20.115837 19.973483 20.108185 19.864164 20.078125 19.923828 C 19.867096 20.342656 19.838461 20.445493 19.625 20.691406 C 19.29998 21.065838 18.968453 21.483404 18.792969 21.65625 C 18.639439 21.80707 18.36242 22.042032 18.189453 22.501953 C 18.016221 22.962578 18.097073 23.59457 18.375 24.066406 C 18.745032 24.6946 19.964406 26.679307 21.859375 28.347656 C 23.05276 29.399678 24.164563 30.095933 25.052734 30.564453 C 25.940906 31.032973 26.664301 31.306607 26.826172 31.386719 C 27.210549 31.576953 27.630655 31.72467 28.119141 31.666016 C 28.607627 31.607366 29.02878 31.310979 29.296875 31.007812 L 29.298828 31.005859 C 29.655629 30.601347 30.715848 29.390728 31.224609 28.644531 C 31.246169 28.652131 31.239109 28.646231 31.408203 28.707031 L 31.408203 28.708984 L 31.410156 28.708984 C 31.487356 28.736474 32.454286 29.169267 33.316406 29.580078 C 34.178526 29.990889 35.053561 30.417875 35.337891 30.558594 C 35.748225 30.761674 35.942113 30.893881 35.992188 30.894531 C 35.995572 30.982516 35.998992 31.07786 35.986328 31.222656 C 35.951258 31.624292 35.8439 32.180225 35.628906 32.775391 C 35.523582 33.066746 34.975018 33.667661 34.283203 34.105469 C 33.591388 34.543277 32.749338 34.852514 32.4375 34.898438 C 31.499896 35.036591 30.386672 35.087027 29.164062 34.703125 C 28.316336 34.437036 27.259305 34.092596 25.890625 33.509766 C 23.114812 32.325956 20.755591 30.311513 19.070312 28.537109 C 18.227674 27.649908 17.552562 26.824019 17.072266 26.199219 C 16.592866 25.575584 16.383528 25.251054 16.208984 25.021484 L 16.207031 25.019531 C 15.897202 24.609805 14 21.970851 14 19.59375 C 14 17.077989 15.168497 16.091436 15.800781 15.410156 C 16.132721 15.052495 16.495617 15 16.642578 15 z"></path>
</svg></a></p>
                </div>
  
          <?php 
          
           require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
          if(isset($_POST['submi'])){
              
              $name = $_POST['name'];
              $email = $_POST['email'];
              $message = $_POST['message'];
              
              
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
    $mail->addAddress('olamzyweb@gmail.com');
    $mail->Subject = 'New message from '.$name.' @PrepStack';
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
                <h1>PrepStack message</h1>
            </div>
            <div class="body">
                <p>Hello <strong> from'.$name.'</strong>,</p>
                <p>
                Name : '.$name.'
               </p>
               <p>
                Email : '.$email.'
               </p>
               <p>
                Message : '.$message.'
               </p>
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


              
              
              
          }
          
          
          
          ?>
  
                <form id="contactForm">
  
                  <!-- Name Input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Name" data-sb-validations="required" />
                    <label for="name">Name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                  </div>
  
                  <!-- Email Input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                    <label for="emailAddress">Email Address</label>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                  </div>
  
                  <!-- Message Input -->
                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                  </div>
  
                 
  
                 
  
                  <!-- Submit button -->
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg disabled" id="submitButton" name="submi" type="submit">Submit</button>
                  </div>
                </form>
                <!-- End of contact form -->
  
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Simple Footer Start -->
<footer style="background-color: #fff; color: #222; padding: 10px 0; text-align: center; font-size: 14px; box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);">
    <p>&copy; 2024 PrepStack. All rights reserved. | OLAMZYWEB</p>
    <p>
        <a href="#" style="color: #222; text-decoration: none; margin: 0 10px;">Privacy Policy</a> |
        <a href="#" style="color: #222; text-decoration: none; margin: 0 10px;">Terms of Service</a> |
        <a href="#contact" style="color: #222; text-decoration: none; margin: 0 10px;">Contact Us</a>
    </p>
</footer>
<!-- Simple Footer End -->

  <script src="assets/js/script.js"></script>
    <!-- CDN Link to SB Forms Scripts -->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
