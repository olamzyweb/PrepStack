<?php session_start();
$ref = $_SESSION['reference'];
$filename = $_SESSION['fname'];
$fileurl = $_SESSION['furl'];

if(empty($ref)){
    // header("location:javascript://history.go(-1)");
    header("location:accessdenied.php");
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past Questions </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <style>

        body{
            background-image: url('images/bg.jpg');
        }
        .question-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-title {
            color: #2c3e50;
        }
        .btn-custom {
            background-color: #f39c12;
            color: white;
        }
        .btn {
            width: 100px;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div id="loading">
        <div class="spinner"></div>
     </div>
  <!-- Navigation -->
 <?php include 'includes/navbar.php';?>


 


  <div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
            <h2>Downloading</h2>
          <div class="text-center">
           Kindly be patient, your download will start now. 
           <ul>
            <li>File name : <?php echo $filename;?></li>
            <li>File name : <?php echo $ref;?></li>
           </ul>
           This might take a while.   <br><div class="spinner-grow text-warning"></div>&nbsp;&nbsp;&nbsp;<div class="spinner-grow text-warning"></div>&nbsp;&nbsp;&nbsp;<div class="spinner-grow text-warning"></div>
  
  <p>Download does not start automaticlly? Click <a href="<?php //echo "file/".$fileurl;?>">here</a> </p>
  
        </div> 
        
        
        
        <!-- </div> -->
    </div>
    
<script>
//     document.addEventListener("DOMContentLoaded", function() {

//         setTimeout(function() {
//                 // window.location.href = "download.php"; // This PHP file will handle the download
            

// // Function to download the file
// function downloadFile(url, fileName) {
//     const a = document.createElement('a'); // Create an anchor element
//     a.href = url; // Set the URL of the file
//     a.download = fileName; // Set the desired file name
//     document.body.appendChild(a); // Append to the body
//     a.click(); // Trigger a click to start download
//     document.body.removeChild(a); // Remove it after triggering the download
// }


//     const fileurl2 = '<?php echo $fileurl;?>';
//     const fileUrl = 'file/' + fileurl2; // Replace with your file URL
//     const fileName = fileurl2; // Desired file name
//     downloadFile(fileUrl, fileName);


// }, 1000); // Adjust delay as needed

// });
    
    
    
    
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            // Get file name from PHP variable
            const fileName = '<?php echo $fileurl;?>';

            // Construct the secure download URL
            const downloadUrl = 'download.php?file=' + encodeURIComponent(fileName);

            // Create an anchor tag dynamically
            const a = document.createElement('a');
            a.href = downloadUrl;
            a.download = fileName; 
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }, 1000); // Adjust delay as needed
    });
</script>

    <script src="assets/js/script.js">
        
    </script>
</body>
</html>
