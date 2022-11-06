<?php
$koneksi = mysqli_connect("localhost", "root", "", "webdagang");

?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Rockstar clothing</title>
  <!-- Favicon-->
  <link rel="icon" href="foto/logos.png  " type="image/png" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">

      <a class="navbar-brand" href="./profil.php"> <img src="foto/rockstar logo.png" alt="" height="90px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">Profil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#!">All Products</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="kategori.php?kategori_file=12">hoodie</a>
              </li>
              <li>
                <a class="dropdown-item" href="kategori.php?kategori_file=13">kemeja</a>
              </li>
              <li>
                <a class="dropdown-item" href="kategori.php?kategori_file=14">baju</a>
              </li>
              <li>
                <a class="dropdown-item" href="kategori.php?kategori_file=14">sepatu</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <a href="admin/login/" class="btn btn-dark">LOGIN </a>
    </div>
  </nav>
  <!-- Header-->
  <header>
    <img style="height: 570px; " class="heroImage" src="foto/10.27.22-BLACKFRIDAY-MAINPAGE-DESKTOP_1512x.webp" alt="">
    <div class="container">
  <!-- Content here -->
</div>

  
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="foto/sepatu.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">sepatu</h5>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="sepatu.php">View</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->

            <!-- Product image-->
            <img class="card-img-top" src="foto/kaos no body.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">baju</h5>
                <!-- Product reviews-->
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="baju.php">View</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->

            <!-- Product image-->
            <img class="card-img-top" src="foto/kemeja.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">kemeja</h5>
                <!-- Product reviews-->
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="kemeja.php">View</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->

            <!-- Product image-->
            <img class="card-img-top" src="foto/hoodiepp.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">hoodie</h5>
                <!-- Product reviews-->
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="hoodie.php">View</a>
              </div>
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright hasya ovano putra 14</p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>