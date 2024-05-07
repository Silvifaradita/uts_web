<?php
include('koneksi.php');
include('tb_webinar.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//include library
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

$sql1 = mysqli_query($conn, "SELECT * FROM data_peserta");

if ($sql1) {
    $emailpengirim = 'aplikasibewara@gmail.com';
    $nama_pengirim = 'Webinar APP';
    $email_penerima = $email;
    $subjek = 'Pendaftaran Webinar Berhasil';
    $pesan = '<h2>Halo Peserta Webinar,</h2>
    <h3>Terimakasih sudah mendaftar!</h3>
    Melalui email ini, Kami ingin mengingatkan Anda untuk mengikuti Kegiatan <b>' . $judulwebinar . '</b><br><br>
    Yang akan diselenggarakan pada :<br><br>
    <b>Hari/Tanggal : ' . $tglwebinar . '</b><br><br>
    <b>Waktu : ' . $waktuwebinar . '</b><br><br>
    <b>Link Webinar :</b><br><br>' . $linkwebinar . '<br><br><br>
    
    Terima Kasih dan Sampai Jumpa!! ';

    // $pesan = '<h2>Halo Ananda Firda Kurnianisa (Calonnya mas Ega),</h2>
    // <h3>Terimakasih sudah mendaftar!</h3>
    // Melalui email ini, Kami ingin mengingatkan Anda untuk mengikuti Kegiatan <b>' . $judulwebinar . '</b><br><br>
    // Yang akan diselenggarakan pada :<br><br>
    // <b>Hari/Tanggal : ' . $tglwebinar . '</b><br>
    // <b>Waktu : ' . $waktuwebinar . '</b><br>
    // <b>Link Webinar :</b><br>' . $linkwebinar . '<br><br>
    
    // Terima Kasih dan Sampai Jumpa!! ';

    $mail = new PHPMailer;
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    // $mail->Username = $emailpengirim;
    $mail->Username = 'aplikasibewara@gmail.com';
    $mail->Password = 'zagcnxbogiyvopfr';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPDebug = 2;

    $mail->setFrom($emailpengirim, $nama_pengirim);
    if ($sql1->num_rows > 0) {
        while ($row = $sql1->fetch_assoc()) {
            $mail->addAddress($row["email"]);
            $mail->isHTML(true);
            $mail->Subject = $subjek;
            $mail->Body = $pesan;
            if (!$mail->send()) {
                echo "<script> alert ('Data gagal ditambahkan')</script>";
                header("refresh:0; data_peserta.php");
            } else {
                echo "<script> alert ('Data berhasil ditambahkan')</script>";
                header("refresh:0; data_peserta.php");
            }
        }
    }
}
