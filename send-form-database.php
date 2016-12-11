<?php 
include 'connection.php';
/*$query = mysql_query("SELECT MAX(id) FROM `contact`");
$results = mysql_fetch_field($query);
$cur_auto_id = $results['MAX(id)'] + 1;*/

$sql = "insert into contact (name,email,message) values ('$_POST[Inputname]','$_POST[Inputmail]','$_POST[Inputmessage]')";

//checking last id which is in the table and gives last id +1 to insert &sql query
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

     // mysqli_query($conn, $sql);
   	  mysqli_close($conn);
 ?>