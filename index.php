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
  
  <br></br>
    <fieldset style="width: 300px;height: inherit; text-align: center;">
      <?php if (isset($_GET['error'])): ?>
    <p style="color:red; text-align:center;">
        <?php echo htmlspecialchars($_GET['error']); ?>
    </p>
<?php endif; ?> 
     <h2 style="font-family:Georgia, 'Times New Roman', Times, serif;">Please login</h2>
     <h3 style=" font-size:14px;">IT asset management</h3>
     <form style="text-align: left;" action="login.php" method="POST">
    <br></br>
    <label style="text-align: left;">Username:</label><br></br>
    <input style=" width: 300px; height: 20px;" type="text" name="username" placeholder="Enter your email" required>
     <br></br>
     <label >Password:</label><br></br>
    <input style=" width: 300px;height: 20px;"  type="password" name="password" placeholder="Enter your password" required>
    <br></br>
     </form>
    <button><a href="home.php">login</a>
    </button>
    <p>
        <a style="color: rgb(6, 131, 153);" href="forgot.php">forgot password?</a>

    </p>
    <p>
       <a style=" color:rgb(6, 131, 153);" href="signup.php" style="text-align: end;"></a> 
    </p>
    </fieldset>
    
    
   <style>
    body{
      padding-top: 30px;
      background-image: url('background.jpg') ;
      background-position: right;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size:cover;
    }
    
    
     fieldset{
        background-color: transparent;
        box-shadow: 5px 5px  #0e0d0d ;
        opacity: 100%;
        border-radius: 20px;
        
        margin-left: auto;
        margin-right: auto;
        
      a{
        text-decoration: none;
        color: black;
      }  
        
        
     }
     input{ 
        outline: none;
        border: none;
        background-color: transparent;
        border-bottom: 1px solid rgb(117, 116, 116);
     }
     
   </style>


   </div>
</body>
<script src="./script.js"> </script>
</html>