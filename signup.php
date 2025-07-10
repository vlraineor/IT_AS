<?php
$host= "localhost";
$username= "root";
$password="";
$database="itnest";
$connexion= mysqli_connect($host,$username,$password,$database);
?>
<?php
// Check if there's a message in the URL
$success = isset($_GET['success']) ? $_GET['success'] : '';
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1></h1> 
   
   <fieldset style="width: 300px; margin: auto; text-align: center;height: 300px; background-color: transparent;">
    <?php if ($success): ?> 
        <div style="color:red; text-align:center;" class="message success"><?php echo htmlspecialchars($success); ?></div>
    <?php endif; ?>

    <?php if ($error): ?>
       
        <div style="color:red; text-align:center;" class="message error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
        
    <form method="POST" action="handle.php">
        <h1>Sign Up</h1>
        <label>Username:</label>
        <input  type="text" name="username" required  maxlength="20">
        <br></br>
        <label>&nbsp; &nbsp;Email:</label>
        <input type="email" name="email"  required  maxlength="20">
        <br></br>
        <label>Password:</label>
        <input type="password" name="password" required  maxlength="14">
        <br></br>
        <button style="width: 100px; background-color: rgb(67, 163, 241); color: antiquewhite; border:turquoise; height:25px;">sign up</button>
        <p>Already have an account? <a style="text-decoration: none;" href="index.php">Login</a></p>
    </form>
   </fieldset>
   <style>
    input{
        height: 25px;
        outline:none;
        border: 1px solid white;
        background-color: white;
        width: 140px;
        
    }
    input ::placeholder{
        color: black;
    }
    fieldset{
        box-shadow: 5px 5px   #0e0d0d;
        border-radius: 50px;
        width: 150px;

    }
    body{
        padding-top: 30px;
        background-image: url('background.jpg');
        background-position: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }
    ::placeholder{
        color: black;
    }
   </style>
</body>
</html>