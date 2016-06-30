<!DOCTYPE html>
<html>
<head>
	<title>CRUD awal Laravel</title>
	<style type="text/css">
		th{ width: 33%; text-align: center; background-color: #333; color: #fff; }
		a{padding: 3px 5px; background-color: #aa88cc; text-decoration: none;color: #fff;}
		a:hover{background-color: #aa55cc;}
	</style>
</head>
<body>
	<h1>Daftar User</h1>
	<p><a href="<?php echo url('/user/create'); ?>">Tambah User</a></p>
	<table>

		
		<tr>
			<td>Nama : </td>
			<td><?php echo $data_user->username; ?></td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><?php echo $data_user->email; ?></td>
		</tr>
		<tr>
			<td>Alamat : </td>
			<td><?php echo $data_user->alamat; ?></td>
		</tr>
		
	</table>
		<a href="<?php echo url('/user') ?>">Kembali</a>
</body>
</html>