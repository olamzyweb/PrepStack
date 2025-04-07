<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Access a wide range of past questions and study materials to ace your exams. PrepStack offers secure Paystack payment integration for easy downloads. Start preparing smarter today Discover and purchase past question and notes">
<meta name="keywords" content="Past Questions,exam Preparation,Educational Resources,Study Materials,notes,pdf, Past Questions,Download Questions,Online Learning,Paystack Integration,Exam Success,Study Tools,Education,Exam Practice,Student Portal,Prepare for Exams,Academic Resources">
<meta name="author" content="Prepstack Olamzyweb Olanrewaju">

<meta property="og:title" content="PrepStack-Catalog">
<meta property="og:description" content="Access a wide range of past questions and study materials to ace your exams. PrepStack offers secure integration for easy downloads. Start preparing smarter today.">
<meta property="og:image" content="images/bg.jpg">
<meta property="og:url" content="https://www.prepstack.olamzyweb.com.ng">
<meta property="og:type" content="website">

<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.prepstack.olamzyweb.com.ng">
    
    <title>Past Questions Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <style>

        body{
            background-image: url('images/bg2.jpg');
        }
        .question-card {
            padding: 2px;
            height: auto;
            min-height: 200px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background: #FFFFFF;
            margin-right: 2px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            
        }
        .card-title {
            color: #2c3e50;
            font-size: medium;
        }
        .card-text {
            font-size: small;
            padding: 0px;
            margin: 9px;
            color:rgb(22, 24, 24);
        }
        .btn-custom {
            /* background-color: #f39c12; */
            background: #FFC107;
            border-radius: 50px;
            color: white;
        }
    </style>
</head>
<body>
    <div id="loading">
        <div class="spinner"></div>
     </div>
  <!-- Navigation -->
  <?php include 'includes/navbar2.php';?>
    <div class="container mt-5">
        <!-- <h2 class="text-center mb-4">Available Past Questions</h2> -->
        <div>
        <input type="search" name="search" id="search" class="form-control mb-4" placeholder="Search for past questions...">
    </div>
        <!-- <div class="row mb-4">
            <div class="col-md-3">
                <select class="form-select" id="category" name="category">
                    <option value="">All Categories</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Science">Science</option>
                    <option value="Arts">Arts</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="year" name="year">
                    <option value="">All Years</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div> -->
            

        <div class="row">
        <div id="search-results"></div>
       
        
        <?php  
        include 'includes/connection.php';


        $query = "SELECT * FROM files";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $records = $result->fetch_all(MYSQLI_ASSOC);
        
        foreach ($records as $record) {
            echo '
            <div class="col-6 col-md-4">
                <div class="card question-card">
                    <div class="card-body">
                        <h5 class="card-title">'.$record['file_name'].'</h5>
                        <p class="card-text">'.$record['file_category'].'</p>
                         <p class="card-text">'.$record['file_code'].'</p>
                          <p class="card-text">N'.$record['amount'].'</p>
                        <a href="catalogdetail.php?fileid='.$record['file_id'].'" class="btn btn-custom">Get Now</a>
                    </div>
                </div>
            </div>';
        }
        
        
        
        
        
        
        
        ?>
        
        </div>
    </div>

    <script>
document.getElementById("search").addEventListener("keyup", function () {
    let query = this.value; // Get search input
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "search.php?q=" + query, true);
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("search-results").innerHTML = xhr.responseText;
        }
    };
    
    xhr.send();
});


    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.js" integrity="sha512-docBEeq28CCaXCXN7cINkyQs0pRszdQsVBFWUd+pLNlEk3LDlSDDtN7i1H+nTB8tshJPQHS0yu0GW9YGFd/CRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js" integrity="sha512-sNylduh9fqpYUK5OYXWcBleGzbZInWj8yCJAU57r1dpSK9tP2ghf/SRYCMj+KsslFkCOt3TvJrX2AV/Gc3wOqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js" integrity="sha512-sNylduh9fqpYUK5OYXWcBleGzbZInWj8yCJAU57r1dpSK9tP2ghf/SRYCMj+KsslFkCOt3TvJrX2AV/Gc3wOqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php // include 'includes/footer.php';?>
    <script src="assets/js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
        </script>
  <!-- Elfsight AI Chatbot | Untitled AI Chatbot -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-bd8a8ef5-2cee-45f6-94c2-853491730d63" data-elfsight-app-lazy></div>
</body>
</html>
