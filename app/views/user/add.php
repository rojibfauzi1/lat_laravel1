<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data Laravel</title>
	<style type="text/css">
		th{ width: 33%; text-align: center; background-color: #333; color: #fff; }
		a{padding: 3px 5px; background-color: #aa88cc; text-decoration: none;color: #fff;}
		a:hover{background-color: #aa55cc;}
	</style>
</head>
<body>
	<h1>Tambah Data</h1>
	<form method="post" action="<?php echo url('/user'); ?>">
		<table style="width:500px;">

			<tr>
				<td>Nama : </td>
				<td><input type="text" name="name"/></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email" /></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td>Re-Password : </td>
				<td><input type="password" name="re-password" /></td>
			</tr>
			<tr>
				<td>Alamat : </td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="simpan" />
	</form>
	<p><a href="<?php echo url('/user'); ?>">Kembali</a></p>
</body>
</html>