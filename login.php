<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <div style="color: black; position: absolute; left: 330px; top: 90px; font-size: 40px; font-weight: bold;">
        GAPOKTAN KECAMATAN JOMBANG
    </div>
    <div class="container">
        <form method="post" action="index.php?p=dashboard">
            <div style="height: 35px;"></div>
            <input type="text" name="user" placeholder="Masukkan Username"><br>
            <input type="password" name="pass" placeholder="Masukkan Password"><br>
            <select name="level" id="level" style="width: 100%">
                <option value="pilih" selected disabled>Pilih Level User</option>
                <option value="kepalapoktan">Kepala Kelompok Tani</option>
                <option value="anggotapoktan">Anggota Kelompok Tani</option>
                <option value="admindinas">Admin Dinas</option>
            </select>
            <div class="vertical-center">
                <button type="submit" name="submit">Masuk</button>
            </div>
        </form>
    </div>
</body>
</html>