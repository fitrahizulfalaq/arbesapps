======= Breadcrumbs ======= -->
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
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="<?= base_url('page/view_files/')?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></h4>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="<?= base_url('page/view_files/')?>">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></h4>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="<?= base_url('page/view_files/')?>">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</a></h4>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="<?= base_url('page/view_files/')?>">It has survived not only five centuries</a></h4>
              </div>
            </div>
          </div>
          <!-- <h2>Tanyakan Sesuatu</h2>
          <hr>
          <form action="<?= base_url('maps/cek/')?>" method="post" class="">
            <div class="form-group">
              <input type="text" class="form-control form-control-sm" placeholder="nama">
              <input type="text" class="form-control form-control-sm" placeholder="nim">
              <textarea name="" id=""rows="2" class="form-control form-control-sm" placeholder="Tulis Pertanyaan"></textarea>
            </div>            
            <div class="text-center">
              <a href="<?= base_url('maps/zones_form')?>" class="btn btn-primary btn-sm">Tannyakan</a>
            </div>
          </form> -->
          <hr>
          <h3>Pertanyaan :</h3>
          <div class="card-body">

            <div class="post clearfix">

              <div class="user-block">

              <h5> Materi : </h5> 

              <form action="">

                <div class="input-group input-group-sm mb-2">

                  <input type="hidden" name="materi_id" value="">

                  <input class="form-control form-control-sm" name="judul" placeholder="Nama" required>

                </div>

                <div class="input-group input-group-sm mb-2">

                  <input type="hidden" name="materi_id" value="">

                  <input class="form-control form-control-sm" name="judul" placeholder="NIM" required>

                </div>

                <div class="input-group input-group-sm mb-3">

                  <input class="form-control form-control-sm" name="deskripsi" placeholder="Pertanyaan" required>

                </div>

                <div class="input-group-append">

                  <button type="submit" class="btn btn-sm btn-success">Tanyakan</button>

                </div>

              </form>

            </div>

          </div>

          <!-- Tabel       -->

          <div class="table-responsive"><table class="table table-bordered table-striped" id="list"><thead><tr><th>Komentar</th></tr></thead><tbody>

          

          <!-- Komentar           -->

          <div class="card-body">

            <tr><td>
            <div class="card card-primary collapsed-card">
              <div class="card-body">
                <img class="img-circle img-bordered-sm" src="<?= base_url()?>assets/img/materi.png" alt="User Image" style="width: 30px; height: 30px"> | Penanya 1
                <br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
              <hr>
                <b>Jawaban Admin : </b><br>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
              </div>
            </div>
            </td></tr>

            <tr><td>
            <div class="card card-primary collapsed-card">
              <div class="card-body">
                <img class="img-circle img-bordered-sm" src="<?= base_url()?>assets/img/materi.png" alt="User Image" style="width: 30px; height: 30px"> | Penanya 2
                <br>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
              <hr>
                <b>Jawaban Admin : </b><br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
              </div>
            </div>
            </td></tr>

            </tbody></table></div>

          </div>
          <!-- Komentar           -->
      </div>
    </div>

  </div>
</section><!-- End Services Section