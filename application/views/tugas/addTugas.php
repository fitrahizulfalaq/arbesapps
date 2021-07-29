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
          <h3>Kirim Assessment :</h3>
          <div class="card-body">
            <div class="post clearfix">
              <?php $this->view('message') ?>
              <?= form_open_multipart('')?>
              <div class="user-block">
              <h5> Materi : </h5> 
                <div class="form-group">
                  <select name="pertemuan_id" class="form-control" required>
                    <option value="<?= set_value('pertemuan_id'); ?>">Pilih : <?= set_value('pertemuan_id'); ?></option>
                    <?php
                      foreach ($this->fungsi->pilihan("tb_pertemuan")->result() as $key => $pilihan) {;
                    ?>
                    <option value="<?= $pilihan->id?>"><?= $pilihan->deskripsi?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="input-group mb-2">
                  <input type="text" class="form-control" name="nama" placeholder="Ex: Fitrah Izul Falaq" minlength="10" maxlength="50" value="<?= set_value('nama'); ?>" required>
                </div>
                <div class="input-group input-group-sm mb-2">
                  <input type="text" class="form-control" name="nim" placeholder="Ex: 160121600260" minlength="10" maxlength="50" value="<?= set_value('nim'); ?>" required>
                </div>
                <div class="input-group input-group-sm mb-3">
                  <input class="form-control" type="file" name="file" accept=".pdf" required><br>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" required>
                  <label class="form-check-label" for="exampleCheck1">Pastikan tugas kamu sudah benar</label>
                </div>
                <div class="input-group-append">
                  <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
              <?= form_close() ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->