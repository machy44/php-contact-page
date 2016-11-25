<!DOCTYPE html>
<html>
<head>
	<title>View Commited forms</title>
	<?php include 'includes/head.php';?>
</head>
<body>
<!--========================NAVBAR==============================-->
<nav class="navbar navbar-default">
	 <div class="container">
		 <div class="navbar-header">
	  	 	<a class="navbar-brand" href="index.php">FormForContact</a>
	  	 </div>	
	  	 			<ul class="nav navbar-nav">
						 <li><a href="index.php">Home</a></li>
						 <li class="active"><a href="records-view.php">Records view</a></li>
						<!--<li><a href="#">Page 2</a></li> 
						 <li><a href="#">Page 3</a></li> -->
					</ul>
	 </div>				
</nav>

	

<div class="container">

				<h1>Review of commited forms</h1>
				<hr>
				<!-- /input-group -->
			<div class="row">
					
						<div class="col-lg-4">
						<form name="search-form"method="post" action="records-view.php">
							<div class="input-group">
							      <span class="input-group-btn">
							       		 <button class="btn btn-default" type="button">Search</button>
							      </span>
						      	<input type="text" class="form-control" placeholder="Search for...">
						    </div>
						</form>    
						</div> 
					
					<div class="col-lg-8">

					</div>   
			</div>
					
			<div class="row top-buffer" >
						<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
						       				<th>Email</th>
						        			<th>Message</th>
						      			</tr>
									</thead>
						
						<tbody>
					<?php 
						require_once 'connection.php';
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
					//echo "</tbody></table></div>";	
					?>
					</tbody>
					</table>
				</div>
			</div>
</div>

</body>
</html>