<html>
<head>
	<title>Tambah Kelompok Tani</title>
	<style type="text/css" media="screen">
		table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
		input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
	</style>
</head>
<body>
<div style="border:0; padding:10px; width:auto; height:auto;">
<form action="proses/tambah-poktan-proses.php" method="POST" name="form-input-data">
    <div class="latar" style="width: auto; background-color: teal; padding: 5px; border-radius: 5px; text-align: center;">
        <h3 style="color: white;">Tambah Data Kelompok Tani</h3>
    </div>
	<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="20">
				<td width="40%"> </td>
				<td width="25%"> </td>
		</tr>

		<tr height="46">
			<td> </td>
			<td>Kode</td>
			<td><input type="text" name="kd_poktan" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Nama Kelompok Tani</td>
			<td><input type="text" name="nm_poktan" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Nama Ketua</td>
			<td><input type="text" name="nm_ketua" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Alamat</td>
			<td><input type="text" name="alamat" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Kelas</td>
			<td><select name="kelas" id="kelas" style="width: 200px;">
				<option value="Pemula">Pemula</option>
				<option value="Lanjut">Lanjut</option>
				<option value="Madya">Madya</option>
				<option value="Utama">Utama</option>
			</select></td>
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