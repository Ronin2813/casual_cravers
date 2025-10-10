<?php 
 include("config.php");
 if ($con -> connect_error) {
    header("location: confail.php");
    exit();}
 echo" this is the home page";
?>