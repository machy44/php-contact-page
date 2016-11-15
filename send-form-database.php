<?php 
include 'connection.php';
$sql = "insert into contact (name,email,message) values ('$_POST[Inputname]','$_POST[Inputmail]','$_POST[Inputmessage]')";
      mysql_query($sql,$con);
   	  mysql_close($con);
 ?>