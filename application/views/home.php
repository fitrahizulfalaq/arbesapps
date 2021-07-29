<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
          <h1>Lebih Mudah Belajar Sejarah di Masa Pandemi Covid-19</h1>
          <h2>ARBES Apps Hadir sebagai Solusi Lebih praktis, lebih canggih, dan lebih lengkap</h2>
          <a href="<?= base_url("materi")?>" class="btn-get-started scrollto">Mulai Sekarang</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="<?= base_url()?>/assets/img/hero-img.png" style="width: 300px;" class="img-fluid" alt="Logo Aplikasi">
      </div>
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
          <img src="<?= base_url()?>/assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
          <div class="content pt-4 pt-lg-0">
            <h3>ARBES Apps sebagai inovasi belajar sejarah. </h3>
            <p class="font-italic">
              ARBES Apps hadir sebagai inovasi untuk memberikan kemudahan dalam belajar sejarah. Kehadiran Arbes.Com semakin mempermudah dan memfasilitas mahasiswa dalam belajar Matakuliah Indonesia Pasca Kemerdekaan
            </p>              
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Features Section ======= -->
  <section id="prosedur" class="features">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
          <h3>Fitur Utama Arbes</h3>
          <p>Berikut fitur utama yang dapat kamu manfaatkan dari ARBES Apps</p>
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item" data-aos="fade-up">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                <h4>1. Materi Ajar</h4>
                <p>Kemudahan mengakses materi perkuliahan berupa artikel mulai dari pertemuan ke-1 sampai pertemuan ke-16</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
              <a class="nav-link" data-toggle="tab" href="#tab-2">
                <h4>2. Kolom Interaktif</h4>
                <p>Ketersediaan kolom komentar di Menu Materi Ajar untuk proses pembelajaran daring yang lebih interaktif</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
              <a class="nav-link" data-toggle="tab" href="#tab-3">
                <h4>3. Assessment</h4>
                <p>Kemudahan dalam mengumpulkan tugas setiap pertemuan dengan lebih terorganisir</p>
              </a>
            </li>              
          </ul>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <figure>
                <img src="<?= base_url()?>/assets/img/features-1.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-2">
              <figure>
                <img src="<?= base_url()?>/assets/img/features-2.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-3">
              <figure>
                <img src="<?= base_url()?>/assets/img/assessment.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-4">
              <figure>
                <img src="<?= base_url()?>/assets/img/features-4.png" alt="" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <!-- <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>3 FITUR UTAMA E-CODRIVE</h2>
        <p>Berikut Ada 3 Jenis Fitur Utama yang Dapat Anda Peroleh. Silahkan klik aja fitur yang anda butuhkan.</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="<?= base_url('checker')?>">Self Checker</a></h4>
            <p class="description">Kamu bisa cari tahu status kesehatanmu menggunakan menu ini. Tinggal jawab pertanyaannya aja, secara otomatis sistem akan menjelaskan kamu aman berkendara atau tidak.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box icon-box-cyan">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="<?= base_url('starter')?>">Starter Pack</a></h4>
            <p class="description">Buat kamu yang gak tau apa aja yang dibutuhkan agar aman berkendara di tengah COVID-19, gunakan aja fitur ini. Pasti aman pool digunakan.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box icon-box-green">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="<?= base_url('maps')?>">Driving Maps Zone</a></h4>
            <p class="description">Ingin berpergian? Takut Zona Merah? Gak tau apa yang harus disiapkan? Tentang aja, kamu tinggal tentukan asal dan tujuanmu, secara ajaib akan muncul maps zone yang hendak kamu tuju lengkap dengan tips nya.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box icon-box-blue">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="http://wa.me/+62<?= $this->fungsi->setting("hotline")->row("keterangan")?>">Call Center</a></h4>
            <p class="description">Jangan pernah takut sendirian menghadapi masa pandemi. Hubungi kami bila ada yang ingin ditanyakan. Selalu ada kapanpun dan dimanapun kamu butuhkan</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Services Section -->
</main><!-- End #main -->