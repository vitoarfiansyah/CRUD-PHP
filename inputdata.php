<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
	<img src="panutan.jpg" alt="PANUTAN"><br><br>
	<form action="" method="Post" accept-charset="utf-8">
		<table>
		<tr>
		<td>NIM</td>     	
		<td>:</td> 
		<td><input type="text" name="NIM"></td>
		</tr>

		<tr>
		<td>NAMA</td>    	
		<td>:</td> 
		<td><input type="text" name="Nama"></td>
		</tr>
		<tr>
		<td>PRODI</td>   	
		<td>:</td> 
		<td> <select name="Prodi" id="Prodi">
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
						</select></td></tr>
		<tr>
		<td>TAHUN MASUK</td> 
		<td>:</td> 
		<td> <input type="text" name="Tahun_Masuk"></td>	
		</tr>
		<tr>
		<td></td>
		<td></td>			
		<td><input type="submit" name="simpan" value="SIMPAN">	</td>	
	</tr>
</table>
	</form>
</body>
</html>

<?php
require('connection.php');
if (isset($_POST['simpan'])){
	$NIM = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$Prodi = $_POST['Prodi'];
	$Tahun_Masuk = $_POST['Tahun_Masuk'];

	$result = mysqli_query($conn,"INSERT INTO mahasiswa (NIM, Nama, Prodi, Tahun_Masuk) VALUES('$NIM', '$Nama', '$Prodi', '$Tahun_Masuk') ");
	echo "<br>";
	header('Location:showdata.php');
}


?>