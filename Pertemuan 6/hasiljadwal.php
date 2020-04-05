<!DOCTYPE html>
<html>
<head>
	<title>Hasil Jadwal</title>
</head>
<body>
	<a href="form_jadwal.php"></a>
	<table border="1">
		<tr>
			<thead>
				<td>No.</td>
				<td>Hari</td>
				<th>Jam</th>
				<th>Ruang</th>
				<th>Matakuliah</th>
			</thead>
		</tr>
		<tbody>
			<?php 
			$no=1;
			include "koneksi.php";
			$a = "SELECT * FROM jadwal, matkul where jadwal.id_matkul = matkul.id_matkul";
			$b = $koneksi->query($a);
			while($c=$b->fetch_array()) { ?>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $c['nm_matkul'];?></th>
					<th><?php echo $c['hari']; ?></th>
					<th><?php echo $c['jam']; ?></th>
					<th><?php echo $c['ruang']; ?></th>
				</tr>
				<?php 
			}
		?>
		</tbody>
	</table>
</body>
</html>