<style type="text/css">
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
  }
</style>
<tr>
<td><a href="TambahJualan.php" >Jual Barang</a></td>
<td><a href="act.php?operasi=logout">Keluar</a></td>
</tr>

<div>
  <h4>Cek Gudang</h4>
  <table border="1">
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
</div>


<div>
  <h4>Cek Data Jualan</h4>
  <table border="1">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Stok</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = $connection->query("SELECT * FROM barang,jual_beli WHERE barang.id_barang = jual_beli.id_barang AND jual_beli.jenis ='jual'");
      while ($result = $query->fetch_object()) { ?>
      <tr>
        <td><?php echo $result->nama_barang; ?></td>
        <td><?php echo $result->jumlah; ?></td>
      </tr>
      <?php
      } ?>
    </tbody>
  </table>
</div>