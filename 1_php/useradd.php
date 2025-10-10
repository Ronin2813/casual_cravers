<?php 
include("config.php");

$fname = trim($_POST["fname"]);
$email = trim($_POST["email"]);
$num = trim($_POST["phone"]);
$address = $_POST["address"];
$pass = $_POST["pass"];

$hashed_pass = password_hash($pass, PASSWORD_BCRYPT);

$stmt = $con->prepare("INSERT INTO users (full_name, email, number, address, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $fname, $email, $num, $address, $hashed_pass);

if ($stmt->execute()) {
        header("Location: login.php");
        $stmt->close();
        $con->close();
        exit();
    } else {
        // Check if duplicate email
        if ($con->errno === 1062) {
            echo "Email already exists.";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

$stmt->close();
$con->close();
?>