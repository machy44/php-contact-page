<?php
//connect to server
<<<<<<< HEAD
$conn  = mysqli_connect("localhost","root","root","php-contact-page");
if(!$conn){
    die("Cannot to connect the database: " . mysql_error());
}
//connect to database
?>
=======
$con  = mysql_connect("","","");
if(!$con){
    die("Cannot to connect the database: " . mysql_error());
}
//connect to database
$connect=mysql_select_db("php-contact-page",$con);
?>
>>>>>>> origin/master
