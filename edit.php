<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CRUD Operation In PHP</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row mt-5">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-header text-center bg-primary text-white">
							Edit Record
						</div>
						<div class="card-body">
							<?php 
							include 'config.php';
							if($_GET['id'])
							{
								$id=$_GET['id'];
								$sql="select * from users where id='$id'";
								$fire=mysqli_query($con,$sql);
								while($row=mysqli_fetch_array($fire)){
							?>
							<form action="logic.php" method="post">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>">
								</div>
								<div class="form-group">
									<label>Mobile</label>
									<input type="tel" name="mobile" class="form-control" value="<?php echo $row['mobile'];?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control"  value="<?php echo $row['email'];?>">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control"  value="<?php echo $row['address'];?>">
								</div>
								<div class="form-group">
									<input type="hidden" name="id" value="<?php echo $id;?>">
									<input type="submit" name="update" value="Update"class="btn btn-primary">
								</div>
							</form>
							<?php } }?>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
				</div>
			</div>
		</div>



		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script></body>
</html>