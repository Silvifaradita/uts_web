<?php
require 'function.php';
// require 'cek.php';
include("koneksi.php");
include("tb_webinar.php");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <title>Form Pendaftaran</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Webinar App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_admin.php">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <?php
    $ambilsemuadatawebinar = mysqli_query($conn, "select * from data_webinar");
    $i = 1;
    while ($data = mysqli_fetch_array($ambilsemuadatawebinar)) {
        $idwebinar = $data['id_webinar'];
        $judulwebinar = $data['judul_webinar'];
        $tglwebinar = $data['tgl_webinar'];
        $waktuwebinar = $data['waktu_webinar'];
        $pemateriwebinar = $data['pemateri'];

    ?>
        <!--Section-->
        <main>
            <div class="container-fluid mt-4">
                <ol class="breadcrumb mb-4">
                    <h4 class="breadcrumb-item active">EVENT YANG AKAN DATANG</h4>
                </ol>
                <div class="row">
                    <div class="col-xl-12 col-md-6">
                        <div class="card px-5 py-5" id="form1">
                            <h4 style="text-align: center;"><?= $judulwebinar; ?></h4>
                            <table align="center">
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg>
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> <?= $tglwebinar; ?> </td>
                                </tr>
                                <br>
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> <?= $waktuwebinar; ?> </td>
                                </tr>
                                <br>
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg></td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> <?= $pemateriwebinar; ?> </td>
                                </tr>
                            </table>
                            <br>
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar<?= $idwebinar; ?>">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    >?

    <?php }; ?>

    <div class="modal fade" id="daftar<?= $idwebinar; ?>">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title">Daftar Webinar</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="post" action="save_daftar.php">
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <label for="nama"><b>Nama</b></label>
                        <input type="text" name="nama" placeholder="Input Nama" class="form-control" required>
                        <br>
                        <label for="email"><b>Email</b></label>
                        <input type="email" name="email" placeholder="Input Email" class="form-control" required>
                        <br>

                        <label for="jkel"><b>Jenis Kelamin</b></label>
                        <br>
                        <input type="radio" name="jkel" value="Laki-laki" /> Laki-laki
                        <input type="radio" name="jkel" value="Perempuan" /> Perempuan
                        <br>
                        <br>

                        <label for="instansi"><b>Instansi</b></label>
                        <input type="text" name="instansi" placeholder="Input nama Instansi" class="form-control" required>
                        <br>

                        <label for="judulwebinar"><b>Judul Webinar</b></label>
                        <input type="text" name="judulwebinar" value="<?= $judulwebinar; ?>" class="form-control" readonly>
                        <br>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php
    $ambilsemuadatawebinar = mysqli_query($conn, "select * from data_webinar");
    $i = 1;
    while ($data = mysqli_fetch_array($ambilsemuadatawebinar)) {
        $idwebinar = $data['id_webinar'];
        $judulwebinar = $data['judul_webinar'];
        $tglwebinar = $data['tgl_webinar'];
        $waktuwebinar = $data['waktu_webinar'];
        $pemateriwebinar = $data['pemateri'];

    ?>
    
    <main>
            <div class="container-fluid mt-4">
                <ol class="breadcrumb mb-4">
                    <h4 class="breadcrumb-item active">Cetak Sertifikat</h4>
                </ol>
                <div class="row">
                    <div class="col-xl-12 col-md-6">
                        <div class="card px-5 py-5" id="form1">
                            <h4 style="text-align: center;"><?= $judulwebinar; ?></h4>
                            <table align="center">
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg>
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> <?= $tglwebinar; ?> </td>
                                </tr>
                                <br>
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> <?= $waktuwebinar; ?> </td>
                                </tr>
                                <br>
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg></td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> <?= $pemateriwebinar; ?> </td>
                                </tr>
                            </table>
                            <br>
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cetak<?= $idwebinar; ?>">cetak</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?
        
        <?php }; ?>
        <div class="modal fade" id="daftar<?= $idwebinar; ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">cetakSertifikat</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post" action="save_daftar.php">
                <div class="modal-body">
                    <input type="hidden" name="id">
                    <label for="nama"><b>Nama</b></label>
                    <input type="text" name="nama" placeholder="Input Nama" class="form-control" required>
                    <br>
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" placeholder="Input Email" class="form-control" required>
                    <br>

                    <label for="jkel"><b>Jenis Kelamin</b></label>
                    <br>
                    <input type="radio" name="jkel" value="Laki-laki" /> Laki-laki
                    <input type="radio" name="jkel" value="Perempuan" /> Perempuan
                    <br>
                    <br>

                    <label for="instansi"><b>Instansi</b></label>
                    <input type="text" name="instansi" placeholder="Input nama Instansi" class="form-control" required>
                    <br>

                    <label for="judulwebinar"><b>Judul Webinar</b></label>
                    <input type="text" name="judulwebinar" value="<?= $judulwebinar; ?>" class="form-control" readonly>
                    <br>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>

        </div>
    </div>
</div>
            


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>

