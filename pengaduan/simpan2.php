<?php
include 'koneksi.php';
error_reporting(E_ALL);
// menyimpan data kedalam variabel
$idpengaduan           = $_POST['id_pengaduan'];
$namakorban            = $_POST['nama'];
$kategori           = $_POST['kategori'];
$tersangka       = $_POST['tersangka'];
//$jenis_kelamin  = $_POST['jenis_kelamin'];
$kerugian         = $_POST['kerugian'];
$kronologi         = $_POST['kronologi'];
// query SQL untuk insert data
$query=mysqli_query($koneksi,"INSERT INTO pengaduan (id_pengaduan, namakorban, jeniskasus, tersangka, kerugian, kronologi)
VALUES ('".$idpengaduan."', '".$namakorban."', '".$kategori."', '".$tersangka."', '".$kerugian."', '".$kronologi."')");
$query=mysqli_query($koneksi,"INSERT INTO tersangka (namatersangka, alamat, norekening, kategori)
VALUES ('".$namatersangka."', '".$alamat."', '".$norekening."', '".$kategori."')");
// $query);
//echo $nah;
// mengalihkan ke halaman index.php
var_export($query);
header("location:index.php");
?>


