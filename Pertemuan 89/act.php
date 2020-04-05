<?php

session_start();
include 'koneksi.php';

switch ($_GET['operasi']) {
  case 'login':
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user where username='{$username}' AND password='{$password}'";

    $result = $connection->query($sql);
    $data = $result->fetch_object();

    if (!$result) {
        header('Location: login.php');
    } else {
        if ('admin' == $data->level) {
            $_SESSION['user'] = 'admin';
        } elseif ('pengguna' == $data->level) {
            $_SESSION['user'] = 'pengguna';
        }
    }

    header('Location: index.php');

  break;
  case 'logout':
    session_destroy();
    header('Location: login.php');

  break;
  case 'tambah_barang':
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $query = $connection->query("INSERT INTO barang VALUES(null, '{$nama}', '{$harga}', '{$stok}')");
    if ($query) {
        header('Location: index.php');
    } else {
        die($connection->error);
    }

  break;
  case 'tambah_pembelian_barang':
    $id_barang = $_POST['id_barang'];
    $stok = $_POST['stok'];

    $query = $connection->query("INSERT INTO jual_beli VALUES(null, '{$id_barang}', 'beli', '{$stok}')");
    if ($query) {
        header('Location: index.php');
    } else {
        die($connection->error);
    }

  break;
  case 'tambah_penjualan_barang':
    $id_barang = $_POST['id_barang'];
    $jumlah_jual = $_POST['jumlah_jual'];

    $query = $connection->query("INSERT INTO jual_beli VALUES(null, '{$id_barang}', 'jual', '{$jumlah_jual}')");

    if ($query) {
        header('Location: index.php');
    } else {
        die($connection->error);
    }

  break;
  default:
    echo 'perintah tidak ditemukan';
    die();

    break;
}
