<?php
include 'koneksi.php';
error_reporting(E_ALL);
// menyimpan data kedalam variabel
//$id_korban       = $_POST['id_korban'];
$namatersangka       = $_POST['namatersangka'];
$alamat           = $_POST['alamat'];
$norekening        = $_POST['norekening'];
$kategori         = $_POST['kategori'];
// query SQL untuk insert data
$query=mysqli_query($koneksi,"UPDATE tersangka SET
                  namatersangka = '".$namatersangka."',
                  alamat = '".$alamat."',
                  norekening = '".$norekening."',
                  kategori = '".$kategori."'
              WHERE namatersangka = '".$namatersangka."'");
// $query);
//echo $namakorban.$alamat.$kategori.$norekening;
// mengalihkan ke halaman index.php
var_export($query);
header("location:index.php");
?>


