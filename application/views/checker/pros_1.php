<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="<?= base_url()?>">Home</a></li>
      <li>Self Check Up</li>
    </ol>
    <h2>Fitur Self Checkup : <br> Pengecekan dini COVID-19 secara mandiri</h2>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">

    <div class="row">
      <div class="col-md-12 col-lg-12 align-items-stretch mb-12 mb-lg-12" data-aos="zoom-in">
        <div class="icon-box icon-box-pink">
          <img src="<?= base_url()?>/assets/img/pertanyaan1.png" class="img-fluid" alt="" width="400px">
          <h3>Apakah Anda mengalami salah satu dari yang berikut:</h3>
          <div class="text-left">
            <p class="text-left">
              <ul>
                <li>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau  berbicara dalam satu kata)</li>
                <li>Nyeri dada yang parah</li>
                <li>Sulit untuk bangun</li>
                <li>Merasa kebingungan</li>
                <li>Penurunan  kesadaran </li>
              </ul>
            </p>
            <br>            
          </div>
          <p>
            <a href="<?= base_url('checker/gejala/1')?>" class="btn btn-success">Ya</a>
            <a href="<?= base_url('checker/proses/2')?>" class="btn btn-warning">Tidak</a>
          </p>
          <br>
          <p>
            <a href="<?= base_url('checker')?>" class="btn btn-danger btn-sm">Kembali Ke Beranda</a>            
          </p>          
        </div>
      </div>
  </div>
</section><!-- End Services Section -->