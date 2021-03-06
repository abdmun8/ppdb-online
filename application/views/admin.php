<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Pendaftaran SMA DUMMY 1 </title>
    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- datatable -->
    <link href="<?= base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
   
    <script src="<?= base_url(); ?>assets/build/js/script.js"></script>
    
  </head>

  <body>
    <div class="container body">

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="text-center">
              <div class="text-center">
              <h3>ADMIN SITE</h3>
              <h3>PENERIMAAN SANTRI BARU</h3>
              <h3>PESANTREN TAHFIDZUL QUR'AN AL'AZZAM</h3>
              <h3>SEKOLAH MENENGAH PERTAMA ISLAM TERPADU</h3>
              <h3>BINA INSANI SEMARANG</h3>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="col-md-9">Jumlah Santri yang mendaftar = <?php echo count($all); ?></h2>
                    <input type="text" class="col-md-1" maxlength="8" id="gen_kode">&nbsp<button id="btn_gen" class="btn-primary btn-xs"> generate kode</button>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Smart Wizard -->

                    <table id="datatable" class="table table-striped table-bordered">

                      <thead class="bg-green">
                        <tr>
                          <th>Nama Lengkap</th>
                          <th>Nama Panggilan</th>
                          <th>Jenis Kelamin</th>
                          <th>Tempat/Tanggal Lahir</th>
                          <th>Agama</th>
                          <th>Asal Sekolah</th>
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($all as $data) { ?>
                        
                        <tr>
                          <td><?= $data->nl_siswa; ?></td>
                          <td><?= $data->np_siswa; ?></td>
                          <td><?= $data->jk_siswa; ?></td>
                          <td><?= $data->tmp_lahir."/".$data->tgl_lahir; ?></td>
                          <td><?= $data->agama_siswa; ?></td>
                          <td><?= $data->asal_sekolah; ?></td>
                          <td><?= $data->alamat; ?></td>
                          <td><a class="btn-xs btn-primary" href="<?= site_url('Pendaftaran/cetak/').$data->id_siswa ?>" >Lihat Formulir</a></td>
                        </tr>
                      <?php } ?>
                      </tbody><!-- end table body -->
                          </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<!-- Datatables -->
<script src="<?= base_url(); ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<!-- <script src="<?= base_url(); ?>assets/build/js/custom.min.js"></script> -->
    <script>
      $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable_filter').find("input").attr('placeholder', "Cari Calon Siswa");
      });
      $('#btn_gen').click(function() {
          var kode = $('#gen_kode').val();
          $.ajax({
            url: "<?php echo site_url('Admin_site/generate') ?>",
            type: 'POST',
            dataType: 'html',
            data:"kode="+kode,
            success: function(data) {
              alert('Kode Berhasil Di Input');
            }
          });
          
        });
    </script>
    <!-- /Datatables -->


    <!-- /jQuery Tags Input -->
  </body>
</html>