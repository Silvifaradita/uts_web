<?php
include("koneksi.php");
include("tb_webinar.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//include library
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
// $id = $_POST['id'];
$id = '1';
$nama = $_POST['nama'];
$jkel = $_POST['jkel'];
$email = $_POST['email'];
$instansi = $_POST['instansi'];

// '$id'
$sql = mysqli_query($conn, "INSERT INTO data_peserta(id, nama, jkel, email, instansi) VALUES (NULL,'$nama','$jkel','$email','$instansi')");

echo "<script> alert ('Data berhasil ditambahkan')</script>";

if ($sql) {
    echo "<script> alert ('Data berhasil ditambahkan')</script>";
    header("refresh:0; daftar_peserta.php");
} else {
    echo "<script> alert ('Data gagal ditambahkan')</script>";
    header("refresh:0; daftar_peserta.php");
}
