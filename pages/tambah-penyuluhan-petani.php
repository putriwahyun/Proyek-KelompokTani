<?php
include 'proses/list-poktan.php';
?>

<html>
<head>
	<title>Tambah Penyuluhan</title>
	<style type="text/css" media="screen">
		table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
		input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
	</style>
</head>
<body>
<div style="border:0; padding:10px; width:auto; height:auto;">
<form action="proses/tambah-penyuluhan-petani-proses.php" method="POST" name="form-input-data">
    <div class="latar" style="width: auto; background-color: teal; padding: 5px; border-radius: 5px; text-align: center;">
        <h3 style="color: white;">Tambah Penyuluhan</h3>
    </div>
	<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="20">
				<td width="40%"> </td>
				<td width="25%"> </td>
		</tr>

        <tr height="46">
			<td> </td>
			<td>Nama Penyuluh</td>
			<td><input type="text" name="nm_penyuluh" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Nama Kelompok Tani</td>
			<td>
				<select name="poktan">
					<?php 
						$nama_tani = $_SESSION['nm_poktan'];
						$query = "SELECT * FROM tbpoktan WHERE nm_poktan LIKE '%$nama_tani%'";
						$q_tampil_anggota = mysqli_query($db, $query);
						$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)
					?>
					<option value="<?=$r_tampil_anggota['kd_poktan'].' '.$r_tampil_anggota['nm_poktan'];?>"> <?php echo $r_tampil_anggota['kd_poktan'].' | '.$r_tampil_anggota['nm_poktan']; ?></option>
				</select>
			</td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Tanggal Penyuluhan</td>
			<td><input type="date" name="tgl_penyuluhan" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Tempat</td>
			<td><input type="text" name="tempat" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Tema</td>
			<td><input type="text" name="tema" size="40" maxlength="30" /></td>
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