<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$namatersangka            = $_POST['namatersangka'];
$alamat           = $_POST['alamat'];
$norekening        = $_POST['norekening'];
//$jenis_kelamin  = $_POST['jenis_kelamin'];
$kategori         = $_POST['kategori'];
// query SQL untuk insert data
$query=mysqli_query($koneksi,"INSERT INTO tersangka (namatersangka, alamat, norekening, kategori)
VALUES ('".$namatersangka."', '".$alamat."', '".$norekening."', '".$kategori."')");
// $query);
//echo $nah;
// mengalihkan ke halaman index.php
header("location:index.php");
?>


