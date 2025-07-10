<?php
$host = "localhost";
$username = "root";
$password  = "";
$database = "itnest";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connexion échouée: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $email = $_POST["email"];

    // Check if username or email already exists
    $checkStmt = mysqli_prepare($connection, "SELECT * FROM users WHERE username = ? OR email = ?");
    mysqli_stmt_bind_param($checkStmt, "ss", $user, $email);
    mysqli_stmt_execute($checkStmt);
    mysqli_stmt_store_result($checkStmt);

    if (mysqli_stmt_num_rows($checkStmt) > 0) {
        // User exists
        header("Location: signup.php?error=User already exists. Please log in.");
        exit();
    }

    mysqli_stmt_close($checkStmt); // Close the check statement

    // Hash password
    $pass_hashed = password_hash($pass, PASSWORD_DEFAULT);

    // Prepare insert
    $stmt = mysqli_prepare($connection, "INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $user, $pass_hashed, $email);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: signup.php?success=User registered successfully.");
        } else {
            header("Location: signup.php?error=Error inserting user.");
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Erreur lors de la préparation de la requête : " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
