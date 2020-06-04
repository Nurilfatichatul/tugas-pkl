<body bgcolor="#CCCCC">
<h2>
<p align="center">EDIT DATA
<?php
	include('/koneksi.php');
	if(isset($_GET['ni'])){
		$ni		= $_GET['ni'];
		$query	= mysqli_query($koneksi,'select * from tersangka where namatersangka = "'.$ni.'"');
		$data  	= mysqli_fetch_array($query);
		$namatersangka	= $data['namatersangka'];
		$alamat	= $data['alamat'];
    $norekening	= $data['norekening'];
    $kategori = $data['kategori'];
	}
	else{
	$namatersangka = '';
	$alamat = '';
    $norekening = '';
    $kategori = '';
	}
?>
</p></h2>
<form method="post" name="frm" action="simpan1_edit.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama Tersangka</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="namatersangka" type="text" value="<?php echo $namatersangka; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50" value="<?php echo $alamat; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">No Rekening</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="norekening" value="<?php echo $norekening;?>"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Jenis Kasus</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>    
      <input name="kategori" type="text" size="50" value="<?php echo $kategori;?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>
</table>
</form>
