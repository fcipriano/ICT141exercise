<?php	include('header.php'); ?>

<div class="container">
	<?php	include('navigation.php'); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3"></div>
			<div class="col-lg-6 col-md-6">
				<form method="post" action="action.php">
					<h4>User Information</h4>
					<input type="text" class="form-control" name="fname" placeholder="First Name" /><br />
					<input type="text" class="form-control" name="lname" placeholder="Last Name" /><br />
					<input type="email" class="form-control" name="email" placeholder="Email" /><br />
					<input type="tel" class="form-control" name="telno" placeholder="Contact #" /><br />
					<h4>User Credentials</h4>
					<input type="text" class="form-control" name="uname" placeholder="Username" /><br />
					<input type="password" class="form-control" name="pword" placeholder="Password" /><br /><br />
					<input type="submit" class="btn btn-success" value="Register" />
				</form>
			</div>
			<div class="col-lg-3 col-md-3"></div>
		</div>
	</div>
</div>


<?php	include('footer.php'); ?>