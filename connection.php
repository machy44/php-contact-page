<?php
//connect to server
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php-contact-page";
$conn  = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(mysqli_connect_errno()){
    die("Cannot to connect the database: " . mysqli_connect_error());
}

?>

