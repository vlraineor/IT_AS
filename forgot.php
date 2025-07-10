<?php
$host= "localhost";
$username= "root";
$password="";
$database="itnest";
$connexion= mysqli_connect($host,$username,$password,$database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <h1></h1> 
    <br></br>
   <fieldset style="width: fit-content; margin: auto; text-align: center;">
    <form method="POST" action="handle.php">
        <i style="font-size: 50px;" class="fa-regular fa-exclamation"></i>
        <h1>Forgort Password</h1>
        <p style="color: grey;">
            <br>Enter your email and we'll send you a link </br> to reset your password
        <p>
        <input style="text-align: center; width:150px; height:30px; " type="email" name="email" placeholder="your e-mail address" required  maxlength="20">
        <br></br>
        <button style="width: 150px; height: 30px; background-color: rgb(67, 163, 241); color: antiquewhite;">Reset Password</button>
       <br></br>
       <p>
        Back to <a style="text-decoration: none; color:rgb(48, 13, 245);" href="index.php">Login</a>
       </p>
    </form>
   </fieldset>  
   <style>
    body{
        padding-top: 30px;
        background-image: url('background.jpg');
        background-position: fixed;
        background-size:cover;
        background-repeat: no-repeat;
    }
    fieldset{
        background-color: transparent;
        border-radius: 50px;
        height: 400px;
        box-shadow: 5px 5px ;
        opacity: 90%;
    }
    button{
        border: 1px solid rgb(109, 185, 247);
    }
    input{
        height: 30px;
        width: 350px;
        border: 1px solid rgb(202, 190, 190);
        outline: none;
        background: gainsboro;
    }
    ::placeholder{
        color: black;
    }
    
   </style>
</body>
</html>