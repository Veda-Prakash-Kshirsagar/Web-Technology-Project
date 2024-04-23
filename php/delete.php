<?php

    include("config.php");

    $id = $_GET['id'];

    $query = "DELETE FROM student_details WHERE id = '$id'";
    $data = mysqli_query($con,$query);

    if($data){
        echo "<script>alert('Record Updated Sucessfully')</script>";
        ?>

        <meta http-equiv = "refresh" content = "0; url = http://localhost/Project/adminpage.php" />

        <?php
        }
    else{
         echo "Failed To delete";
    }

?>