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
          <div class="row">
            <?php
              $no = 1;
              foreach ($row->result() as $key => $data) {;
            ?>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 text-center" data-aos="zoom-in">
              <div class="icon-box icon-box-pink">
                <a href="<?= base_url('materi/view/pertemuan/'.$pertemuan_id.'/view_files/'.$data->id)?>">
                  <div class="icon"><i class="bx bxs-book"></i></div>
                  <h4 class="title"><?= $data->judul ?></h4>
                </a>
              </div>
            </div>
            <?php }?>
          </div>
          <hr>
          <h3>Pertanyaan :</h3>
          <?php $this->view('message') ?>
          <div class="card-body">
            <div class="post clearfix">
              <div class="user-block">
              <h5> Materi : </h5> 
              <?= form_open("materi/addPertanyaan")?>
                <div class="input-group input-group-sm mb-2">
                  <input type="hidden" name="pertemuan_id" value="<?= $pertemuan_id ?>">
                  <input class="form-control form-control-sm" name="nama" placeholder="Ex: Fitrah Izul Falaq" required>
                </div>
                <div class="input-group input-group-sm mb-2">
                  <input type="hidden" name="materi_id" value="">
                  <input class="form-control form-control-sm" name="nim" placeholder="NIM" required>
                </div>
                <div class="input-group input-group-sm mb-3">
                  <input class="form-control form-control-sm" name="pertanyaan" placeholder="Pertanyaan" required>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" required>
                  <label class="form-check-label" for="exampleCheck1">Benar ingin bertanya</label>
                </div>
                <div class="input-group-append">
                  <button type="submit" class="btn btn-sm btn-success">Tanyakan</button>
                </div>
              <?= form_close() ?>
            </div>
          </div>
          <!-- Tabel       -->
          <hr>
          <div class="table-responsive"><table class="table table-bordered table-striped" id="list"><thead><tr><th>Komentar</th></tr></thead><tbody>
          <!-- Komentar           -->

          <div class="card-body">
            <?php
              $no = 1;
              foreach ($xtanya->result() as $key => $data) {;
            ?>
            <tr><td>
            <div class="card card-primary collapsed-card">
              <div class="card-body">
                <img class="img-circle img-bordered-sm" src="<?= base_url()?>assets/img/materi.png" alt="User Image" style="width: 30px; height: 30px"> | <?= $data->nama ?> <small><?= $data->nim?></small>
                <br>
                <?= $data->pertanyaan ?>
              <hr>
                <b>Jawaban Admin : </b><br>
                <?= $data->jawaban ?>
              </div>
            </div>
            </td></tr>
            <?php } ?>
            </tbody></table></div>

          </div>
          <!-- Komentar           -->
      </div>
    </div>

  </div>
</section><!-- End Services Section