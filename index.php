<html>
<?php require('header.php');?>
	<body>
		<div class="container">
			<!--Navigation bar-->
			<?php require('navigation.php'); ?>
			<!--body content-->
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-8">
						<div class="jumbotron">
							<div class="page-header">
							<h2>Welcome!<br/>
							<small>This is php a application</small>
							</h2>
							</div>
						</div>
					</div>
					<div class="col-md-1 col-lg-1">
					</div>
					<!--create form to submit username and password to server -->
					<!--remove the comment tag to enable the form tags-->
					<form method="post" action="login.php">
						<div class="col-md-3 col-lg-3">
							<div class="well">
								<input type="text" placeholder="Username" name="username" class="form-control" /><br />
								<input type="password" placeholder="Password" name="password" class="form-control"/><br />
								<input type="submit" value="Login" class="btn btn-info btn-block" />
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		
	</body>
</html>
<?php
	require('footer.php');
?>