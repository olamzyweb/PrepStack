<?php 

// first version of the search
// include 'includes/connection.php';

// $search =  $_GET['q'] ?? ''; // Get the search term from the URL parameter 'q'
// // $category = isset($_GET['category']) ? $_GET['category'] : '';

// if (empty($search)) {
//     echo '<div class="col-md-12"><p>Please enter a search term.</p></div>';
//     exit; // Exit if no search term is provided
// }

// $query = "SELECT * FROM files WHERE file_name LIKE ? OR file_category LIKE ? OR file_code LIKE ?";
// $stmt = $conn->prepare($query);
// $searchTerm = "%$search%"; // Prepare the search term with wildcards for LIKE
// $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm); // Bind the parameters
// $stmt->execute();
// $result = $stmt->get_result();
// $records = $result->fetch_all(MYSQLI_ASSOC);

// if (!empty($records)) {

// foreach ($records as $record) {

//     $file_name = $record['file_name'];
//     $file_category = $record['file_category']; 
//     $file_code = $record['file_code'];
//     $amount = $record['amount'];    
//     $file_id = $record['file_id'];

//     echo '
//              <div class="col-6 col-md-4">
//                 <div class="card question-card">
//                     <div class="card-body">
//                         <h5 class="card-title">'.$record['file_name'].'</h5>
//                         <p class="card-text">'.$record['file_category'].'</p>
//                          <p class="card-text">'.$record['file_code'].'</p>
//                           <p class="card-text">N'.$record['amount'].'</p>
//                         <a href="catalogdetail.php?fileid='.$record['file_id'].'" class="btn btn-custom">Get Now</a>
//                     </div>
//                 </div>
//             </div>';
        
// }

// }else {
//     echo '<div class="col-md-12"><p>No results found for your search.</p></div>';
// }


// Second version



// include 'includes/connection.php';

// $search = $_GET['q'] ?? '';
// $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// $limit = 2;
// $offset = ($page - 1) * $limit;

// if (empty($search)) {
//     echo '<div class="col-md-12"><p>Please enter a search term.</p></div>';
//     // exit;
// }

// // 1. Count total matching records
// $countQuery = "SELECT COUNT(*) FROM files WHERE file_name LIKE ? OR file_category LIKE ? OR file_code LIKE ?";
// $stmt = $conn->prepare($countQuery);
// $searchTerm = "%$search%";
// $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
// $stmt->execute();
// $stmt->bind_result($totalRecords);
// $stmt->fetch();
// $stmt->close();

// $totalPages = ceil($totalRecords / $limit);

// // 2. Fetch paginated records
// $query = "SELECT * FROM files WHERE file_name LIKE ? OR file_category LIKE ? OR file_code LIKE ? LIMIT ? OFFSET ?";
// $stmt = $conn->prepare($query);
// $stmt->bind_param("sssii", $searchTerm, $searchTerm, $searchTerm, $limit, $offset);
// $stmt->execute();
// $result = $stmt->get_result();
// $records = $result->fetch_all(MYSQLI_ASSOC);

// if (!empty($records)) {
//     foreach ($records as $record) {
//         echo '
//             <div class="col-6 col-md-4">
//                 <div class="card question-card">
//                     <div class="card-body">
//                         <h5 class="card-title">'.htmlspecialchars($record['file_name']).'</h5>
//                         <p class="card-text">'.htmlspecialchars($record['file_category']).'</p>
//                         <p class="card-text">'.htmlspecialchars($record['file_code']).'</p>
//                         <p class="card-text">N'.htmlspecialchars($record['amount']).'</p>
//                         <a href="catalogdetail.php?fileid='.htmlspecialchars($record['file_id']).'" class="btn btn-custom">Get Now</a>
//                     </div>
//                 </div>
//             </div>';
//     }

//     // 3. Render pagination controls
//     echo '<div class="col-12 mt-4"><nav><ul class="pagination justify-content-center">';
//     for ($i = 1; $i <= $totalPages; $i++) {
//         $active = ($i == $page) ? 'active' : '';
//         echo '<li class="page-item '.$active.'"><a class="page-link search-page"  href="javascript:void(0)" data-page="'.$i.'">' . $i . '</a></li>';
//         // echo '<li class="page-item '.$active.'"><a class="page-link search-page" href="?q='.urlencode($search).'&page='.$i.'">' . $i . '</a></li>';

//     }
//     echo '</ul></nav></div>';

// } else {
//     echo '<div class="col-md-12"><p>No results found for your search.</p></div>';
// }

// $conn->close();







// third version


include 'includes/connection.php';

$search = isset($_GET['q']) ? $_GET['q'] : '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$start = ($page - 1) * $limit;

$where = "";
$params = [];
$types = "";

if (!empty($search)) {
    $searchParam = "%" . $search . "%";
    $where = "WHERE file_name LIKE ? OR file_category LIKE ? OR file_code LIKE ?";
    $params = [$searchParam, $searchParam, $searchParam];
    $types = "sss";
}

// Get total count
$countQuery = "SELECT COUNT(*) as total FROM files $where";
$countStmt = $conn->prepare($countQuery);
if ($where) {
    $countStmt->bind_param($types, ...$params);
}
$countStmt->execute();
$countResult = $countStmt->get_result();
$total = $countResult->fetch_assoc()['total'];
$pages = ceil($total / $limit);

// Fetch paginated result
$query = "SELECT * FROM files $where ORDER BY id DESC LIMIT ?, ?";
$stmt = $conn->prepare($query);
if ($where) {
    $types .= "ii";
    $params[] = $start;
    $params[] = $limit;
    $stmt->bind_param($types, ...$params);
} else {
    $stmt->bind_param("ii", $start, $limit);
}
$stmt->execute();
$result = $stmt->get_result();

$output = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $output .= '
        <div class="col-6 col-md-4">
            <div class="card question-card">
                <div class="card-body">
                    <h5 class="card-title">'.htmlspecialchars($row["file_name"]).'</h5>
                    <p class="card-text">'.htmlspecialchars($row["file_category"]).'</p>
                    <p class="card-text">'.htmlspecialchars($row["file_code"]).'</p>
                    <p class="card-text">N'.htmlspecialchars($row["amount"]).'</p>
                    <a href="catalogdetail.php?fileid='.$row["file_id"].'" class="btn btn-custom">Get Now</a>
                </div>
            </div>
        </div>';
    }

    // Pagination links
    $output .= '<div class="col-12 mt-4"><nav><ul class="pagination justify-content-center">';
    for ($i = 1; $i <= $pages; $i++) {
        $active = ($i == $page) ? 'active' : '';
        $output .= '<li class="page-item '.$active.'"><a class="page-link search-page-link" href="#" data-page="'.$i.'">'.$i.'</a></li>';
    }
    $output .= '</ul></nav></div>';
} else {
    $output = "<div class='col-12'><p class='text-center'>No results found</p></div>";
}

echo $output;



?>