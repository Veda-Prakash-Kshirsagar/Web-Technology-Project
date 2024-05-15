<html>
    <head>
        <title>Admin Panel</title>
        <style>
            body{

                background-image: url('images/college1.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                text-align: center;

            }

            table{
                background-color:rgb(140, 236, 223);
            }

            
            .update{
                background-color: rgb(16, 221, 16);
                color: white;
                border:0;
                outline: none;
                border-radius: 5px;
                width: 80px;

            }
            .delete{
                background-color: rgb(206, 11, 4);
                color: white ;
                border:0;
                outline: none;
                border-radius: 5px;
                width: 80px;

            }
       
        </style>

        <script>
            function checkdelete(){
                
                return confirm("Do you want to delete the record?");
            }
        </script>

    </head>

<?php

    include("php/config.php");
    //error_reporting(0);
                
    $query = "SELECT * FROM student_details";
    $data = mysqli_query($con, $query);

    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);


    //echo $result['id']." ".$result['name']." ".$result['gender']." ".$result['mob1']." ".$result['email']."<br>";

    //echo $total;

    if($total != 0){

        ?>
        
        <h2 align = "center">Admin Panel</h2>
        <table border="1" cellspacing = "7" width="75%" align = "center">
            <tr>
                <th width="5%">ID</th>
                <th width="15%">Name</th>
                <th width="5%">Gender</th>
                <th width="15%">Mobile Number</th>
                <th width="20%">Email-Id</th>
                <th width='15%'>Operations</th>
            </tr>
        


        <?php
       while($result = mysqli_fetch_assoc($data)){

            echo "<tr>
                
                    <td>".$result['id']."</td>
                    <td>".$result['name']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['mob1']."</td>
                    <td>".$result['email']."</td>
                    <td><a href='php/update.php?id=$result[id]'><input type='button' value='Update' class='update'></a>

                    <a href='php/delete.php?id=$result[id]'><input type='button' value='Delete' class='delete' onclick = 'return checkdelete()'></a>
                    </td>

                </tr>
                ";

       }
    }
    else{
        echo"No records Found";
    }
    //veda

?>

  </table>



  <!--echo $result['id']." ".$result['name']." ".$result['gender']." ".$result['mob1']." ".$result['email']."<br>";-->