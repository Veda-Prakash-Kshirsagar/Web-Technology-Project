<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
            background-image: url('images/pieces-blue.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            
    
        }

        div{
        display: flex;
        justify-content: center;
        align-items: center;
        margin:40px;


      }
      button{
        border: none;
        cursor: pointer;
        appearance: none;
        background-color: inherit;
        margin-left:10px;
        border-radius: 0px;

      }

      .b1{

        border: none;
        cursor: pointer;
        appearance: none;
        background-color: rgb(228, 142, 45);
        margin-left:10px;
        border-radius: 10px;
        font-size: 25px;
        color: white;

      }
      
      img{
        width: 70px;
        height: 70px;
      }
 
        
    </style>
</head>
<body>
    
    <h1 style = "color:white;font-size:40px;">Online Admission System</h1>
    <br>
    <br>
    <div>
        <form action = "/admin.php">
            <button type="submit">
                <img src="images/admin.jpg" alt="buttonpng" border="0" />
            </button>
            <br>
            <br>
            <a href="admin.php" target="_blank">
                <input type="button" class="b1" value="Admin Login">
            </a>
        </form>
    </div>
    <div>
        <form action = "/student.php">
            <button type="submit">
                <img src="images/student.png" alt="buttonpng" border="0" />
            </button>
            <br>
            <br>
            <a href="student.php" target="_blank">
                <input type="button" class="b1" value="Student Registration"/>
            </a>
        </form>  
    </div>
    
</body>
</html>