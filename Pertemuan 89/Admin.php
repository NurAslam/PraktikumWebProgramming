<style type="text/css">
h3{
  font-family: sans-serif;
}
  a{
  background-color: #4CAF50;
  color: white;
  padding: 5px 20px;
  margin: 8px 0;
  text-transform:  
  float: initial;
  box-sizing: border-box;
  cursor: pointer;
  width: 50px;;
  text-decoration: none;
  }
a:hover {
  opacity: 0.8;
}
.out{
    background-color: red;
  color: white;
  padding: 5px 20px;
  margin: 8px 0;
  text-transform:  
  float: initial;
  box-sizing: border-box;
  cursor: pointer;
  width: 50px;;
  text-decoration: none;
}
.out:hover{
  background-color: black;
  opacity: 0.9;
}
</style>
<tr>
<td><a href="TambahBarang.php">Tambah Barang Gudang</a></td>
<td><a href="TambahPembelian.php">Tambah Data Pembelian</a></td>
<td><a href="act.php?operasi=logout" class="out">Keluar</a></td>
</tr>

<!DOCTYPE html>
<html>
<head>
  <title>Cek Gudang</title>
</head>
<body>
   <tr>
    <td>
      <h1 style="font-family: sans-serif; text-decoration: inherit;">SELAMAT DATANG DI TOKO AMANAH</h1>
  <h3>Cek Gudang</h3>
  <table border="2">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = $connection->query('SELECT * FROM barang');
      while ($result = $query->fetch_object()) {
          ?>
      <tr>
        <td><?php echo $result->nama_barang; ?></td>
        <td><?php echo $result->harga; ?></td>
        <td><?php echo $result->stok; ?></td>
      </tr>
      <?php
      } ?>
    </tbody>
  </table>
  </td>
</tr>


<tr>
  <td>
  <h3>Cek data Pembelian</h3>
  <table border="2">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Stok</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = $connection->query("SELECT * FROM barang,jual_beli WHERE barang.id_barang = jual_beli.id_barang AND jual_beli.jenis = 'beli'");
      while ($result = $query->fetch_object()) { ?>
      <tr>
        <td><?php echo $result->nama_barang; ?></td>
        <td><?php echo $result->jumlah; ?></td>
      </tr>
      <?php
      } ?>
    </tbody>
  </table>
  </td>
</tr>
</body>
</html>