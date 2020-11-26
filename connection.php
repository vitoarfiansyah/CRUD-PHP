<?php

$namaHost = 'localhost';
$namaDatabase = 'crudapik';
$username = 'root';
$password = '';

$conn = mysqli_connect($namaHost,$username,$password,$namaDatabase);

// if ($conn) {
// 	echo "<br>";
// 	 echo "<img width=auto height=auto src='panutan.jpg'/>";
// 	 echo "<br>";
// 	 echo "<br>";
// 	echo "KONEKSI ANDA BERHASIL";

// }else{
// 	echo "KONEKSI GAGAL,COBA LAGI";
// }

// ($conn) ? print_r("KONEKSI ANDA BERHASIL") : print_r("KONEKSI GAGAL,COBA LAGI");

?>