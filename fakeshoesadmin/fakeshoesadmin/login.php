<?php
require 'dbconnect.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $pass = $_POST['password'];

  $checklogin = mysqli_query($conn, "SELECT * FROM admin");
  $data = mysqli_fetch_array($checklogin);


  if ($username == $data['username'] && $pass == $data['password']) {
    $_SESSION['login'] = 'true';
    $_SESSION['username'] = $username;
    header('location: index.php');
  } else {
    header('location: login.php');
  }
}

if (isset($_SESSION['login'])) {
  header('location: index.php');
} else {
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
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a style="font-size: 30px" href="index.php" class="nav-item nav-link">Login</a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <h2 id="title">Admin | Fake Shoes</h2>
  </div>

  <div class="login">
    <h1>Selamat Datang</h1>
    <form action="" method="post">

      <label class="text-white" for="username">Username</label>
      <input class="form-control" id="username" type="text" name="username" placeholder="username" require>
      <br>
      <label class="text-white" for="password">Password</label>
      <input class="form-control" id="password" type="password" placeholder="password" name="password" require>
      <br><br>
      <button type="submit" class="btn btn-success rounded" name="login">Login</button>
    </form>
  </div>

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