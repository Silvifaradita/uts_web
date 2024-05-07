<?php
session_start();
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "tubes");

//DATA PESERTA

//Tambah data peserta
if (isset($_POST['tambahpeserta'])) {
    $idnya = $_POST['id'];
    $namabaru = $_POST['nama'];
    $jk = $_POST['jkel'];
    $emailbaru = $_POST['email'];
    $instansibaru = $_POST['instansi'];

    $addtomasuk = mysqli_query($conn, "insert into data_peserta (nama, jkel, email, instansi) values ('$namabaru', '$jk', '$emailbaru', '$instansibaru')");


    if ($addtomasuk) {
        header('location:daftar_peserta.php');
    } else {
        echo "Gagal tambah data";
        header('location:data_peserta.php');
    }
}

//Edit data peserta
if (isset($_POST['updatepeserta'])) {
    $idnya = $_POST['id'];
    $namabaru = $_POST['nama'];
    $jk = $_POST['jkel'];
    $emailbaru = $_POST['email'];
    $instansibaru = $_POST['instansi'];

    $queryupdate = mysqli_query($conn, "update data_peserta set email = '$emailbaru',nama = '$namabaru', jkel = '$jk', instansi = '$instansibaru' where id='$idnya'");

    if ($queryupdate) {
        header('location:data_peserta.php');
    } else {
        header('location:data_peserta.php');
    }
}

//Hapus data peserta
if (isset($_POST['hapuspeserta'])) {

    $id = $_POST['id'];

    $querydelete = mysqli_query($conn, "delete from data_peserta where id = '$id'");

    if ($querydelete) {
        header('location:data_peserta.php');
    } else {
        header('location:data_peserta.php');
    }
}

//DATA MEETING

//Tambah data link
if (isset($_POST['tambahlink'])) {
    $namalink = $_POST['link'];


    $addtomasuk = mysqli_query($conn, "insert into link (nama_link) values ('$namalink')");


    if ($addtomasuk) {
        header('location:data_meeting.php');
    } else {
        echo "Gagal tambah data";
        header('location:data_meeting.php');
    }
}

//Edit data link
if (isset($_POST['updatelink'])) {
    $idlink = $_POST['idlink'];
    $namalink = $_POST['namalink'];

    $queryupdate = mysqli_query($conn, "update link set nama_link = '$namalink' where id_link='$idlink'");

    if ($queryupdate) {
        header('location:data_meeting.php');
    } else {
        header('location:data_meeting.php');
    }
}

//Hapus data meeting
if (isset($_POST['hapuslink'])) {
    $idlink = $_POST['idlink'];
    $namalink = $_POST['namalink'];

    $querydelete = mysqli_query($conn, "delete from link where id_link = '$idlink'");

    if ($querydelete) {
        header('location:data_meeting.php');
    } else {
        header('location:data_meeting.php');
    }
}


//DATA WEBINAR

//Tambah data Webinar
if (isset($_POST['tambahwebinar'])) {
    $idwebinar = $data['idwebinar'];
    $judulwebinar = $_POST['judulwebinar'];
    $tglwebinar = $_POST['tglwebinar'];
    $waktuwebinar = $_POST['waktuwebinar'];
    $pemateriwebinar = $_POST['pemateri'];
    $link = $_POST['link_webinar'];


    $addwebinar = mysqli_query($conn, "insert into data_webinar (judul_webinar, tgl_webinar, waktu_webinar, pemateri, link_webinar ) values ('$judulwebinar', '$tglwebinar', '$waktuwebinar', '$pemateriwebinar', '$link')");


    if ($addtomasuk) {
        header('location:data_webinar.php');
    } else {
        echo "Gagal tambah data";
        header('location:data_webinar.php');
    }
}

//Edit data webinar
if (isset($_POST['updatewebinar'])) {
    $idwebinar = $_POST['idwebinar'];
    $judulwebinar = $_POST['judulwebinar'];
    $tglwebinar = $_POST['tglwebinar'];
    $waktuwebinar = $_POST['waktuwebinar'];
    $pemateriwebinar = $_POST['pemateri'];
    $link = $_POST['link_webinar'];

    $queryupdate = mysqli_query($conn, "update data_webinar set judul_webinar = '$judulwebinar', tgl_webinar = '$tglwebinar', waktu_webinar = '$waktuwebinar', pemateri = '$pemateriwebinar', link_webinar = '$link' where id_webinar='$idwebinar'");

    if ($queryupdate) {
        header('location:data_webinar.php');
    } else {
        header('location:data_webinar.php');
    }
}

//Hapus data webinar
if (isset($_POST['hapuswebinar'])) {
    $idwebinar = $_POST['idwebinar'];
    $judulwebinar = $_POST['judulwebinar'];
    $tglwebinar = $_POST['tglwebinar'];
    $waktuwebinar = $_POST['waktuwebinar'];
    $pemateriwebinar = $_POST['pemateri'];

    $querydelete = mysqli_query($conn, "delete from data_webinar where id_webinar = '$idwebinar'");

    if ($querydelete) {
        header('location:data_webinar.php');
    } else {
        header('location:data_webinar.php');
    }
}
