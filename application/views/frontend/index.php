<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Sistem Pemetaan Industri Usaha Kecil & Menengah</h1>
        <h2>Kabupaten Pekalongan</h2>
        <div class="d-lg-flex">
          <a href="#maps" class="btn-get-started scrollto">Mulai</a>
          <a href="https://www.youtube.com/watch?v=9S_wtIt1G3M" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="<?= base_url('assets/frontend/'); ?>assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= Cliens Section ======= -->
  <section id="cliens" class="cliens section-bg">
    <div class="container">

      <div class="row">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="<?= base_url('assets/frontend/'); ?>assets/img/clients/kab.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-10 col-md-10 col-10 d-flex align-items-center justify-content-center">
          <i style="font-size: 40px;">DISPERINDAGKOP & UKM KABUPATEN PEKALONGAN</i>
        </div>


      </div>

    </div>
  </section><!-- End Cliens Section -->

  <!-- ======= Contact Section ======= -->
  <section id="maps" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Maps Industri</h2>
      </div>

      <div class="row">

        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="info">
            <div id="map-container-google-11" class="z-depth-1-half map-container-6">
              <div id="map-canvas" style="height: 400px;"></div>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe> -->
            </div><br>

            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Lokasi:</h4>
              <p>Jl Krakatau 51161, Kecamatan Kajen,Kabupaten Pekalongan</p>
            </div>

            <!-- <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>disperindagkabpkl@gmail.com</p>
            </div> -->
          </div>

        </div>

        <div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-header blue accent-1">
              <h4>Cari Berdasarkan:</h4>
            </div><br>
            <div class="form-group">
              <label for="name"><i class="icofont-google-map"></i> Kecamatan</label>
              <select class="browser-default custom-select" name="kecamatan" id="kecamatan">
                <option selected>-- Kecamatan --</option>
                <?php foreach ($setKecamatan as $sk) : ?>
                  <option value="<?= $sk['nama_kecamatan']; ?>"> <?= $sk['nama_kecamatan']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="name"><i class="icofont-cart-alt"></i> Jenis Produk</label>
              <select class="browser-default custom-select" name="jenis" id="jenis">
                <option selected>-- Jenis --</option>
                <?php foreach ($setJenis as $sj) : ?>
                  <option value="<?= $sj['jenis_industri']; ?>"> <?= $sj['jenis_industri']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <hr>
            <h4>Legenda</h4>
            <div class="form-group">
              <img class="col-2" src="assets/img/icons/1.png"> Kue Basah <br>
              <img class="col-2" src="assets/img/icons/2.png"> Kue Kering <br>
              <img class="col-2" src="assets/img/icons/3.png"> Keripik <br>
              <img class="col-2" src="assets/img/icons/4.png"> Lopis <br>
              <img class="col-2" src="assets/img/icons/5.png"> peyek <br>
            </div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="services" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Bantuan ?</h2>
        <p>Cara menggunakan website inGIS untuk melihat pemetaan industri UKM Kabupaten Pekalongan</p>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <img src="assets/img/features-1.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4" data-aos="fade-left">
          <h3><b>1)</b> Akses laraproject.my.id </h3>
          <p class="font-italic">
            Ketika <b>laraproject.my.id</b> menggunakan Laptop atau Smartphone pada browser anda.
          </p>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/features-2.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <h3><b>2)</b> Pilih Menu MAPS</h3>
          <p class="font-italic">
            Klik menu MAP pada bagian navbar atas. Maka anda akan diarahkan pada halaman MAP.
          </p>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <img src="assets/img/features-4.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5" data-aos="fade-left">
          <h3><b>3)</b> Cari Data Industri</h3>
          <p> Pada halaman map anda bisa memilih persebaran industri ukm berdasarkan :</p>
          <ul>
            <li><i class="icofont-check"></i> Wilayah Kecamatan</li>
            <li><i class="icofont-check"></i> Kategori UKM</li>
          </ul>
        </div>
      </div>


      </ul>
    </div>

    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>Bantuan Lebih Lanjut?</h3>
          <p> Silahkan hubungi nomer telpon atau email yang tertera pada bagian bawah website, atau kunjungi lokasi Disperindagkop & UKM Kabupaten Pekalongan</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#footer">Hubungi</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->


  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Tentang inGIS</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <img src="<?= base_url('assets/frontend/'); ?>assets/img/about.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <h3>Sistem Pemetaan Industri UKM Kabupaten Pekalongan</h3>
          <p>
            Merupakan Sistem Pemetaan berbasis grafis yang menggambarkan persebaran industri UKM yang ada di Kabupaten Pekalongan.
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> Mudah diakses oleh masyarakat</li>
            <li><i class="icofont-check-circled"></i> Data ditampilkan dalam bentuk maps</li>
            <li><i class="icofont-check-circled"></i> Sistem saling terhubung sehingga mudah dalam manajemen</li>
          </ul>
          <p>
            Sistem ini memudahkan para pegiat usaha mikro kecil, menengah, dan atas dalam memasarkan produk mereka dengan memanfaatkan kemudahan dalam mengakses internet.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up"><?= $industri ?></span>
          <p>Jumlah Industri</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up"><?= $petugas ?></span>
          <p>Petugas Pendataan</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up"><?= $kecamatan ?></span>
          <p>Kecamatan</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up"><?= $jenis ?></span>
          <p>Jenis Industri</p>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="galery" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Galeri Industri UKM</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">Semua</li>
        <li data-filter=".filter-app">Kue Basah</li>
        <li data-filter=".filter-card">Kue Kering</li>
        <li data-filter=".filter-web">Keripik</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>App</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Card 2</h4>
            <p>Card</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Card 1</h4>
            <p>Card</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Card 3</h4>
            <p>Card</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="<?= base_url('assets/frontend/'); ?>assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->