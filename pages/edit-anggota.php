<html>
<head>
	<title>Edit Anggota</title>
	<style type="text/css" media="screen">
		table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
		input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
	</style>
</head>
<body>
<div style="border:0; padding:10px; width:auto; height:auto;">
<form action="action-input-data.php" method="POST" name="form-input-data">
    <div class="latar" style="width: auto; background-color: teal; padding: 5px; border-radius: 5px; text-align: center;">
        <h3 style="color: white;">Edit Data Anggota Kelompok Tani</h3>
    </div>
	<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="20">
				<td width="10%"> </td>
				<td width="25%"> </td>
		</tr>

        <tr height="46">
			<td> </td>
			<td>NIK</td>
			<td><input type="text" name="nik" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Nama Anggota</td>
			<td><input type="text" name="nama" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Alamat</td>
			<td><input type="text" name="alamat" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>No SPPT</td>
			<td><input type="text" name="nosppt" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Luas SPPT</td>
			<td><input type="text" name="luassppt" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Nama Ibu</td>
			<td><input type="text" name="namaibu" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Koordinat</td>
			<td><input type="text" name="koordinat" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>No Telepon</td>
			<td><input type="text" name="telepon" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Komoditas</td>
			<td><input type="text" name="komoditas" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Luas Tanam</td>
			<td><input type="text" name="luastanam" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46" width="100">
			<td> </td>
			<td> </td>
			<td><input type="submit" name="Submit" value="Submit">   
				<input type="reset" name="reset" value="Kembali" onclick="history.back()"></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>