




<?php include "inc/header.php";?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				
							<div class="header_content">

								<h1 class="fw-bold">Registration From</h1>

								<h3 class="fw-bold">New Student Fill this Form</h3>

							</div>		

							<form action="index.php" method="POST">
								
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
									
									<input type="email" id="address" name="address" class="form-control" placeholder="98/6, South Bashaboo, Dhaka-1214" autocomplete="off" required>

									<br>
								
								</div>


								


								<div class="form-group login_btn">
									
									<button type="submit" class="btn btn-primary btn-lg" name="loginBtn">Submit</button>
								
								</div>


							</form>

				
			</div>
		</div>
	</div>


<?php include "inc/footer.php";?>




