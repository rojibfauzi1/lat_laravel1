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
			<th>Nama User</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php
			if(count($daftar_user) == 0){
				echo "<tr><td colspan='3'>Belum Ada User</td></tr>";
			}else{
				foreach($daftar_user as $user){
		?>
		<tr>

			<td><?php echo $user->username; ?></td>
			<td><?php echo $user->email; ?></td>
			<td>
				<a href="<?php echo url('/user/'.$user->id_user); ?>">Detail</a> ||
				<a href="<?php echo url('/user/'.$user->id_user.'/edit'); ?>">Edit</a> ||
				<a href="<?php echo url('hapus_user/'.$user->id_user); ?>">Hapus</a>
			</td>
		</tr>
		<?php 
			}
		} ?>
	</table>

</body>
</html>