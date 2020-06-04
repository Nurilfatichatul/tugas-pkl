<?php
include('/koneksi.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from korban where id_korban="'.$ni.'"';
$query	= mysqli_query($koneksi,$sql);
//var_export($query);
header('location: index.php');
?>