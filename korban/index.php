<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelaporan Korban</title>
</head>
<body>
    <h1 align="center">Pelaporan Korban</h1>
    <table>
        <form action="simpan1.php" method="post" enctype="multipart/form-data">
            <table border="0" cellspacing="10" width="800" align="center">
            <tbody>
            <h2 align="center">Korban</h2>
            <tr>
                <td>Id_Korban</td>
                 <td>:</td>
                <td><input type="text" name="id_korban" size="50" maxlength="30" autocomplete="off" autofocus/>
                </td>
            </tr>
            <tr>
                <td>Nama Korban</td>
                <td>:</td>
                <td><input type="text" name="nama" size="50" maxlength="30" autocomplete="off" autofocus/>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="3" cols="50"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="kategori">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>No Rekening</td>
                <td>:</td>
                <td><input type="text" name="norekening" size="30" maxlength="30"/></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit" name="simpan">Kirimkan Data</button>
                    <button type="reset" name="reset">Cancel</button>

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
$sql    = 'select * from korban';
$query  = mysqli_query($koneksi,$sql);
?>
<h2><strong><p align="center">Data Korban</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Id Korban</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Nama Korban</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Jenis Kelamin</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">No Rekening</td>
    <td width="133" align="center" valign="middle" bgcolor="#00FFFF"><a href="tambah.php">TAMBAH</a></td></tr>
<?php
    while($data = mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['id_korban']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['namakorban']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['alamat']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['jeniskelamin']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['norekening']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
    <a href="edit.php?ni=<?php echo $data['id_korban'];?>" title="Edit korban ini"> || edit || </a>
	<a href="delete.php?ni=<?php echo $data['id_korban'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a>
    </td> 
  </tr>
  <select>
<?php
}
?>
</table>
</body>
</html>
