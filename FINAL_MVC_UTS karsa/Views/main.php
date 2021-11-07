<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>APLIKASI PEMBAYARAN</title>
  </head>
  <body>
    <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #D4AC0D;">
        <div class="container">
            <a class="navbar-brand" href="#">Karsatria Ramadhani</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contact</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <div class="container-fluid">
            <?php
                if (isset($_GET['menu'])) {
                    $id = base64_decode($_GET['menu']);
                } else {
                    $id = "";
                }

                if ($id == 'kelas') {
                    include('View_kelas.php');
                }
                elseif ($id == 'po_kelas') {
                    include('View_post_kelas.php');
                }
                elseif ($id == 'pu_kelas') {
                    include('View_put_kelas.php');
                }
                elseif ($id == 'siswa') {
                    include('View_siswa.php');
                }
                elseif ($id == 'pu_siswa') {
                    include('View_put_siswa.php');
                }
                elseif ($id == 'po_siswa') {
                    include('View_post_siswa.php');
                }
                elseif ($id == 'spp') {
                    include('View_spp.php');
                }
                elseif ($id == 'po_spp') {
                    include('View_post_spp.php');
                }
                elseif ($id == 'pu_spp') {
                    include('View_put_spp.php');
                }
                elseif ($id == 'petugas') {
                    include('View_petugas.php');
                }
                elseif ($id == 'po_petugas') {
                    include('View_post_petugas.php');
                }
                elseif ($id == 'pu_petugas') {
                    include('View_put_petugas.php');
                }
                elseif ($id == 'pembayaran') {
                    include('View_pembayaran.php');
                }
                elseif ($id == 'po_pembayaran') {
                    include('View_post_pembayaran.php');
                }
                elseif ($id == 'pu_pembayaran') {
                    include('View_put_pembayaran.php');
                }
                else {
                    include('home.php');
                }
            ?>
        </div>
        









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>