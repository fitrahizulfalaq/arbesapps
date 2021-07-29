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
        <div>
          <a href="<?=base_url();?>/<?= $this->uri->segment('3') != null ? "maps" : 'maps/zones_form'?>" class="btn btn-info float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>
        </div>
        <h2><?= $judul?></h2>
        <hr>
        <h4>Rincian data Zona dapat dirincikan sebagai berikut</h4>
        <div class="table-responsive">
          <table id="example3" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="20%">Tanggal</th>
                <th width="40%">Suspek</th>
                <th width="40%">Positif</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($row->result() as $key => $data) {;
              ?>
              <tr>
                <td scope="row"><?= date('m / d / Y', strtotime($data->tgl))?></td>                                
                <td scope="row">
                    <b>Total : <?= $data->isolasi_rumah + $data->isolasi_rs + $data->discarded + $data->probable_meninggal + $data->probable_rs + $data->probable_rajal?></b> <br>
                    Isolasi Rumah : <?= $data->isolasi_rumah ?> <br>                
                    Isolasi RS : <?= $data->isolasi_rs ?> <br>                
                    Isolasi Discarded : <?= $data->discarded ?> <br>                
                    Probable Meninggal : <?= $data->probable_meninggal ?> <br>                
                    Probable RS : <?= $data->probable_rs ?> <br>                
                    Probable Rajal : <?= $data->probable_rajal ?> <br>                
                </td>
                <td scope="row">
                    <b>Total : <?= $data->odp + $data->sembuh + $data->meninggal ?></b> <br>
                    ODP : <?= $data->odp ?> <br>                
                    Sembuh : <?= $data->sembuh ?> <br>                
                    Meninggal : <?= $data->meninggal ?> <br>                
                </td>                                
              </tr>
              <?php }?>
            </tbody>
          </table>
          </div>        
      </div>
    </section>

  </main><!-- End #main -->