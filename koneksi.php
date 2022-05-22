<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010068";
$db = "klinik_312010068";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
} #else echo "Koneksi berhasil";
?>