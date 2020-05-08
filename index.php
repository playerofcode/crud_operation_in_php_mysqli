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
							Insert Record
						</div>
						<div class="card-body">
							<form action="logic.php" method="post">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="form-group">
									<label>Mobile</label>
									<input type="tel" name="mobile" class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control">
								</div>
								<div class="form-group">
									<input type="submit" name="insert" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
				<div class="col-sm-12"><br>
					<h2 class="text-center text-primary">User Records</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-inverse table-hover">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Name</th>
									<th>Mobile</th>
									<th>Email</th>
									<th>Address</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
							include "config.php";
							$sql="select * from users order by id desc";
							$fire=mysqli_query($con,$sql);
							$i=1;
							// echo $count=mysqli_num_rows($fire);
							if(mysqli_num_rows($fire)>0){
							while($row=mysqli_fetch_array($fire)){
							?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $row['name'];?></td>
									<td><?php echo $row['mobile'];?></td>
									<td><?php echo $row['email'];?></td>
									<td><?php echo $row['address'];?></td>
									<td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
									<td><a onclick="return confirm('Are you sure want to delete?');"href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
								</tr>
							<?php $i++;} ?>
							<?php }else
							{?>
								<tr>
									<td colspan="5">No record found</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>



		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script></body>
</html>