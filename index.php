


<?php include "inc/header.php";?>
		

		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered table-dark table-striped table-hover" id="dataTable">
							<thead>

								<tr>
								  <th scope="col">Serial Number</th>
								  <th scope="col">Name</th>
								  <th scope="col">Phone</th>
								  <th scope="col">Email</th>
								  <th scope="col">Address</th>
								  <th scope="col">Join Date</th>
								  <th scope="col">Action</th>
								</tr>

							</thead>

						  <tbody>

						  	<?php 

						  		$sql			=	"SELECT * FROM studentdata ORDER BY fullName ASC";
						  		$allData		=	mysqli_query($db, $sql);
						  		$numofData		=	mysqli_num_rows($allData);
						  		$serialNumber	=	0;

						  		if ($numofData <= 0) {

						  			echo '<div class="alert alert-info"><h3>There is no data</h3></div>';

						  		} else {

						  			while ($row = mysqli_fetch_assoc($allData) ) {

						  				$id 			=	$row['id'];
						  				$fullName 		=	$row['fullName'];
						  				$phone 			=	$row['phone'];
						  				$emailAddress 	=	$row['emailAddress'];
						  				$address 		=	$row['address'];
						  				$joinDate 		=	$row['joinDate'];
						  				$serialNumber++;
						  				

						  	?>

						  		<tr>

							      <td>	<?php 	echo $serialNumber	?>	</td>						    
							      <td>	<?php 	echo $fullName 		?>	</td>
							      <td>	<?php 	echo $phone 		?>	</td>
							      <td>	<?php 	echo $emailAddress	?>	</td>
							      <td>	<?php 	echo $address 		?>	</td>
							      <td>	<?php 	echo $joinDate 		?>	</td>

							      <td>	

							      	<div class="btn-group">

							      		<a href="update.php?id=<?php echo $id; ?>" class="btn btn-sm btn-outline-success">Update</a>
							      		<a href="" class="btn btn-sm btn-outline-danger">Delete</a>

							      	</div>

							      	

							      </td>
						   		</tr>

						  	<?php				

						  										
						  			}

						  		}

						  	?>					  	


						    
						  </tbody>
						</table>

						
						
					</div>
				</div>
			</div>
		</div>

<?php include "inc/footer.php";?>




