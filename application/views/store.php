<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css') ?>/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">

    <!-- Custom styles for this template -->
    <!-- <link href="css/business-casual.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css') ?>/business-casual.min.css">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-lower">KOMENTAR</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo site_url('awal/saya'); ?>">rizsa el akbar
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo site_url('awal/tentang'); ?>">Kegiatan</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo site_url('awal/produk'); ?>">Galeri</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo site_url('awal/toko'); ?>">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta">
    <form role="form" action="<?php echo base_url(); ?>awal/toko" method="post" enctype="multipart/form-data">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <center>
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Kolom</span>
                <span class="section-heading-lower">Komentar</span>
              </h2>
              <textarea name="komen" rows="8" cols="80" placeholder="Tulis.."></textarea>
              <br><br>
              <div class="tombol">
                    <button type="submit" class="btn btn-primary">INPUT DATA</button>
                </div>
                <?php
                $datanya = $this->session->komentar;
                if(isset($data)){
                ?>
                <p class="address mb-5">
                  <em>
                    <strong>Komentar Anda</strong>
                    <br>
                  </em>
                </p>
                <?php

                echo $data;

              }elseif((isset($datanya))){?>
                <p class="address mb-5">
                  <em>
                    <strong>Komentar Anda</strong>
                    <br>
                  </em>
                </p>
                <?php

                echo $datanya;}
                else {
                }
                ?>


                <!-- <p class="address mb-5">
                  <em>
                    <strong>1116 Orchard Street</strong>
                    <br>
                    Golden Valley, Minnesota
                  </em>
                </p>              -->

            </center>

          </div>

        </div>

      </div>

      </form>
    </section>



    <!-- <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo base_url('assets/img/bg.jpg'); ?>" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Ikon kota palu</span>
                  <span class="section-heading-lower">Ponulele</span>
                </h2>
                <p>Jembatan Ponulele atau yang dikenal dengan Jembatan IV Palu sendiri merupakan ikon wisata di Kota Palu.

Peresmiannya dilakukan pada oleh Presiden Susilo Bambang Yudhoyono bulan Mei tahun 2006.

Ini merupakan jembatan lengkung pertama yang dibangun di Indonesia.

</p>
                <p class="mb-0">Jembatan Ponulele membentang di atas Talise serta menghubungkan Palu Timur dan Palu Barat.

Panjangnya mencapai 250 meter.

Kehadiran jembatan ini membuat Kota Palu menjadi lebih berwarna.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; rizsaelakbar.com 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <script src="<?php echo base_url('assets/vendor/jquery') ?>/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js') ?>/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
