<?php

$connection = new mysqli('localhost', 'root', '', 'tugas_web');

if (!$connection) {
    die('koneksi error');
}
