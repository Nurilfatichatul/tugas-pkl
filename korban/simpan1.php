<?php
include 'koneksi.php';
error_reporting(E_ALL);
// menyimpan data kedalam variabel
//$id_korban       = $_POST['id_korban'];
$id_korban    =$_POST['id_korban'];
$namakorban       = $_POST['nama'];
$alamat           = $_POST['alamat'];
$kategori         = $_POST['kategori'];
$norekening        = $_POST['norekening'];
// query SQL untuk insert data
$query=mysqli_query($koneksi,"INSERT INTO korban (id_korban, namakorban, alamat, jeniskelamin, norekening)
VALUES ('".$id_korban."', '".$namakorban."', '".$alamat."', '".$kategori."', '".$norekening."')");
$query=mysqli_query($koneksi,"INSERT INTO tersangka (namatersangka, alamat, norekening, kategori)
VALUES ('".$namatersangka."', '".$alamat."', '".$norekening."', '".$kategori."')");
// $query);
//echo $namakorban.$alamat.$kategori.$norekening;
// mengalihkan ke halaman index.php
var_export($query);
header("location:index.php");
?>


