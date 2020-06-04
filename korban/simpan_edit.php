<?php
include 'koneksi.php';
error_reporting(E_ALL);
// menyimpan data kedalam variabel
//$id_korban       = $_POST['id_korban'];
$id_korban    =$_POST['id_korban'];
$namakorban       = $_POST['nama'];
$alamat           = $_POST['alamat'];
$jeniskelamin         = $_POST['kategori'];
$norekening        = $_POST['norekening'];
// query SQL untuk insert data
$query=mysqli_query($koneksi,"UPDATE korban SET
                  id_korban = '".$id_korban."',
                  namakorban = '".$namakorban."',
                  alamat = '".$alamat."',
                  jeniskelamin = '".$jeniskelamin."',
                  norekening = '".$norekening."'
              WHERE id_korban = '".$id_korban."'");
// $query);
//echo $namakorban.$alamat.$kategori.$norekening;
// mengalihkan ke halaman index.php
var_export($query);
header("location:index.php");
?>


