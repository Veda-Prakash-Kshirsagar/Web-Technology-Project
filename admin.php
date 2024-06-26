<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {      
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('images/keyboard-notepad.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            text-align: left;
        }
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: rgb(7, 11, 14);
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

form{

    max-width:500px;
    margin:auto;
    align-content: left;
    text-align: left;
    margin-top: 100px;
    margin-right: 600px;

}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="php/checklogin.php" method="POST">
  <h2 style = "color: rgb(8, 8, 8);">Admin Login</h2>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" id = "email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" id = "password">
  </div>

  <button type="submit" class="btn">Login</button>
</form>
<!--veda-->

</body>
</html>
