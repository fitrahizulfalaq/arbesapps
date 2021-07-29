<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <ol>
      <li><a href="<?= base_url()?>">Home</a></li>
      <li><?= $menu ?></li>
    </ol>
    <h2><?= $judul ?></h2>
  </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 align-items-stretch mb-12 mb-lg-12" data-aos="zoom-in">
        <div class="icon-box icon-box-green text-left">
          <p align="left">
           Silahkan memilih pertemuan yang ingin diakses:
          </p>
          <div class="form-group">
            <select name="kelurahan" class="form-control" required id="kelurahan">
              <option value="">Pertemuan 1</option>
              <option value="">Pertemuan 2</option>
              <option value="">Pertemuan 3</option>
              <option value="">Pertemuan 4</option>
              <option value="">Pertemuan 5</option>
              <option value="">Pertemuan 6</option>
              <option value="">Pertemuan 7</option>
              <option value="">Pertemuan 8</option>
              <option value="">Pertemuan 9</option>
              <option value="">Pertemuan 10</option>
              <option value="">Pertemuan 11</option>
              <option value="">Pertemuan 12</option>
              <option value="">Pertemuan 13</option>
              <option value="">Pertemuan 14</option>
              <option value="">Pertemuan 15</option>
              <option value="">Pertemuan 16</option>
            </select>
          </div>
          <div class="text-center">
            <a href="<?= base_url('page/pertemuan_menu/')?>" class="btn btn-secondary btn-sm">Lihat</a>
          </div>
      </div>
  </div>
</section><!-- End Services Section -->