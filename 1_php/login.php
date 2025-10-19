<?php 
include("config.php");
session_start();
 if ($con -> connect_error) {
    header("location: confail.php");
    exit();}
 else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["pass"];
        
        $stmt = $con->prepare("select * from users where email=?");   
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];

            header("Location: home.php");
            exit();
        } else {
            echo "❌ Incorrect password!";
        }
    } else {
        echo "❌ Email not found!";
    }

    $stmt->close();

    }

    
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="inputs">
            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Registered Email">
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" placeholder="Enter Password">
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="msg">
            <p>Welcome Back!</p>
            <p>it's good to see you again</p>
            <p>let's continue exploring the latest styles curated just for</p>
            <p>You!</p>
        </div>
    </div>
</body>
</html>