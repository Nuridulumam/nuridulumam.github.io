<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- offline CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if ($_SESSION['id_pemilih'] == "") {
		header("location:login.php?pesan=gagal");
	}

	?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="https://cdn.iconscout.com/icon/free/png-512/election-box-2-1168303.png" width="30" height="30" class="d-inline-block align-top" alt="brand-logo">
          Kahim HIMATIF 2021
        </a>
          <button class="btn btn-danger btn-outline-white" type="button" onclick="window.location.href='keluar.php';">Keluar</button>
        </div>
      </nav>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 mt-5">
            <div class="card text-center">
              <div class="card-header">Hai! <?= $_SESSION['nama_lengkap']; ?></div>
              <div class="card-body">
                <h5 class="card-title">Pemilihan Calon Ketua HIMATIF 2021</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary" onclick="window.location.href='vote-page.php';">VOTE!</a>
              </div>
              <div class="card-footer text-muted">ID <?= $_SESSION['id_pemilih']; ?></div>
            </div>
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <script src="js/bootstrap.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>