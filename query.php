<?php
include("koneksi.php");
mysqli_select_db($conn, "tubes");
$query1 = mysqli_query($conn, "SELECT * FROM data_webinar");
$query2 = mysqli_query($conn, "SELECT * FROM data_peserta");
