<?php
require_once "koneksi.php";

$idWebinar = $_POST['id_webinar'];
$judulWebinar = "webinar Title"; 
$namaPeserta = $_POST['nama'];
$emailPeserta = $_POST['email'];

$sertifikatHTML = "

$sql = insert into daftar_peserta.php (id_webinar, nama_Peserta, email_peserta) VALUES ($idwebinar, '$namaPeserta', '$emailPeserta')";
if (mysqli_query($conn, $sql)) {
    echo "data pendaftar berhasil disimpan.";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sconn);
}

<!DOCTYPE</html>
<html lang='en'
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Sertifikat webinar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 800px;
            margin: 50px auto;
        }
        .text-center {
            text-align: center;
        }
        .certificate {
            border: 2px solid #000;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Sertifikat Webinar</h1>
    <p>Ini adalah sertifikat untuk peserta dengan detail sebagai berikut:</p>
    <p>Nama: $namaPeserta</p>
    <p>Email : $EmailPeserta</P>
    <p>Judul Webinar : $judulWebinar</P>
    <!-- Tambahkan elemen lain sesuai kebutuhan -->
</body>
</html>
";

echo $sertifikatHTML;
?>

<script>
    function cetakSertifikat (idWebinar) {
        $.ajax({
            url: 'generate_Certificate.php',
            type: 'POST',
            data: {id_webinar: idWebinar, nama: $('#nama').val()},
            success: funcation(respons) {
                var mywindow = window.open('', 'PRINT','height=400,width=600');
                mywindow.document.write('<html><head><title><Sertifikat</title');
                mywindow.document.write('</head><body>');
                mywindow.document.write(response);
                mywindow.document.write('</body></html>';
            )
            }
        })
    }
</script>
