
<body bgcolor="#CCCCCC">
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="post" action="simpan.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
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
      <input type="text" name="namatersangka">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">No Rekening</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="norekening" type="text" size="50">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Jenis Kasus</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="kategori">
      <option selected="selected">Pembunuhan</option>
    <option>Pencurian</option>
    <option>Korupsi</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="ttambah" value="TAMBAH"></td>
  </tr>

</table>
</form>
</body>