<?php 
	$host = "localhost";
	$username = "root";
	$password = ""; 
	$db = "db_akademik_42";

	$koneksi = mysqli_connect($host, $username, $password, $db);
	if($koneksi){
		echo "berhasil konek";
	}else{
		echo "Server Not Found";
	}
 ?>