<?php
require 'dbconnect.php';

if (!isset($_SESSION['login'])) {
  header('location: login.php');
} else {
}

$updateid = $_GET['updateid'];

if (isset($_POST['updatedata'])) {
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];

  // insert in table mahasiswa
  $result = mysqli_query($conn, "update produk set nama='$nama', harga='$harga', gambar='$gambar' where id='$updateid'");
  if ($inserttodata) {
    $success = true;
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Admin - Fake Shoes</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Flaticon Font -->
  <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- Navbar Start -->
  <div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <a href="index.php" class="navbar-brand font-weight-bold text-secondary" style="font-size: 30px">
        <span class="text-primary">Fake Shoes</span>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a style="font-size: 30px" href="index.php" class="nav-item nav-link"></a>
        </div>
        <a href="logout.php" class="btn btn-primary px-4">Logout</a>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <h2 id="title">Update Data Produk</h2>
  </div>
  <!-- Header End -->
  <!-- form start -->
  <div class="container form-mahasiswa">
    <?php if (isset($success)) : ?>
      <h2>
        <div class="alert alert-success">
          <strong>update success !</strong> add data produk.
        </div>
      </h2>
      <?php sleep(2);
      header('location: index.php') ?>
    <?php endif ?>

    <?php $getdataupdate = mysqli_query($conn, "select * from produk where id='$updateid'");
    $get = mysqli_fetch_array($getdataupdate) ?>
    <form action="" method="post">
      <label class="mt-4" for="nama">Nama</label>
      <input type="text" name="nama" value="<?= $get['nama'] ?>" id="nama" class="form-control">
      <label class="mt-4" for="harga">Harga</label>
      <input type="text" name="harga" value="<?= $get['harga'] ?>" id="harga" class="form-control">
      <label class="mt-4" for="gambar">Gambar</label>
      <input type="file" name="gambar" value="<?= $get['gambar'] ?>" id="gambar" class="form-control"  width='70' height='90'>

      <button class="mt-5 btn btn-outline-success" type="submit" name="updatedata" id="add">Update Produk</button>
    </form>
  </div>
  <!-- form end -->



  <!-- Footer Start -->
  <h4 class="text-center mt-5">you are logged in as <?= $_SESSION['username'] ?></h4>
  <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
      <p class="m-0 text-center text-white">
        &copy;
        All Rights Reserved.

        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Create by
        <a class="text-primary font-weight-bold" href="https://www.instagram.com/ksalman09/">Kassalman Muhammad</a>
      </p>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>