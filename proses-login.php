<?php

session_start();

if ($_POST['username'] == 'admin' && $_POST['password'] == '12345') {
    //Login process is by assining session variable
    $_SESSION['login'] = true;
    $_SESSION['username'] = $_POST['username'];
    echo "Login berhasil klik <a href='data_peserta.php'>Halaman Admin</a> untuk melihat data sensitif atau <a href='login_admin.php'>logout</a> untuk keluar";
} else {
    echo "<script> alert ('Gagal untuk login!')</script>";
    header("refresh:0; login_admin.php");
}
