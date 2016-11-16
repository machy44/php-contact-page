<?php
//// Create connection
$conn  = new mysqli("localhost","root","root","php-contact-page");
// Check connection
if(!$conn){
    die("Cannot to connect the database: " . mysql_error());
}
//connect to database
//$connect=mysql_select_db("php-contact-page",$con);
?>