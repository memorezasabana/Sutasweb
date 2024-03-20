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

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Daftar Akun</h2>
                <p>Daftar Akun dan Segera Laporkan Bencana di Tempat Anda</p>
            </div>

            <div class="row gx-0 gy-4">

                <div class="col-lg-8">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">

                    </div>

                </div>

                <div class="col-lg-4">
                    <form action="../backend/register.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        <div class="form-group mt-3 mb-3">
                            <label class="mb-1" for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Lorem Ipsum" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-1" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="lorem@gmail.com" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-1" for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="lorem" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-1" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="********" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-1" for="password-retype">Konfirmasi Password</label>
                            <input type="password-retype" class="form-control" name="password-retype" id="password-retype" placeholder="********" required>
                        </div>

                        <div class="text-center"><button type="submit">Daftar</button></div>
                    </form>
                </div>
            </div>

        </div>
    </section>

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