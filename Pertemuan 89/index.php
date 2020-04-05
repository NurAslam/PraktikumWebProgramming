<!DOCTYPE html>
<html >
<head>
  <title>Data Barang</title>
</head>
<body>
  <tr>
    <td>
  <?php
  session_start();
  include 'koneksi.php';
    if (!$_SESSION['user']) {
        header('Location: login.php');
    } else {
        if ('admin' == $_SESSION['user']) {
            include 'Admin.php';
        } elseif ('pengguna' == $_SESSION['user']) {
            include 'Pengguna.php';
        }
    }
   ?>
   </td>
   </tr>
</body>
</html>