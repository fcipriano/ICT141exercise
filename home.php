<?php require('header.php');?>


<!--this is the home page-->
<div class="container">
<?php require('navigation.php'); ?>

	<div class="row">
		<div class="col-md-3 col-lg-3">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation"><a href="#">Dashboard</a></li>
				<li role="presentation"><a href="#">Mail</a></li>
			</ul>
		</div>
		<div class="col-md-9 col-lg-9">
			<div class="jumbotron">
				<h2>Dashboard</h2>
			</div>
		</div>
	</div>
</div>

<?php
	require('footer.php');
?>