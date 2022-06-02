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
	</head>

	<body>
	<form action="db-add.php" method="post">
		<div class="wrapper" >
			<div class="inner">
				<form action="">
					<h3>Add Doctor</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account"></i>
								<input type="text" placeholder="first name" class="form-control" name="first">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Last Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-accounts-alt"></i>
								<input type="text" placeholder="last name" class="form-control" name="last">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-email"></i>
								<input type="email" placeholder="your email" class="form-control" name="email">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">User name:</label>
							<div class="form-holder">
								<i style="font-weight: bold;">@</i>
								<input type="text" placeholder="user name" class="form-control" name="user">
							</div>
						</div>
						<div class="form-wrapper">
							<label for=""> Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-key"></i>
								<input type="password" placeholder="Password" class="form-control" name="pass">
							</div>
						</div>
						<div class="form-wrapper">
							<label for=""> Confirm Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-key"></i>
								<input type="password" placeholder="Rewrite password" class="form-control" >
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Age:</label>
							<div class="form-holder">
								<input type="date" style="font-size=5px"  class="form-control" name="age">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="Detailed address">Detailed Address:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-pin"></i>
								<input type="text" placeholder="your address" class="form-control" name="addr">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="type">Phone:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-phone"></i>
								<input type="text" placeholder="phone number" class="form-control" name="phone">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">gender</label>
							<label for=""  >
								<input type="radio" name="female" id="" value="1">male
								<input type="radio" name="female"  id="" value="2" style="margin: 0px 4px 0px 10px;" >female
							</label>
						</div>
					</div>
					<div class="form-end">
						<div class="button-holder">
							<button>Add</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		</form>
	</body>
</html>
