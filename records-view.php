<!DOCTYPE html>
<html>
<head>
	<title>View Commited forms</title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>
	<div class="container">
		<h1>Review of commited forms</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
       				<th>Email</th>
        			<th>Message</th>
      			</tr>
			</thead>
	</div>
	<tbody>
<?php 
	include 'connection.php';
	$query ="select * from contact";
	$result = $conn->query($query);
	
	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {  
	        $id = $row['id'];
	        $name = $row['name'];
	        $email = $row['email'];
	        $message = $row['message'];

	        echo"
	        <tr>
	        <td>$id</td>
	        <td>$name</td>
	        <td>$email</td>
	        <td>$message</td>
	        </tr>
	        ";
	    }
	} 
	else {
	    echo "0 results";
	}
$conn->close();
echo "</tbody></table>";
	

?>

</body>
</html>