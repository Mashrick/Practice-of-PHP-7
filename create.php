




<?php include "inc/header.php";?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				
							<div class="header_content">

								<h1 class="fw-bold">Registration From</h1>

								<h3 class="fw-bold">New Student Fill this Form</h3>

							</div>		

							<form action="" method="POST">
								
								<div >

									<label for="fullName">Full Name</label>							

									<input type="text" id="fullName" name="fullName" class="form-control" placeholder="Username" autocomplete="off" required>
							
								</div>

								<div >

									<label for="phone">Phone Number</label>
									
									<input type="text" id="phone" name="phone" class="form-control" placeholder="+880 1717 264687" autocomplete="off" required>
																								
								</div>


								<div >

									<label for="emailAddress">Email</label>
									
									<input type="email" id="emailAddress" name="emailAddress" class="form-control" placeholder="example@gmail.com" autocomplete="off" required>

									
								
								</div>

								<div >

									<label for="address">Address</label>
									
									<input type="text" id="address" name="address" class="form-control" placeholder="98/6, South Bashaboo, Dhaka-1214" autocomplete="off" required>

									<br>
								
								</div>


								


								<div class="form-group login_btn">
									
									<button type="submit" class="btn btn-primary btn-lg" name="stdAddBtn">Submit</button>
								
								</div>


							</form>


							<?php 

								if (isset($_POST['stdAddBtn'])) {
									
									$fullName		=	$_POST['fullName'];
									$phone			=	$_POST['phone'];
									$emailAddress	=	$_POST['emailAddress'];
									$address		=	$_POST['address'];
									

									$sql			=	"INSERT INTO studentdata(fullName, phone, emailAddress, address, joinDate) VALUES('$fullName', '$phone', '$emailAddress', '$address', now() )";


									$addStudent 	= mysqli_query($db, $sql);


									if ($addStudent) {

										header("Location: index.php");
										
									} else {

										die("MySQL Error. " . mysqli_error($db) );

									}
								
								}

							?>

				
			</div>
		</div>
	</div>


<?php include "inc/footer.php";?>




