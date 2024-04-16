<!-- isi.php -->
<?php
include_once 'header.php';
include_once 'sidebar.php';

?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ini Halaman Pertama</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Profile awaa</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body"> <!--isi script-->
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curiculum Vitae</title>
</head>
<body>
    <!-- ini judul -->
    <h2 style="text-align: center;">Biodata Diri</h2>
    <hr>
    <!-- table biodata diri -->
    <table border="1" cellpadding="10" align="center" width="700">
        <tr bgcolor="orange">
            <th width="200">Deskripsi</th>
            <th width="300">Keterangan</th>
            <th width="200">Foto</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>siti salwa salsabila</td>
            <td rowspan="3"><img width="200" src="dist/img/awaa.jpeg" alt="ini foto awaa"></td>
        </tr>
        <tr>
             <td>Nim</td>
             <td>0110123083</td>
        </tr>
        <tr>
             <td>Rombel</td>
             <td>SI09</td>
        </tr>
        <tr>
             <td>Agama</td>
             <td>islam</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>19</td>
        </tr>
    </table>
    <!-- tag penutup table -->

</body>
</html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include_once 'footer.php';
?>
