
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v3 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="css/style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap Navbar with Dropdown</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="css/nav.css">
	</head>

	<body>

	<?php include 'nav-l.php';?>

				<div class="wrapper" style="background-image: url('images/bg-registration-form-3.jpg');">
					<div class="inner">
						<form action="">
							<h3>Login</h3>
							<div>
								<div>
									<label for="">Email:</label>
									<div class="form-holder" style="margin-bottom: 30px;">
										<i class="zmdi zmdi-email"></i>
										<input type="email" placeholder="Email" class="form-control">
									</div>
								</div>
							</div>
							<div>
								<div>
									<label for=""> Password:</label>
									<div class="form-holder" style="margin-bottom: 10px;" >
										<i class="zmdi zmdi-key"></i>
										<input type="password" placeholder="Password" class="form-control" >
									</div>
								</div>
								<div style="margin-top:30px;">
									<label for=""> What Are you:</label>
									<div class="form-holder" >
										<label for=""> Doctor</label>
										<input type="radio" name="type" vlaue="Doctor">
										<label for=""> Patient</label>
										<input type="radio" name="type" value="Patient">
										<label for="">admin</label>
										<input type="radio" name="type" value="admin">
									</div>
								</div>
							</div>
							<div class="form-end">
								<div class="button-holder" >
									<button style="width: 100%;">Login Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
	</body>
</html>