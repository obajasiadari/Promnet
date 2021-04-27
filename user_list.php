<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Codeigniter UNIGA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="page-header text-center">Belajar Framework CI [UNIGA]</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<a href="<?php echo base_url(); ?>index.php/users/addform" class="btn btn-primary"><span class="glyphicon glyphicon-plus">Add New</span></a><br><br>
				<table class="table table-bordered table-stiped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>NIM</th>
							<th>JURUSAN</th>
							<th>ALAMAT</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($users as $user ) {
							
			
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->nama; ?></td>
							<td><?php echo $user->nim; ?></td>
							<td><?php echo $user->jurusan; ?></td>
							<td><?php echo $user->alamat; ?></td>
							<td><a href="<?php echo base_url();?>index.php/users/edit/<?php echo $user->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit" ></span>Edit</a>||<a href="<?php echo base_url();?>index.php/users/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

</body>
</html>