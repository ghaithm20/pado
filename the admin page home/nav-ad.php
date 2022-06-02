<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Navbar with Dropdown</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/nav.css">

</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="padding: 0px;">
			<div class="container-fluid" style="height: 55px; background-color: rgb(132, 178, 181); ">
				<a style="color: white ; font-weight: bold; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="navbar-brand">PaDo</a>
				<button style="color: white ; " type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between f" id="navbarCollapse">
					<div class="navbar-nav"></div>
					<form class="d-flex">
                    	<div class="input-group">
                        	<input type="text" class="form-control search" placeholder="Search">
                        	<button type="button" class="btn btn-secondary submit"><i class="bi-search"></i></button>
                    	</div>
                	</form>
					<div class="nav-item dropdown navbar-nav">
                    <a style="color: white ; padding-right: 50px;" href="ad-home.php" class="nav-item nav-link">Doctors</a>

						<a style="color: white ; padding-right: 50px;" href="ad-add.php" class="nav-item nav-link">Add Doctor</a>
						<a style="color: white ;" href="logout.php" class="nav-item nav-link">Log out</a>
					</div>
				</div>
			</div>
		</nav>
	</body>
</html>