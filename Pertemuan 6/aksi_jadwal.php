<?php
include "koneksi.php";
$nm_matkul = $_POST['nama_matakuliah'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruang = $_POST['ruang'];
$sql="INSERT INTO jadwal (id_matkul,hari,jam,ruang) VALUES ('".$nm_matkul."','".$hari."','".$jam."','".$ruang."')";
$a=$koneksi->query($sql);
if($a === true){
	header('location: hasiljadwal.php');
} else {
	echo "Error";
}
?>