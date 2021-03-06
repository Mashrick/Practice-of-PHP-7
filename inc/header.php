<?php 

ob_start();
include "inc/db.php";


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Practice</title>

	<!-- Bootstrap Style CSS Sheet -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Bootstrap dataTables CDN -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

	<!-- Own Style Sheet -->
	<style type="text/css">
		
		.container-fluid{
			padding: 0 0 0 0 ;
		}
		.navbar-brand{
			padding-left: 20px;
		}

		.header{
			padding-top: 20px;
		}

		

	</style>

</head>
	<body>


		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">

						<!-- Nav Bar Start -->

						<nav class="navbar navbar-expand-lg bg-light">
						  	<div class="container-fluid">
							    <a class="navbar-brand" href="index.php">Student Portal</a>
							    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							      <span class="navbar-toggler-icon"></span>
							    </button>
							    <div class="collapse navbar-collapse" id="navbarSupportedContent">
							    	<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

								        <li class="nav-item">
								          <a class="nav-link active" aria-current="page" href="index.php">All Students</a>
								        </li>

								        <li class="nav-item">
								          <a class="nav-link active" aria-current="page" href="create.php">Add New Student</a>
								        </li>
							        
   
							    	</ul>
							      
							    </div>
						  </div>
						</nav>

						<!-- End of Nav Bar -->

					



					</div>
				</div>
			</div>
		</header>

