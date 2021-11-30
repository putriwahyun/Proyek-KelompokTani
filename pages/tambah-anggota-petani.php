<?php
include 'proses/list-poktan.php';
?>

<html>
<head>
	<title>Tambah Anggota</title>
	<style type="text/css" media="screen">
		table {
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 11px;
		}

		input {
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 11px;
			height: 20px;
		}
	</style>
</head>

<body>
	<div style="border:0; padding:10px; width:auto; height:auto;">
		<form action="proses/tambah-anggota-petani-proses.php" method="POST" name="form-input-data">
			<div class="latar" style="width: auto; background-color: teal; padding: 5px; border-radius: 5px; text-align: center;">
				<h3 style="color: white;">Tambah Data Anggota Kelompok Tani</h3>
			</div>
			<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr height="15">
					<td width="20%"> </td>
					<td width="25%"> </td>
				</tr>

				<tr height="40">
					<td> </td>
					<td>NIK</td>
					<td><input type="text" name="nik" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Nama Anggota</td>
					<td><input type="text" name="nm_anggota" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Nama Kelompok Tani</td>
					<td>
						<select name="poktan">
							<?php foreach ($data_poktan as $poktan): ?>
								<option value="<?=$poktan['kd_poktan'].' '.$poktan['nm_poktan'];?>"> <?php echo $poktan['kd_poktan'].' | '.$poktan['nm_poktan']; ?></option>	
							<?php endforeach ?>
						</select>
					</td>
				</tr>
				<tr height="46">
					<td> </td>
					<td>Alamat</td>
					<td><input type="text" name="alamat" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>No SPPT</td>
					<td><input type="text" name="no_sppt" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Luas SPPT</td>
					<td><input type="text" name="luas_sppt" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Nama Ibu</td>
					<td><input type="text" name="nm_ibu" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Koordinat</td>
					<td>X: <input type="text" name="koordinatx" size="38" maxlength="30" /></td>
					<td>Y: <input type="text" name="koordinaty" size="38" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>No Telepon</td>
					<td><input type="text" name="no_telp" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Komoditas</td>
					<td><input type="text" name="komoditas" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Luas Tanam</td>
					<td><input type="text" name="luas_tanam" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40" width="100">
					<td> </td>
					<td> </td>
					<td><input type="submit" name="Submit" value="Submit">
						<input type="reset" name="reset" value="Kembali" onclick="history.back()">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>