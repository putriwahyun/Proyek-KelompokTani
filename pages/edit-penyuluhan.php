<?php 
    $kd_penyuluhan = $_GET['kd_penyuluhan'];
    $q_tampil_penyuluhan = mysqli_query($db, "SELECT * FROM tbpenyuluhan WHERE kd_penyuluhan = '$kd_penyuluhan'");
    $r_tampil_penyuluhan = mysqli_fetch_array($q_tampil_penyuluhan);

?>
<html>
<head>
	<title>Edit Penyuluhan</title>
	<style type="text/css" media="screen">
		table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
		input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
	</style>
</head>
<body>
<div style="border:0; padding:10px; width:auto; height:auto;">
<form action="proses/edit-penyuluhan-proses.php" method="POST" name="form-input-data">
    <div class="latar" style="width: auto; background-color: teal; padding: 5px; border-radius: 5px; text-align: center;">
        <h3 style="color: white;">Edit Penyuluhan</h3>
    </div>
	<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="20">
				<td width="40%"> </td>
				<td width="25%"> </td>
		</tr>

		<tr height="46">
			<td> </td>
			<td>Kode</td>
			<td><input type="text" name="kd_penyuluhan" value="<?php echo $r_tampil_penyuluhan['kd_penyuluhan'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Nama Penyuluh</td>
			<td><input type="text" name="nm_penyuluh" value="<?php echo $r_tampil_penyuluhan['nm_penyuluh'];?>" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Tanggal Penyuluhan</td>
			<td><input type="date" name="tgl_penyuluhan" value="<?php echo $r_tampil_penyuluhan['tgl_penyuluhan'];?>" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Tempat</td>
			<td><input type="text" name="tempat" value="<?php echo $r_tampil_penyuluhan['tempat'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Tema</td>
			<td><input type="text" name="tema" value="<?php echo $r_tampil_penyuluhan['tema'];?>" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46" width="100">
			<td> </td>
			<td> </td>
			<td><input type="submit" name="simpan" value="Submit">   
				<input type="reset" name="reset" value="Kembali" onclick="history.back()"></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>