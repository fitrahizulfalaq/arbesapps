<main id="main">

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

    <section class="inner-page">
      <div class="container">
        <h2>Cari tahu tingkat keamanan wilayah sebelum berpergian</h2><br><br>
        <form action="<?= base_url('maps/cek/')?>" method="post" class="">
          <div class="mb-3">
            <div><?php $this->view('message'); ?></div>
          </div>          
          <div class="form-group">
            <h5 for="name">Kamu Berangkat Dari</h5>
            <select name="asal" class="form-control select2" required id="asal">
              <option>Kelurahan Asal : </option>
              <?php
                foreach ($this->fungsi->pilihan("tb_kelurahan")->result() as $key => $pilihan) {;
              ?>
              <option value="<?= $pilihan->kode?>"><?= $pilihan->deskripsi?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <h5 for="name">Mau Ke</h5>
            <select name="tujuan" class="form-control select2" required id="tujuan">
              <option>Kelurahan Tujuan : </option>
              <?php
                foreach ($this->fungsi->pilihan("tb_kelurahan")->result() as $key => $pilihan) {;
              ?>
              <option value="<?= $pilihan->kode?>"><?= $pilihan->deskripsi?></option>
              <?php }?>
            </select>
          </div>          
          <div class="text-center">
            <a href="<?= base_url('maps/zones_form')?>" class="btn btn-primary btn-sm">Tannyakan</a>
          </div>
        </form>
        <hr>
        
      </div> 
    </section>

  </main><!-- End #main -->
