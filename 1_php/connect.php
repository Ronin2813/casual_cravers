<?php 
include("config.php");

if ($con->connect_error) {
    header("location: confail.php");
    exit();
}
else {
    header("Location: home.php");
    exit();
}
?>