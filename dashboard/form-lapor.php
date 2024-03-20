<?php
include "../config/connection.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sutas | Surabaya Tanggap Selamat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

<body>

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="../index.php" class="logo d-flex align-items-center">
        <h1>Sutas<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php#beranda">Beranda</a></li>
          <li><a href="user-home.php">Dashboard</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">
    <section id="report" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Laporkan Bencana</h2>
          <p>Segera Laporkan Bencana di Tempat Anda</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi:</h4>
                  <p>Jl. Jemursari Tim. II No.2, Jemur Wonosari, Kec. Wonocolo, Surabaya, Jawa Timur 60237</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>memoreza@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Hotline:</h4>
                  <p>+62 85156557893</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Jam Kerja:</h4>
                  <p>24 Jam</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="../backend/report.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="form-group mt-3">
                <?php
                $query = "SELECT * FROM types";
                $result = mysqli_query($connection, $query);

                if (mysqli_num_rows($result) > 0) {
                  echo '<div class="form-group mt-3">
                  <select class="form-control" name="title" id="title" required>
                  <option value="">Pilih jenis bencana</option>';

                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                  }

                  echo '</select></div>';
                } else {
                  echo '<p>No types found</p>';
                }
                ?>

              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="description" rows="7" placeholder="Description" required></textarea>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="latitude" id="latitude" placeholder="Latitude" required>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="longitude" id="longitude" placeholder="Longitude" required>
              </div>
              <div class="form-group mt-3">
                <input type="file" class="form-control" name="image" id="image" required>
              </div>

              <div class="text-center"><button type="submit">Kirim Laporan</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>