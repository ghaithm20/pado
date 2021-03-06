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
	<?php include 'navbar_l.php';?>
		<div class="wrapper" style="background-image: url('images/bg-registration-form-3.jpg');">
			<div class="inner">
				<form action="">
					<h3>Register</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account"></i>
								<input type="text" placeholder="first name" class="form-control">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Last Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-accounts-alt"></i>
								<input type="text" placeholder="last name" class="form-control">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-email"></i>
								<input type="email" placeholder="your email" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">User name:</label>
							<div class="form-holder">
								<i style="font-weight: bold;">@</i>
								<input type="text" placeholder="user name" class="form-control">
							</div>
						</div>
						<div class="form-wrapper">
							<label for=""> Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-key"></i>
								<input type="password" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="form-wrapper">
							<label for=""> Confirm Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-key"></i>
								<input type="password" placeholder="Rewrite password" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Age:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-calendar"></i>
								<input type="date" style="font-size=5px"  class="form-control">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="Detailed address">Detailed Address:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-pin"></i>
								<input type="text" placeholder="your address" class="form-control" >
							</div>
						</div>
						<div class="form-wrapper">
							<label for="type">Phone:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-phone"></i>
								<input type="text" placeholder="phone number" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">gender</label>
							<label for=""  >
								<input type="radio" name="female" id="" >male
								<input type="radio" name="female"  id=""  style="margin: 0px 4px 0px 10px;">female
							</label>
						</div>
					</div>
					<div class="form-end">
						<div class="checkbox">
							<label>
								<input type="checkbox" > <b style="color:hsl(191, 69%, 73%)" >I Am  A  Patient </b>   And I agree to all terms of use and privacy
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="button-holder">
							<button >Register Now</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>