
<?php include"inc/header.php";?>



		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-3">

					<h1>Update Form</h1>
					<h3>Update Information Here</h3>

					<?php 

						if (isset($_GET['id'])) {

							$updateId	= $_GET['id'];

							$sql 		= "SELECT * FROM studentdata WHERE id = '$updateId' ";

							$readData	= mysqli_query($db, $sql);


							while ($row = mysqli_fetch_assoc($readData) ) {
								
								$id 			=	$row['id'];
						  		$fullName 		=	$row['fullName'];
						  		$phone 			=	$row['phone'];
						  		$emailAddress 	=	$row['emailAddress'];
						  		$address 		=	$row['address'];

					?>	

						  	<form action="" method="POST">
								
								<div >

									<label for="fullName">Full Name</label>							

									<input type="text" id="fullName" name="fullName" class="form-control" placeholder="Username" autocomplete="off" value="<?php echo $fullName; ?>" required>
							
								</div>

								<div >

									<label for="phone">Phone Number</label>
									
									<input type="text" id="phone" name="phone" class="form-control" placeholder="+880 1717 264687" autocomplete="off" value="<?php echo $phone; ?>" required>
																								
								</div>


								<div >

									<label for="emailAddress">Email</label>
									
									<input type="email" id="emailAddress" name="emailAddress" class="form-control" placeholder="example@gmail.com" autocomplete="off" value="<?php echo $emailAddress; ?>" required>

									
								
								</div>

								<div >

									<label for="address">Address</label>
									
									<input type="text" id="address" name="address" class="form-control" placeholder="98/6, South Bashaboo, Dhaka-1214" autocomplete="off" value="<?php echo $address ?>" required>

									<br>
								
								</div>
								


								<div class="form-group login_btn">
									
									<button type="submit" class="btn btn-primary btn-lg" name="updateBtn">Save</button>
								
								</div>


							</form>
					<?php

							}

							if (isset($_POST['updateBtn'])) {

								$fullName		=$_POST['fullName'];
								$phone			=$_POST['phone'];
								$emailAddress	=$_POST['emailAddress'];
								$address 		=$_POST['address'];

								$sql = "UPDATE studentdata SET fullName='$fullName', phone='$phone', emailAddress='$emailAddress', address='$address' WHERE id='$updateId'";														

								$updateChanges = mysqli_query($db, $sql);


									if ($updateChanges) {

										header("Location: index.php");
										
									} else {

										die("MySQL Error. " . mysqli_error($db) );

									}							


							}


						}



					?>
					
				</div>
			</div>
		</div>

<?php include"inc/footer.php";?>
