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
	<?php
	echo Form::open(array('action' => array('UserController@update', $data_user->id_user), 'method' => 'put', 'class' => 'form-horizontal', 'enctype' => "multipart/form-data"));
	?>
	<table>

		
		<tr>
			<td>Nama : </td>
			<td><input type="text" name="name" value="<?php echo $data_user->username; ?>"></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input type="password" name="password" value="<?php echo $data_user->password; ?>"></td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><input type="email" name="email" value="<?php echo $data_user->email; ?>"></td>
		</tr>
		<tr>
			<td>Alamat : </td>
			<td><textarea name="alamat"><?php echo $data_user->alamat; ?></textarea></td>
		</tr>
		
	</table>
		<input type="submit" name="submit" value="simpan"><br/><br/>

	<?php
	Form::close();
	?>
		<a href="<?php echo url('/user') ?>">Kembali</a>
</body>
</html>