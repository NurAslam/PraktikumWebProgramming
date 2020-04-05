<!DOCTYPE html>
<html>
<head>
	<title>INSERT DATA</title>
</head>
<body>
<form action="aksi_jadwal.php" method="POST">
	<table>
		<tr>
			<td>Hari</td>
			<td>:</td>
			<td><select name="hari">
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				<option value="Sabtu">Sabtu</option>
				<option value="Ahad">Ahad</option>
			</select></td>
		</tr>
		<tr>
			<td>Jam</td>
			<td>:</td>
			<td><input type="text" name="jam"></td>
		</tr>
		<tr>
			<td>Ruang</td>
			<td>:</td>
			<td><input type="ruang" name="ruang"></td>
		</tr>
		<?php 
		include "koneksi.php";
		$a="SELECT *FROM matkul";
		$b=$koneksi->query($a);
		 ?>
		 <tr>
		 	<td>Mata Kuliah</td>
		 	<td>:</td>
		 	<td><select name="nama_matakuliah">
		 		<?php 
		 		while ($c=$b->fetch_array()) {
		 		  ?>
		 		 <option value="<?php echo $c['id_matkul']; ?>">
		 		 	<?php echo $c["nm_matkul"];?></option>
		 		<?php 
		 		}
		 		?>
		 	</select></td>	
		 </tr>
		<tr>
			
		<td><input type="submit" value="SAVE"></td>
		<td><input type="reset" value="CANCEL"></td>
		</tr>
	</table>
</form>
</body>
</html>