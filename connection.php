<?php
//connect to server
$con  = mysql_connect("localhost","root","root");
if(!$con){
    die("Cannot to connect the database: " . mysql_error());
}
//connect to database
$connect=mysql_select_db("php-contact-page",$con);
?>