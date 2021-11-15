<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
    if ( isset($_POST['submit']))
    {
        $user = isset($_POST['user']) ? $_POST['user'] : "";
        $pass = isset($_POST['pass']) ? $_POST['pass'] : "";
        $qry = mysqli_query($db, "SELECT * FROM petani WHERE username = '$user' AND password = '$pass'");
        $sesi = mysqli_num_rows($qry);

        if ($sesi == 1)
        {
            $data_petani = mysqli_fetch_array($qry);
            $_SESSION['id_petani'] = $data_petani['id_petani'];
            $_SESSION['sesi'] = $data_petani['nm_petani'];
            $_SESSION['nm_poktan'] = $data_petani['nm_poktan'];
            $_SESSION['alamat'] = $data_petani['alamat'];

            echo "<script>alert('Anda berhasil Log In');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index-petani.php?user=$sesi'>";      
        }
        else
        {
            echo "<meta http-equiv='refresh' content='0; url=login-petani.php'>";
            echo "<script>alert('Anda gagal Log In');</script>";
        }
    }
    else
    {
        include "login-petani.php";
    }
?>