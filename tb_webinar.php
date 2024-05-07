<?php
include("koneksi.php");

$ambilsemuadatawebinar = mysqli_query($conn, "select * from data_webinar");
while ($data = mysqli_fetch_array($ambilsemuadatawebinar)) {
    $idwebinar = $data['id_webinar'];
    $judulwebinar = $data['judul_webinar'];
    $tglwebinar = $data['tgl_webinar'];
    $waktuwebinar = $data['waktu_webinar'];
    $pemateriwebinar = $data['pemateri'];
    $linkwebinar = $data['link_webinar'];
}
