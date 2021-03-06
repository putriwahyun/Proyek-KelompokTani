<?php 
	include 'proses/list-poktan.php';
    $nik = $_GET['nik'];
    $q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE nik = '$nik'");
    $r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
	// $r_tampil_koordinatx = mysqli_fetch_array($q_tampil_anggota);

	//ambil data koordinat 
    $q_tampil_koordinat = mysqli_query($db, "SELECT SUBSTRING(koordinat, 1, 20) AS koordinatx, SUBSTRING(koordinat, 24) AS koordinaty FROM tbanggota");
	$r_tampil_koordinat = mysqli_fetch_array($q_tampil_koordinat);
?>
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
<form action="proses/edit-anggota-proses.php" method="POST" name="form-input-data">
    <div class="latar" style="width: auto; background-color: teal; padding: 5px; border-radius: 5px; text-align: center;">
        <h3 style="color: white;">Edit Data Anggota Kelompok Tani</h3>
    </div>
	<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="15">
			<td width="20%"> </td>
			<td width="25%"> </td>
		</tr>

        <tr height="40">
			<td> </td>
			<td>NIK</td>
			<td><input type="text" name="nik" value="<?php echo $r_tampil_anggota['nik'];?>" size="40" maxlength="30" /></td>
		</tr>
		<tr height="40">
			<td> </td>
			<td>Nama Anggota</td>
			<td><input type="text" name="nm_anggota" value="<?php echo $r_tampil_anggota['nm_anggota']; ?>" size="40" maxlength="30" /></td>
		</tr>
		<tr height="40">
			<td> </td>
			<td>Nama Kelompok Tani</td>
			<td>
				<select name="poktan">
					<?php foreach ($data_poktan as $poktan): ?>
						<option value="<?php echo $poktan['kd_poktan'].' '.$poktan['nm_poktan'];?>" <?php echo ($poktan['kd_poktan'].' | '.$poktan['nm_poktan']== $r_tampil_anggota['kd_poktan'].' | ' .$poktan['nm_poktan']) ? 'selected' : '' ; ?>> <?php echo $poktan['kd_poktan'].' | '.$poktan['nm_poktan'] ?></option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr height="40">
			<td> </td>
			<td>Alamat</td>
			<td><input type="text" name="alamat" value="<?php echo $r_tampil_anggota['alamat'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="40">
			<td> </td>
			<td>No SPPT</td>
			<td><input type="text" name="no_sppt" value="<?php echo $r_tampil_anggota['no_sppt'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="40">
			<td> </td>
			<td>Luas SPPT</td>
			<td><input type="text" name="luas_sppt" value="<?php echo $r_tampil_anggota['luas_sppt'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="40">
			<td> </td>
			<td>Nama Ibu</td>
			<td><input type="text" name="nm_ibu" value="<?php echo $r_tampil_anggota['nm_ibu'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="40">
			<td> </td>
			<td>Koordinat</td>
			<td>X: <input type="text" name="koordinatx" value="<?php echo $r_tampil_koordinat['koordinatx'];?>" size="40" maxlength="30" /></td>
			<td>Y: <input type="text" name="koordinaty" value="<?php echo $r_tampil_koordinat['koordinaty'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="40">
			<td> </td>
			<td>No Telepon</td>
			<td><input type="text" name="no_telp" value="<?php echo $r_tampil_anggota['no_telp'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="40">
			<td> </td>
			<td>Komoditas</td>
			<td><input type="text" name="komoditas" value="<?php echo $r_tampil_anggota['komoditas'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="40">
			<td> </td>
			<td>Luas Tanam</td>
			<td><input type="text" name="luas_tanam" value="<?php echo $r_tampil_anggota['luas_tanam'];?>" size="40" maxlength="30" /></td>
		</tr>
		<tr height="40" width="100">
			<td> </td>
			<td> </td>
			<td><input type="submit" name="simpan" value="Simpan">   
				<input type="reset" name="reset" value="Kembali" onclick="history.back()"></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>