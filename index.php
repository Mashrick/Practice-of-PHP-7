


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
					  		}


					  	?>


					  		


					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>019</td>
					      <td>@mdo</td>
					      <td>20-06-2019</td>
					    </tr>
					    
					  </tbody>
					</table>

					
					
				</div>
			</div>
		</div>

<?php include "inc/footer.php";?>




