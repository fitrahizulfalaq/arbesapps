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
        <h2>Cari tahu tingkat keamanan wilayah yang kamu butuhkan</h2><br><br>
        <form action="<?= base_url('maps/cek_zones/')?>" method="post" class="">
          <div class="mb-3">
            <div><?php $this->view('message'); ?></div>
          </div>          
          <div class="form-group">
            <h5 for="name">Kelurahan</h5>
            <select name="kelurahan" class="form-control select2" required id="kelurahan">
              <option>Kelurahan : </option>
              <?php
                foreach ($this->fungsi->pilihan("tb_kelurahan")->result() as $key => $pilihan) {;
              ?>
              <option value="<?= $pilihan->id?>"><?= $pilihan->deskripsi?></option>
              <?php }?>
            </select>
          </div>                    
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Cek</button>
            <a href="<?= base_url('')?>" class="btn btn-danger">Kembali</a>
          </div>
          <br>
          <div class="text-center">
            <a href="<?= base_url('maps')?>" class="btn btn-secondary btn-sm">Cek Maps Perjalanan</a>
          </div>
        </form>
      </div> 
    </section>

  </main><!-- End #main -->
