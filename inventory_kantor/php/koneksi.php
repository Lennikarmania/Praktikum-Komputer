<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_inventory_leni';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database GAGAL: " . mysqli_connect_error() . ". Pastikan MySQL Running dan nama database '$db' benar.");
}
?>