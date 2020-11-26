<?php
require 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show Data</title>
</head>
<body>
	<a href="inputdata.php">Tambah Data</a>
	<br>
	<br>
<table border="1">
	<tr>
		<td>NIM</td>
		<td>Nama</td>
		<td>Prodi</td>
		<td>Tahun_Masuk</td>
		<td>Action</td>
	</tr>
	<?php
	while ($data = mysqli_fetch_array($result)) {
	
	?>
	<tr>
		<td><?php echo $data['NIM'];?></td>
		<td><?php echo $data['Nama'];?></td>
		<td><?php echo $data['Prodi'];?></td>
		<td><?php echo $data['Tahun_Masuk'];?></td>
		<td>
			<a href="editdata.php?NIM=<?php echo $data['NIM'];?>">Edit</a>
			<a href="deletedata.php?NIM=<?php echo $data['NIM'];?>">Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>