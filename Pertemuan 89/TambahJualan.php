<a href="index.php">Kembali</a>
<form action="act.php?operasi=tambah_penjualan_barang" method="post">
<table>
  <tr>
    <td>Pilih barang</td>
    <td>:</td>
    <td>
        <select name="id_barang">
          <option selected disabled>-Pilih Barang-</option>
        <?php
            include 'koneksi.php';
            $query = $connection->query('SELECT id_barang, nama_barang FROM barang');
            while ($result = $query->fetch_object()) {
                ?>
              <option value="<?php echo $result->id_barang; ?>"><?php echo $result->nama_barang; ?></option>
            <?php
            } ?>
        </select>
    </td>
  </tr>
  <tr>
    <td>Jumlah jual</td>
    <td>:</td>
    <td>
      <input type="number" name="jumlah_jual">
    </td>
  </tr>
  <tr>
    <td>
      <button type="submit">Simpan</button>
    </td>
  </tr>
</table>
</form>