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
        <a href="<?=base_url("maps");?>" class="btn btn-info float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>
      </div>
      <div>
        <h2>Detail Pengecekan Safety Riding COVID-19 Zone</h2>
        <hr>          
        <h5>Untuk <font color="green"> meningkatkan keamanan anda, </font> hendaknya anda melewati jalur dengan status aman. Pastikan anda memakai protokol yang sesuai bila anda melawati zona dengan resiko. Untuk Starterpack nya, kamu bisa bisa cek <a href="<?= base_url('starter')?>">disini </a></h5>
      </div>
      <div class="table-responsive">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="70">Kelurahan</th>
              <th width="20">Status</th>
              <th width="10">#</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach ($row_zasal->result() as $key => $data) {;
            ?>
            <tr>
              <td scope="row"><?= $data->deskripsi?></td>
              <td scope="row">
                <?php if ($data->status == 1) { ?>
                  <span class="badge badge-success">Aman</span>
                <?php } elseif ($data->status == 2) { ?>
                  <span class="badge badge-info">Resiko Ringan</span>                    
                <?php } elseif ($data->status == 3) { ?>
                  <span class="badge badge-warning">Resiko Sedang</span>                    
                <?php } elseif ($data->status == 4) { ?>
                  <span class="badge badge-danger">Hati-hati</span>                    
                <?php } ?>
              </td>                
              <td>
                <a href="<?=base_url('maps/detail/'.$data->id)?>" class="btn btn-primary btn-sm">Detail</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
        </div>
        <div>
          <h3>Tips</h3>
          <p>Anda sangat disarankan untuk melintasi <b>zona hijau</b>. Pada zona hijau resiko terjadinya penularan virus COVID-19 sangat kecil dimana tidak ada kasus positif, penyebaran COVID-19 terkontrol, dan aktivitas umum dibuka normal dengan penerapan protokol keseharan ketat.<br />
          </p>
          <p>Anda disarankan untuk melintasi <b>zona kuning</b>. Pada zona kuning memiliki resiko ringan dengan penyebaran COVID-19 terkendali meskipun tetap ada terjadinya transmisi lokal, kluster penyebaran kasus juga terpantau dan tidak bertambah, serta aktivitas masyarakat berjalan dengan penerapan protokol kesehatan.</p>
          <p>Anda disarankan untuk melintasi <b>zona oranye</b> meskipun Anda diharapkan untuk mengurangi berkendara melalui wilayah ini. Pada zona oranye memiliki resiko sedang dengan tingkat penyebaran COVID-19 yang tinggi, potensi virus yang tidak terkendali, dan transmisi lokal terjadi dengan cepat. Masyarakat di wilayah ini telah dihimbau untuk tetap berada di rumah dan menerapkan physical distancing.<br />
          </p>
          <p>Wilayah ini termasuk dalam <b>zona merah</b> dan Anda tidak disarankan melalui rute ini. Pada zona merah penyebaran virus tidak terkendali dan wabah menyebar secara luas dan banyak kluster-kluster baru yang muncul dengan cepat. Masyarakat di wilayah ini harus berada di rumah.</p>
        </div>
    </div>
  </section>

</main><!-- End #main -->