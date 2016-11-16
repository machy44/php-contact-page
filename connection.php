<?php
//connect to server
$conn  = mysqli_connect("localhost","root","root","php-contact-page");
if(!$conn){
    die("Cannot to connect the database: " . mysql_error());
}
//connect to database
?>

