<?php
include 'koneksi.php';
error_reporting(E_ALL);
// menyimpan data kedalam variabel
//$id_korban       = $_POST['id_korban'];
$id_pengaduan    =$_POST['id_pengaduan'];
$namakorban       = $_POST['nama'];
$kategori         = $_POST['kategori'];
$tersangka       = $_POST['tersangka'];
$kerugian        = $_POST['kerugian'];
$kronologi           = $_POST['kronologi'];
// query SQL untuk insert data
$query=mysqli_query($koneksi,"UPDATE pengaduan SET
                  id_pengaduan = '".$id_pengaduan."',
                  namakorban = '".$namakorban."',
                  jeniskasus = '".$kategori."',
                  tersangka = '".$tersangka."',
                  kerugian = '".$kerugian."',
                  kronologi = '".$kronologi."'
              WHERE id_pengaduan = '".$id_pengaduan."'");
// $query);
//echo $namakorban.$alamat.$kategori.$norekening;
// mengalihkan ke halaman index.php
var_export($query);
header("location:index.php");
?>


