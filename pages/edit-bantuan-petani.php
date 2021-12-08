<?php 
	include 'proses/list-poktan.php';
    $kd_bantuan = $_GET['kd_bantuan'];
    $q_tampil_bantuan = mysqli_query($db, "SELECT * FROM tbbantuan WHERE kd_bantuan = '$kd_bantuan'");
    $r_tampil_bantuan = mysqli_fetch_array($q_tampil_bantuan);

?>
<html>
<head>
	<title>Edit Bantuan</title>
	<style type="text/css" media="screen">
		table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
		input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
	</style>
</head>
<body>
<div style="border:0; padding:10px; width:auto; height:auto;">
<form action="proses/edit-bantuan-petani-proses.php" method="POST" name="form-input-data">
    <div class="latar" style="width: auto; background-color: teal; padding: 5px; border-radius: 5px; text-align: center;">
        <h3 style="color: white;">Edit Data Bantuan</h3>
    </div>
	<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="20">
				<td width="40%"> </td>
				<td width="25%"> </td>
		</tr>

		<tr height="46">
			<td> </td>
			<td>Kode</td>
			<td><input type="text" name="kd_bantuan" value="<?php echo $r_tampil_bantuan['kd_bantuan'];?>" readonly size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Nama Bantuan</td>
			<td><input type="text" name="nm_bantuan" value="<?php echo $r_tampil_bantuan['nm_bantuan'];?>" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Nama Kelompok Tani</td>
			<td>
				<select name="poktan">
					<?php 
						$nama_tani = $_SESSION['nm_poktan'];
						$query = "SELECT * FROM tbpoktan WHERE nm_poktan LIKE '%$nama_tani%'";
						$k_tampil_anggota = mysqli_query($db, $query);
						$p_tampil_anggota = mysqli_fetch_array($k_tampil_anggota)
					?>
					<option value="<?=$p_tampil_anggota['kd_poktan'].' '.$p_tampil_anggota['nm_poktan'];?>"> <?php echo $p_tampil_anggota['kd_poktan'].' | '.$p_tampil_anggota['nm_poktan']; ?></option>
				</select>
			</td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>No Registrasi</td>
			<td><input type="text" name="no_reg" value="<?php echo $r_tampil_bantuan['no_reg'];?>" size="40" maxlength="30" /></td>
		</tr>
		<tr height="46">
			<td> </td>
			<td>Tahun Pembuatan</td>
			<td><input type="date" name="tahun" value="<?php echo $r_tampil_bantuan['tahun'];?>" size="40" maxlength="30" /></td>
		</tr>
        <tr height="46">
			<td> </td>
			<td>Sumber Anggaran</td>
			<td><input type="text" name="sumber" value="<?php echo $r_tampil_bantuan['sumber'];?>" size="40" maxlength="30" /></td>
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