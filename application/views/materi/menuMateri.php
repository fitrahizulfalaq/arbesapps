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
          <?= form_open('materi/alihkan')?>
          <div class="form-group">
            <select name="pertemuan_id" class="form-control" required>
              <option value="">Pilih : </option>
              <?php
                foreach ($this->fungsi->pilihan("tb_pertemuan")->result() as $key => $pilihan) {;
              ?>
              <option value="<?= $pilihan->id?>"><?= $pilihan->deskripsi?></option>
              <?php }?>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-secondary btn-sm">Lihat</button>
          </div>
          <?= form_close() ?>
      </div>
  </div>
</section><!-- End Services Section -->