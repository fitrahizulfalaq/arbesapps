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

              <div class="user-block">

              <h5> Materi : </h5> 

              <form action="">

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

                <div class="input-group mb-2">

                  <input type="hidden" name="materi_id" value="">

                  <input class="form-control" name="judul" placeholder="Nama" required>

                </div>

                <div class="input-group input-group-sm mb-2">

                  <input type="hidden" name="materi_id" value="">

                  <input class="form-control" name="judul" placeholder="NIM" required>

                </div>

                <div class="input-group input-group-sm mb-3">

                  <input class="form-control" type="file" name="deskripsi" placeholder="Tugas" required><br>

                </div>

                <div class="input-group-append">

                  <button type="submit" class="btn btn-sm btn-success">Kirim Files</button>

                </div>

              </form>

            </div>

          </div>
      </div>
  </div>
</section><!-- End Services Section -->