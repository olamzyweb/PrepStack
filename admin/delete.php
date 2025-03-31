<?php 

include '../includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_code = $_POST['file_code'];
    $delete_query = "DELETE FROM files WHERE file_code = '$file_code'";
    $del_sql = mysqli_query($conn, $delete_query);

    if($del_sql){
        echo 'SUCCESSFULLY DELETED!!';
    }else{
        echo 'an errror occured';
    }

}


?>