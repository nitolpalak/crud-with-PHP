<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h2>Data Collection</h2><br>
	<?php
	if(!empty($_GET['meg'])){
		echo $_GET['meg'];

	}

	?>
	<form class="form-horizontal" action="data.php" method="POST">
		<div class="form-group" >
   			<label class="control-label col-md-2" for="name">Name:</label>  
   			<div class ="col-md-6">
    			<input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
    		</div>
    	</div>

		<div class="form-group" >
			<label class="control-label col-md-2" for="email">Email:</label>
			<div class="col-md-6">
				<input type="text" name="email" class="form-control" placeholder ="example@something.com" required>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2" for="dep">Dep:</label>
			<div class="col-md-6">
				<input type="text" name="dep" class="form-control" placeholder="Enter Your Dep" required>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2" for="reg">Reg:</label>
			<div class="col-md-6">
				<input type="text" name="reg" class="form-control" placeholder="201X331XXX" required>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-md-6">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>