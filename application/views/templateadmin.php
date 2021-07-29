<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= ucfirst($this->fungsi->setting("namaapk")->row("keterangan"))?></title>
  <meta content="<?= ucfirst($this->fungsi->setting("namaapk")->row("keterangan"))?>" name="descriptison">
  <meta content="<?= ucfirst($this->fungsi->setting("deskripsi")->row("keterangan"))?>" name="descriptison">
  <meta content="<?= ucfirst($this->fungsi->setting("namaapk")->row("keterangan"))?>" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/owl.carousel/<?= base_url()?>/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>/assets/css/style.css" rel="stylesheet">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/datatables-buttons/css/buttons.bootstrap4.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/datatables-select/css/select.bootstrap4.min.css">

  <!-- =======================================================
  * Template Name: Scaffold - v2.1.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
         <a href="<?= base_url()?>"><img src="<?= base_url()?>/assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?= base_url()?>">Home</a></li>
          <li class="drop-down"><a href="#">Tentang</a>
            <ul>
              <li><a href="<?= base_url("page/media_arbes")?>">Media Arbes</a></li>
              <li><a href="<?= base_url("page/matkul")?>">Identifikasi Mata Kuliah</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('page/petunjuk')?>">Petunjuk</a></li>
          <li><a href="<?= base_url('materi')?>">Materi Ajar</a></li>
          <li><a href="<?= base_url('tugas')?>">Assessment</a></li>
          <li><a href="http://wa.me/62<?= ucfirst($this->fungsi->setting("hotline")->row("keterangan"))?>"><i class="icofont-whatsapp"></i> Hubungi Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- /.content-header -->

  <?= $contents ?>

  <!-- /.content -->

  <!-- ======= Footer ======= -->
  <footer id="footer">    
    <div class="container">
      <div class="copyright">
        &copy; <?= date("Y") ?> <strong><span><?= ucfirst($this->fungsi->setting("namaapk")->row("keterangan"))?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Didedikasikan Oleh <a href="https://fitrahizulfalaq.blogspot.com/">Arbes APPS</a><br>
        <small>Made With &#9829; <a href="https://bikinkarya.com">Bikinkarya Creative</a></small>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>/assets/js/main.js"></script>

  <!-- Select2 -->
  <script src="<?=base_url()?>/assets/vendor/select2/js/select2.full.min.js"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      });
    })
  </script>

  <!-- DataTables -->
  <script src="<?=base_url()?>/assets/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-buttons/js/buttons.flash.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/pdfmake/pdfmake.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/pdfmake/vfs_fonts.js"></script>
  <script src="<?=base_url()?>/assets/vendor/jszip/jszip.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-select/js/dataTables.select.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/datatables-select/js/select.bootstrap4.min.js"></script>

  <!-- DataTables Data -->
  <script>
    $(function () {
      $("#example1").DataTable({});
      
      $('#list').DataTable({
        "paging": true,
        "pagingType": "simple",
        "autoWidth": true,
        "searching": false,
        "info": false,
        "ordering": false,
        "lengthMenu": [ [1], [1] ],
      });

      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        "info": false,
        "autoWidth": false,            
      });

    var table = $('#example3').DataTable({
      "lengthMenu": [ [5, 10, 15, 20, 50, 100, -1], [5, 10, 15, 20, 50, 100, "All"] ],
      "autoWidth": true,
      "info": false,
      select: true
    });

    //datatables
    var table = $('#tabel-processing').DataTable({ 
      
        "processing": true, 
        "serverSide": true,
        select: true, 
        "order": [], 
        "ajax": {
            "url": "<?php echo site_url($this->uri->segment('1').'/get_data_user')?>",
            "type": "POST"
        },
    
         
        "columnDefs": [
        { 
            "targets": [ 0 ], 
            "orderable": true, 
        },
        ],
    });

    new $.fn.dataTable.Buttons(table, {
        buttons: [        
          {
              extend: 'colvis',
              text: '<i class="fas fa-eye"></i>',                
          },

          {
              extend: 'print',
              text: '<i class="fas fa-print"></i>',
              exportOptions: {
                  columns: ':visible'
              }
          },

          {
              extend: 'csv',
              text: '<i class="fas fa-file-excel"></i>',
              exportOptions: {
                  columns: ':visible'
              }
          },

          {
              extend: 'pdf',
              text: '<i class="fas fa-file-pdf"></i>',
              exportOptions: {
                  columns: ':visible'
              }
          },

          {
              extend: 'copy',
              text: '<i class="fas fa-copy"></i>',
              exportOptions: {
                  columns: ':visible'
              }
          },        
        ],            
    });

    table.buttons( 0, null ).containers().appendTo( '.tableTools-container' );
    });
  </script>

</body>

</html>