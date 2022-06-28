


<?php include "inc/header.php";?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-dark table-striped table-hover">
						<thead>

							<tr>
							  <th scope="col">Serial Number</th>
							  <th scope="col">Name</th>
							  <th scope="col">Phone</th>
							  <th scope="col">Email</th>
							  <th scope="col">Address</th>
							  <th scope="col">Join Date</th>
							</tr>

						</thead>

					  <tbody>

					  	<?php 

					  		$sql		=	"SELECT * FROM studentdata";
					  		$allData	=	mysqli_query($db, $sql);
					  		$numofData	=	mysqli_num_rows($allData);

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
					  				

					  	?>

					  		<tr>
						      <th><?php 	echo $id 			?></th>						    
						      <td><?php 	echo $fullName 		?></td>
						      <td><?php 	echo $phone 		?></td>
						      <td><?php 	echo $emailAddress	?></td>
						      <td><?php 	echo $address 		?></td>
						      <td><?php 	echo $joinDate 		?></td>
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

<?php include "inc/footer.php";?>




