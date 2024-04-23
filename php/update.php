<?php
    include("config.php");
    $id = $_GET['id'];

    $query = "SELECT * FROM student_details WHERE id = '$id'" ;
    $data = mysqli_query($con, $query);

    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Admission Webportal</title>
        <meta name="description" content="Student Admission Webportal | DBMS Mini Project">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="application/x-javascript">
            addEventListener("load", function() { 
                setTimeout(hideURLbar, 0); 
            }, false);

            function hideURLbar(){ 
                window.scrollTo(0,1); 
            } 
        </script>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>

        </form>

        <h1 class="main-heading">Admin Panel</h1>
        <main class="container">
            <h3>Update Student Details</h3>
    
            <form  method="POST" class="admission-form">
                <div class="student-details">
                    <h3>Student Details</h3>
                    <label>Student Name:
                        <input type="text" name="name" id="name" value="<?php echo $result['name']?>" required>
                    </label>
                    <br><br>
                    <label>Gender:
                        <select name="gender" id="gender">
                            <option value="M"
                                <?php
                                    if($result['gender'] == 'M'){

                                        echo "selected";
                                    }
                                ?>

                            >Male</option>
                            <option value="F"
                            <?php
                                    if($result['gender'] == 'F'){

                                        echo "selected";
                                    }
                                ?>
                            >Female</option>
                        </select>
                    </label>
                    <br><br>
                    <label>Mobile Number:
                        <input type="text" name="mob1" id="mob1" maxlength="10" value="<?php echo $result['mob1']?>" required>
                    </label>
                    <br><br>
                    <label>Email:
                        <input type="email" name="email" id="email" value="<?php echo $result['email']?>" required>
                    </label>
                    <br><br>
                    
                <div class="submit-form">
                    <input type="submit" name="update" value="Update Details" id="submit">
                </div>
            </form>
            <br>
        </main>
        <!--
        <footer class="copyright-text">
            <p>© Copyright Prateek 2023 </p>
        </footer>
        -->
    </body>
</html>

<?php

    if($_POST['update']){

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $mob = $_POST['mob1'];
        $email = $_POST['email'];

        $query = "UPDATE student_details SET name='$name', gender='$gender',mob1='$mob',email='$email' WHERE id = '$id'";

        $data = mysqli_query($con, $query);

        if($data){
            echo "<script>alert('Record Updated Sucessfully')</script>";
            ?>

            <meta http-equiv = "refresh" content = "0; url = http://localhost/Project/adminpage.php" />

            <?php
        }
        else{
            echo "Failed To Update";
        }

    }

?>