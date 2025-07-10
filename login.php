<?php
$host = "localhost";
$username = "root";
$password  = "";
$database = "itnest";

// Connect to the database
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // Prepare statement to find user by username
    $stmt = mysqli_prepare($connection, "SELECT password FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Check if user exists
    if (mysqli_stmt_num_rows($stmt) === 0) {
        header("Location: index.php?error=User does not exist. Please sign up.");
    } else {
        // Bind the result (hashed password)
        mysqli_stmt_bind_result($stmt, $hashed_password);
        mysqli_stmt_fetch($stmt);

        // Verify password
        if (password_verify($pass, $hashed_password)) {
             header("Location: home.php");;
        } else {
           header("Location: index.php?error=Incorrect password.");
        }
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($connection);
?>
