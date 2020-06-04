<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelaporan Korban</title>
</head>
<body>
    <h1 align="center">Pelaporan Tersangka</h1>
    <table>
        <form action="simpan.php" method="post" enctype="multipart/form-data">
            <table border="0" cellspacing="10" width="800" align="center">
            <tbody>
                            <h2 align="center">Tersangka</h2>
                            <tr>
                                <td>Nama Tersangka</td>
                                <td>:</td>
                                <td><input type="text" name="namatersangka" size="50" maxlength="30" autocomplete="off" autofocus/>
                                </td>
                            </tr>
                         <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><textarea name="alamat" rows="3" cols="50"></textarea></td>
                            </tr>
                            <tr>
                                <td>No Rekening</td>
                                <td>:</td>
                                <td><input type="text" name="norekening" size="30" maxlength="30"/></td>
                            </tr>
                            <tr>
                                    <td>Jenis Kasus</td>
                                    <td>:</td>
                                    <td>
                                        <select name="kategori">
                                        <option value="pembunuhan">Pembunuhan</option>
                                        <option value="pencurian">Pencurian</option>
                                        <option value="korupsi">Korupsi</option>
                                        </select>
                                    </td>
                                </tr>
                            <tr>
                                <td colspan="3"><button type="submit" name="simpan">Kirimkan Data</button>
                                    <button type="reset" name="reset">Cancel</button></td>
                            </tr>
                        </table>
                        <?php
include('koneksi.php'); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<?php
$sql    = 'select * from tersangka';
$query  = mysqli_query($koneksi,$sql);
?>
<h2><strong><p align="center">Data Tersangka</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Nama Tersangka</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">No Rekening</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Jenis Kasus</td>
    <td width="133" align="center" valign="middle" bgcolor="#00FFFF"><a href="tambah1.php">TAMBAH1</a></td></tr>
<?php
    while($data = mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['namatersangka']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['alamat']; ?></td>
   <td p align="center" bgcolor="#FFFFFF"><?php echo $data['norekening']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kategori']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
    <a href="edit2.php?ni=<?php echo $data['namatersangka'];?>" title="Edit korban ini"> || edit || </a>
    <a href="delete2.php?ni=<?php echo $data['namatersangka'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a>
    </td> 
  </tr>
<?php
}
?>
</table>
</body>
</html>
<?php



    
