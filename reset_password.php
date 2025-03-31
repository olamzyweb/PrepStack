<?php
include 'includes/connection.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token is valid and not expired
//     $stmt = $conn->prepare("SELECT * FROM users WHERE reset_token = ? AND token_expiry > NOW()");
//     $stmt->bind_param("s", $token);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         $user = $result->fetch_assoc();
//     } else {
//         die("Invalid or expired token.");
//     }
// } else {
//     die("No token provided.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

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
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <a href="index.php"><img width="30" height="30" src="https://img.icons8.com/windows/32/circled-left.png" alt="circled-left"/></a>
              <h5 class="card-title text-center mb-5 fw-light fs-5">Reset Password</h5>
              <form method="post" action="" name="reset_form" id="reset_form" enctype="multipart/form-data">
                  <hr>
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                  <label for="floatingPassword">Password</label>
                </div>
  
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="confirm_password" id="floatingPasswordConfirm" placeholder="Confirm Password">
                  <label for="floatingPasswordConfirm">Confirm Password</label>
                </div>
                <div id="result">
                  
                </div>
  
                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="reset_password" id="reset_password" type="submit">Change Password</button>
                </div>
  
                <a class="d-block text-center mt-2 small" href="login.php">Remember your password? Sign In</a>
  
                <hr class="my-4">
  
                
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      $(document).ready(function(){
          $('#reset_password').click(function(e){
            document.getElementById("reset_password").disabled = true;
            document.getElementById("reset_password").innerHTML = "Processing...";
           
              e.preventDefault();
              // .click('#submit');
              $.ajax({
                  url: "reset_process.php",
                  type: "POST",
                  data: $('#reset_form').serialize(),
                  success: function(response){
                      $("#result").html(response);
                      document.getElementById("reset_password").disabled = false;
                      document.getElementById("reset_password").innerHTML = "Change Password";
                  }
              });
              return false;
          });
      });
      </script>  
  </body>
</html>