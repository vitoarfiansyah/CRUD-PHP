<?php

require 'connection.php';
$NIM = $_GET['NIM'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE NIM='$NIM'");
$datamahasiswa = mysqli_fetch_assoc($result);
?>

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
		<td><input type="text" name="NIM" value="<?php echo $datamahasiswa['NIM'];?>" readonly></td>
		</tr>

		<tr>
		<td>NAMA</td>    	
		<td>:</td> 
		<td><input type="text" name="Nama" value="<?php echo $datamahasiswa['Nama'];?>"></td>
		</tr>
		<tr>
		<td>PRODI</td>   	
		<td>:</td> 
		<td> <select name="Prodi" id="Prodi" >
						<option value="Teknik Informatika" <?php if ($datamahasiswa['Prodi']=="Teknik Informatika"){echo "selected";}?>>Teknik Informatika </option>
						<option value="Sistem Informasi" <?php if ($datamahasiswa['Prodi']=="Sistem Informasi"){echo "selected";}?>>Sistem Informasi</option>
						<option value="Teknik Elektro" <?php if ($datamahasiswa['Prodi']=="Teknik Elektro"){echo "selected";}?>>Teknik Elektro</option>
						</select></td></tr>
		<tr>
		<td>TAHUN MASUK</td> 
		<td>:</td> 
		<td> <input type="text" name="Tahun_Masuk" value="<?php echo $datamahasiswa['Tahun_Masuk'];?>"></td>	
		</tr>
		<tr>
		<td></td>
		<td></td>			
		<td><input type="submit" name="simpan" value="SIMPAN">	</td>	
	</tr>
</table>
	</form>

<?php
if (isset($_POST['simpan'])){
	$NIM = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$Prodi = $_POST['Prodi'];
	$Tahun_Masuk = $_POST['Tahun_Masuk'];

	$result = mysqli_query($conn, "UPDATE mahasiswa SET Nama='$Nama',Prodi='$Prodi',Tahun_Masuk=$Tahun_Masuk WHERE NIM='$NIM'");
	echo "<br>";
	header('Location:showdata.php');
}
?>
</body>
</html>