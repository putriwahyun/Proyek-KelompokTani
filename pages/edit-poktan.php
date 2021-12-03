<?php
$kd_poktan = $_GET['kd_poktan'];
$q_tampil_poktan = mysqli_query($db, "SELECT * FROM tbpoktan WHERE kd_poktan = '$kd_poktan'");
$r_tampil_poktan = mysqli_fetch_array($q_tampil_poktan);

?>
<html>

<head>
	<title>Edit Kelompok Tani</title>
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
		<form action="proses/edit-poktan-proses.php" method="POST" name="form-input-data">
			<div class="latar" style="width: auto; background-color: teal; padding: 5px; border-radius: 5px; text-align: center;">
				<h3 style="color: white;">Edit Data Kelompok Tani</h3>
			</div>
			<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr height="20">
					<td width="40%"> </td>
					<td width="25%"> </td>
				</tr>

				<tr height="40">
					<td> </td>
					<td>Kode</td>
					<td><input type="text" name="kd_poktan" value="<?php echo $r_tampil_poktan['kd_poktan']; ?>" readonly size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Kelurahan</td>
					<td><input type="text" name="kelurahan" value="<?php echo $r_tampil_poktan['kelurahan']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Nama Kelompok Tani</td>
					<td><input type="text" name="nm_poktan" value="<?php echo $r_tampil_poktan['nm_poktan']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $r_tampil_poktan['alamat']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Luas Lahan(Ha)</td>
					<td><input type="text" name="luas_lahan" value="<?php echo $r_tampil_poktan['luas_lahan']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Jumlah Petani</td>
					<td><input type="text" name="jumlah_petani" value="<?php echo $r_tampil_poktan['jumlah_petani']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Tahun Berdiri</td>
					<td><input type="text" name="tahun_berdiri" value="<?php echo $r_tampil_poktan['tahun_berdiri']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Nama Ketua</td>
					<td><input type="text" name="nm_ketua" value="<?php echo $r_tampil_poktan['nm_ketua']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>No Telpon</td>
					<td><input type="text" name="no_telp" value="<?php echo $r_tampil_poktan['no_telp']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Nama Sekretaris</td>
					<td><input type="text" name="nm_sekretaris" value="<?php echo $r_tampil_poktan['nm_sekretaris']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Nama Bendahara</td>
					<td><input type="text" name="nm_bendahara" value="<?php echo $r_tampil_poktan['nm_bendahara']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Kelas</td>
					<?php
					if ($r_tampil_poktan['kelas'] == "Pemula") {
						echo "<td><select name='kelas' id='kelas' style='width: 200px;'>
						<option value='Pemula' selected>Pemula</option>
						<option value='Lanjut'>Lanjut</option>
						<option value='Madya'>Madya</option>
						<option value='Utama'>Utama</option>
						</select></td>";
					} elseif ($r_tampil_poktan['kelas'] == "Lanjut") {
						echo "<td><select name='kelas' id='kelas' style='width: 200px;'>
						<option value='Pemula'>Pemula</option>
						<option value='Lanjut' selected>Lanjut</option>
						<option value='Madya'>Madya</option>
						<option value='Utama'>Utama</option>
						</select></td>";
					} elseif ($r_tampil_poktan['kelas'] == "Madya") {
						echo "<td><select name='kelas' id='kelas' style='width: 200px;'>
						<option value='Pemula'>Pemula</option>
						<option value='Lanjut'>Lanjut</option>
						<option value='Madya' selected>Madya</option>
						<option value='Utama'>Utama</option>
						</select></td>";
					}  elseif ($r_tampil_poktan['kelas'] == "Utama") {
						echo "<td><select name='kelas' id='kelas' style='width: 200px;'>
						<option value='Pemula'>Pemula</option>
						<option value='Lanjut'>Lanjut</option>
						<option value='Madya'>Madya</option>
						<option value='Utama' selected>Utama</option>
						</select></td>";
					} 
					?>
				</tr>
				<tr height="40">
					<td> </td>
					<td>Nama Penyuluh WKPP</td>
					<td><input type="text" name="nm_penyuluh_wkpp" value="<?php echo $r_tampil_poktan['nm_penyuluh_wkpp']; ?>" size="40" maxlength="30" /></td>
				</tr>
				<tr height="40" width="100">
					<td> </td>
					<td> </td>
					<td><input type="submit" name="simpan" value="Submit">
						<input type="reset" name="reset" value="Kembali" onclick="history.back()">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>