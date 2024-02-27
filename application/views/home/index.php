<!-- ======= Hero Section ======= -->
<!-- End Hero -->

<main id="main">

<section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Dashboard</h2>
                <ol>
                    <li><a href="<?= base_url() ?>auth/level">Login</a></li>
                    <li><a href="<?= base_url() ?>/home/order">Our Menu</a></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>TENTANG <?= $nama_usaha ?></h2>
      </div>

      <div class="row content">
        <div class="col-md-15 pt-4 pt-lg-6">
          <p class="text-center">
            <?= $deskripsi ?>
          </p><br>
        </div>
      </div>

    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <h2>Informasi <?= $nama_usaha ?></h2>
        <p>Selamat Datang di Restoran kami</p>
      </div>

      <div class="row content">
        <div class="col-lg-15 pt-4 pt-lg-0">
          <p class="text-center">
            Informasi Mengenai <?= $nama_usaha ?>
          </p>
          <p class="text-center">
            <i class="ri-check-double-line"></i>Alamat : <?= $alamat ?><br>
            <i class="ri-check-double-line"></i>No Telepon : <?= $nomor_telepon ?>
</p>
        </div>
      </div>
    </div>
  </section><!-- End My & Family Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">
      <div class="section-title">
        <h2>PELAYANAN ONLINE</h2>

      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 icon-box">
          <div class="icon"><i class="bi bi-laptop"></i></div>
          <h4 class="title"><a href="">Pemesanan</a></h4>
          <p class="description">Layanan pemesanan meja dan menu secara online bisa anda lakukan dari rumah.</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box">
          <div class="icon"><i class="bi bi-bar-chart"></i></div>
          <h4 class="title"><a href="">Pembayaran</a></h4>
          <p class="description">Pembayaran dapat dibayar melalui E-Money atau tranfer antar bank.</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box">
          <div class="icon"><i class="bi bi-hand-thumbs-up"></i></div>
          <h4 class="title"><a href="">Easy to Use</a></h4>
          <p class="description">Anda dapat memesan dan melihat tentang profil kami secara mudah dan cepat.</p>
        </div>

      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Recent Photos Section ======= -->
  <section id="recent-photos" class="recent-photos">
    <div class="container">

      <div class="section-title">
        <h2>MENU SPESIAL</h2>
        <p>Menyediakan menu makanan dan minuman yang berkualitas, siapapun kini bisa berwisata kuliner hanya dengan mengunjungi restoran kami. Semua yang anda cari ada disini!</p>
      </div>

      <div class="recent-photos-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
          <?php
          foreach ($gambar_menu as $m) {
            // $id_menu = $m['id_menu'];
          ?>
            <div class="swiper-slide" style="height: 100px;"><a href="<?php echo base_url('assets/dataresto/menu/' . $m['gambar']) ?>" class="glightbox"><img src="<?php echo base_url('assets/dataresto/menu/' . $m['gambar']) ?>" style="object-fit: cover;" class="img-fluid" alt=""></a></div>

          <?php
          }
          ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Recent Photos Section -->

</main><!-- End #main -->