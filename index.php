


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
							      		
							      		<a href="" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteid<?php echo $id; ?>">Delete</a>

							      	</div>							      	

							      </td>

							      <!-- Modal Start-->

									<div class="modal fade" id="deleteid<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this User?</h5>

									        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

									      </div>

									      <div class="modal-body">

									      	<div class="text-center">

									      		<a href="index.php?id=<?php echo $id; ?>" class="btn btn-outline-danger btn-md">Confirm</a>

									      		<button type="button" class="btn btn-outline-primary btn-md" data-bs-dismiss="modal">Cancel</button>
									      		
									      	</div>
									        
									      </div>

									      
									    </div>
									  </div>
									</div>

									<!-- Modal End-->
							    

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


		<!-- Delete User -->

		<?php

			if (isset($_GET['id'])) {

				$deleteId	=	$_GET['id'];

				$Sql 		= 	"DELETE FROM studentdata WHERE id='$deleteId'";

				$deleteUser = 	mysqli_query($db, $Sql );

				if ($deleteUser) {

					header("Location: index.php");

				} else {

					die("MySQL Error. " . mysqli_error($db) );

				}
			}



		?>



<?php include "inc/footer.php";?>




