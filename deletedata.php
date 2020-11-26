<?php 
require 'connection.php';

$NIM = $_GET['NIM'];

$result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE NIM='$NIM' ");
 
header('Location:showdata.php');
?>