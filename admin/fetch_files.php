


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch_files</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

</head>
<body>
    

                                <?php 

                                    include '../includes/connection.php';
//                                  this is the fetch logic

                                    $query = "SELECT * FROM files";
                                    $sql = mysqli_query($conn, $query);


                                    if ($sql) {
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                            echo '<tr>
                                        <td>'.$row['file_name'].'</td>
                                        <td>'.$row['file_category'].'</td>
                                        <td>'.$row['file_url'].'</td>
                                        <td>'.$row['file_code'].'</td>
                                        <td>'.$row['amount'].'</td>
                                        <td><button class="btn btn-warning">Update</button> 
 <form method="POST" id="del_form_' . $row['file_code'] . '" style="display:inline;">
                    <input type="hidden" name="file_code" value="' . $row['file_code'] . '">
                    <button type="button" id="del_' . $row['file_code'] . '" class="btn btn-danger delete-btn">Delete</button>
                </form>
                                        </td>
                                       
                                   </tr>';
                                   $file_code = $row['file_code'];
                                        }

                                        // this is the delete logic
                                    //     if(isset($_POST['del'])){
                                    //         $delete_query = "DELETE FROM files WHERE file_code = '$file_code'";
                                    //         $del_sql = mysqli_query($conn, $delete_query);
    
                                    //         if($del_sql){
                                    //             echo 'successfully deleted!!!';
                                    //         }else{
                                    //             echo 'an errror occured';
                                    //         }
                                    //        }
                                    }

                                   
                                    ?>
                                   <script>
                                   $(document).ready(function () {
    $(document).on('click', '.delete-btn', function (e) {
        e.preventDefault();

        const button = $(this); // Current delete button
        const form = button.closest('form'); // Closest form element
        const fileCode = form.find('input[name="file_code"]').val(); // Get the file_code value

        button.prop('disabled', true).text("Processing...");

        $.ajax({
            url: "delete.php",
            type: "POST",
            data: { file_code: fileCode },
            success: function (response) {
                $("#result").html(response); // Display the response message
                button.closest('tr').remove(); // Remove the table row after deletion
            },
            error: function () {
                alert("An error occurred while processing your request.");
                button.prop('disabled', false).text("Delete");
            }
        });
    });
});

      </script>  
    </body>
</html>

                                   
                           