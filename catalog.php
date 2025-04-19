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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        








        .form-check-input {
    accent-color: #ffc107; /* Bootstrap blue, change to any color you want */
  }

  .form-check-input:checked {
    background-color: #FFC107;
    border-color: #FFC107;
    box-shadow: 0 0 4pxrgb(253, 189, 13);
  }

  .form-check-input:hover {
    border-color: #FFC107;
  }

  .form-check-input {
    width: 1.2em;
    height: 1.2em;
    cursor: pointer;
  }













        .filter-sidebar {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 20px;
            height: fit-content;
        }
        
        .filter-header {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--secondary-color);
        }

        .category-filter {
            list-style: none;
            padding: 0;
        }
        
        .category-filter li {
            margin-bottom: 8px;
        }
        
        .category-filter a {
            color: #555;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .category-filter a:hover {
            color: #FFC107;
        }
        
        .price-range-slider {
            width: 100%;
        }
        
        .price-range-values {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        
        .mobile-filter-btn {
            display: none;
        }
        
        @media (max-width: 992px) {
            .filter-sidebar {
                position: fixed;
                top: 0;
                left: -300px;
                width: 280px;
                height: 100vh;
                z-index: 1000;
                transition: left 0.3s ease;
                overflow-y: auto;
            }
            
            .filter-sidebar.active {
                left: 0;
            }
            
            .mobile-filter-btn {
                display: block;
            }
            
            .close-filter-btn {
                display: block;
                position: absolute;
                right: 15px;
                top: 15px;
                font-size: 1.5rem;
                cursor: pointer;
            }

            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 999;
                display: none;
            }
            
            .overlay.active {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div id="loading">
        <div class="spinner"></div>
     </div>
  <!-- Navigation -->
  <?php include 'includes/navbar2.php';?>


  <div class="container my-4">
        <div class="row">
            <!-- Filter Sidebar -->
            <div class="col-lg-3">
                
                <div class="filter-sidebar mb-4">
                <br><br>
                    <span class="close-filter-btn d-lg-none">&times;</span>
                    
                    <h5 class="filter-header">Categories</h5>
                    <form>
                    <div class="form-check">
  <input class="form-check-input" type="radio" name="category" id="all" checked>
  <label class="form-check-label" for="all">
   All
  </label>
</div>
                    <div class="form-check">
  <input class="form-check-input" type="radio" name="category" id="waec"  value="waec">
  <label class="form-check-label" for="waec">
   WAEC
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="category" id="utme" value="utme">
  <label class="form-check-label" for="utme">
    UTME
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="category" id="postutme" value="postutme">
  <label class="form-check-label" for="postutme">
  Post UTME
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="category" id="University" value="University">
  <label class="form-check-label" for="University">
    University
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="category" id="lecturenotes" value="lecturenotes">
  <label class="form-check-label" for="lecturenotes">
    Lecture Notes
  </label>
</div>
    </form>                    
                    <h5 class="filter-header mt-4">Year</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="year2022">
                        <label class="form-check-label" for="year2022">2022</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="year2023">
                        <label class="form-check-label" for="year2023">2023</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="year2024">
                        <label class="form-check-label" for="year2024">2024</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="year2025">
                        <label class="form-check-label" for="year2025">2025</label>
                    </div>
                    
                    <button class="btn btn-custom w-100 mt-3">Apply Filters</button>
                    <button class="btn btn-outline-secondary w-100 mt-2">Reset</button>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex">
                        <button class="btn btn-outline-secondary mobile-filter-btn me-2 d-lg-none">
                            <i class="fas fa-filter"></i> Filters
                        </button>
                        <select class="form-select" style="width: auto;">
                            <option>Sort by: Featured</option>
                            <option>Newest</option>
                            <option>Most Downloaded</option>
                        </select>
                    </div>
                </div>
      
    <div class="container mt-5">
        <!-- search bar -->
        <div>
        <input type="search" name="search" id="search" class="form-control mb-4" placeholder="Search by Year, Catergory, Level...">
    </div>
        <div class="row mb-4">
          

        <div class="row">
        <div id="search-result" class="row"></div>
       
        
        <?php  
        include 'includes/connection.php';        
        ?>
    
        </div>
    </div>
    <div class="overlay"></div>
    <script>
function load_data(query = '', page = 1) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "search.php?q=" + encodeURIComponent(query) + "&page=" + page, true);
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("search-result").innerHTML = xhr.responseText;
        }
    };
    
    xhr.send();
}
document.getElementById("search").addEventListener("keyup", function () {
    const query = this.value;
    load_data(query, 1); // Always reset to page 1 on new search
});

$(document).on('click', '.search-page-link', function (e) {
    e.preventDefault();
    const page = $(this).data('page');
    const query = $('#search').val();
    load_data(query, page);
});
load_data(); // Initial load

    </script>

     <script>
        // Mobile filter toggle
        document.querySelector('.mobile-filter-btn').addEventListener('click', function() {
            document.querySelector('.filter-sidebar').classList.add('active');
            document.querySelector('.overlay').classList.add('active');
        });
        
        // Close filter sidebar
        document.querySelector('.close-filter-btn').addEventListener('click', function() {
            document.querySelector('.filter-sidebar').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
        });
        
        // Close filter sidebar when clicking overlay
        document.querySelector('.overlay').addEventListener('click', function() {
            document.querySelector('.filter-sidebar').classList.remove('active');
            this.classList.remove('active');
        });
        
        // Price range display update
        const priceSlider = document.querySelector('.price-range-slider');
        const priceValues = document.querySelectorAll('.price-range-values span');
        
        priceSlider.addEventListener('input', function() {
            priceValues[1].textContent = '$' + this.value;
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.js" integrity="sha512-docBEeq28CCaXCXN7cINkyQs0pRszdQsVBFWUd+pLNlEk3LDlSDDtN7i1H+nTB8tshJPQHS0yu0GW9YGFd/CRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js" integrity="sha512-sNylduh9fqpYUK5OYXWcBleGzbZInWj8yCJAU57r1dpSK9tP2ghf/SRYCMj+KsslFkCOt3TvJrX2AV/Gc3wOqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js" integrity="sha512-sNylduh9fqpYUK5OYXWcBleGzbZInWj8yCJAU57r1dpSK9tP2ghf/SRYCMj+KsslFkCOt3TvJrX2AV/Gc3wOqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php //include 'includes/footer.php';?>
    <script src="assets/js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
        </script>
  
</body>
</html>
