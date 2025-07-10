<?php
$host= "localhost";
$username= "root";
$password="";
$database="student_data";
$connexion= mysqli_connect($host,$username,$password,$database);
$sql= "SELECT * FROM itnest"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <header style="background-color:rgb(44, 149, 248);" >
        <div class="head">
          <div class="input">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input style="outline: none;" type="text" placeholder="search...">
            <a style="text-decoration: none;" href="#">
          </div> 
          <a style="text-decoration: none;" href="#">
              <i class="fa-solid fa-bell"></i>
            <i class="fa-solid fa-user"></i>
          </a>
            <a style="text-decoration: none;" href="index.php">
              <i class="fa-solid fa-right-from-bracket"></i> 
            </a>
        </div>
  </header>
  <div class="container">
  <aside style="background-color: rgb(44, 149, 248);" class="side">
    <ul style="text-decoration: none;">
      <li>
        <a style="text-decoration: none;" data-page="dash.php">
          <i class="fa-solid fa-chart-column"></i>
        <span>DASHBOARD</span>
      </a>
      </li>
      <li>
        <a style="text-decoration: none;" data-page="equip.php">
          <i class="fa-solid fa-computer"></i>
        <span>EQUIPEMENTS</span>
      </a>
      </li>
      <li>
        <a style="text-decoration: none;" data-page="licence.php">
         <i class="fa-solid fa-puzzle-piece"></i>
        <span>LOGICIEL</span>
      </a>
      </li>
      <li>
        <a style="text-decoration: none;" data-page="report.php">
         <i class="fa-solid fa-toolbox"></i>
        <span style="text-decoration-line: underline; text-underline-offset: 15px">INTERVENTION</span>
      </a>
      </li>
      <li>
        <a style="text-decoration: none;" data-page="report.php">
          <i class="fa-solid fa-newspaper"></i>
        <span>REPORTS</span>
      </a>
      </li>
      <li>
        <a style="text-decoration: none;" data-page="report.php">
          <i class="fa-solid fa-bell"></i>
        <span style="text-decoration-line: underline; text-underline-offset: 15px">NOTIFICATIONS</span>
        </a>
      </li>
      <li>
        <a style="text-decoration: none;" data-page="#">
          <i class="fa-solid fa-cog"></i>
        <span>PARAMETRES</span>
      </a>
      </li>
      
    </ul>
  </aside>
  <main id="main">
  </main>
</div>
</body>
<script src="script.js"></script>


</html>