<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelaporan Korban</title>
</head>
<body>
    <h1 align="center">Pelaporan Pengaduan</h1>
    <table>
        <form action="simpan2.php" method="post" enctype="multipart/form-data">
            <table border="0" cellspacing="10" width="800" align="center">
            <tbody>
                            <h2 align="center">Pengaduan</h2>
                         <tr>
                            <tr>
                                <td>Nama Korban</td>
                                <td>:</td>
                                <td><select type="text" name="nama">
                                <?php include "koneksi.php";
                                $sql    = 'select * from korban';
                                $query  = mysqli_query($koneksi,$sql);
                                 while($data = mysqli_fetch_array($query)){ 
                                    echo '<option value="'.$data['id_korban'].'">'.$data['namakorban'].'</option>';
                                }?>
                                 
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Tersangka</td>
                                <td>:</td>
                                <td><select type="text" name="namatersangka">
                                <?php include "koneksi.php";
                                $sql    = 'select * from tersangka';
                                $query  = mysqli_query($koneksi,$sql);
                                 while($data = mysqli_fetch_array($query)){ 
                                    echo '<option value="'.$data['namatersangka'].'">'.$data['namatersangka'].'</option>';
                                }?>
                                 
                                </select>
                                </td>
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
                                <td>Kerugian</td>
                                <td>:</td>
                                <td><input type="text" name="kerugian" size="30" maxlength="30"/></td>
                            </tr>
                         <tr>
                                <td>Kronologi</td>
                                <td>:</td>
                                <td><textarea name="kronologi" rows="3" cols="50"></textarea></td>
                            </tr>
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
$sql    = 'select * from pengaduan';
$query  = mysqli_query($koneksi,$sql);
?>
<h2><strong><p align="center">Data Pengaduan</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Id Pengaduan</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Nama Korban</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Jenis Kasus</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Tersangka</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Kerugian</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Kronologi</td>
    <td width="133" align="center" valign="middle" bgcolor="#00FFFF"><a href="tambah.php">TAMBAH</a></td></tr>
<?php
    while($data = mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['id_pengaduan']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['namakorban']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['jeniskasus']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['tersangka']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kerugian']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kronologi']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
    <a href="edit1.php?ni=<?php echo $data['id_pengaduan'];?>" title="Edit korban ini"> || edit || </a>
	<a href="delete1.php?ni=<?php echo $data['id_pengaduan'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a>
     </td> 
  </tr>
<?php
}
?>
</table>
</body>
</html>



    
