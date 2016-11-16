<?php
//connect to server
$conn  = mysqli_connect("","","","php-contact-page");
if(!$conn){
    die("Cannot to connect the database: " . mysql_error());
}

?>

