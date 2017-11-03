
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Pelatihan
        <small>Semua Pelatihan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Pelatihan</a></li>
        <li class="active">Semua Pelatihan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "Success"){ ?>
      <div class="alert alert-success" role="alert">
        Pelatihan berhasil diposting, silahkan cek pada daftar pelatihan dibawah ini.
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Pelatihan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pelatihan</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Pemateri</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['kategori']; ?></td>
                    <td><?php echo $row['start']." s/d ".$row['end']; ?></td>
                    <td><?php echo $row['tempat'] ?></td>
                    <td><?php echo $row['pemateri'] ?></td>
                    <td><?php echo $row['keterangan'] ?></td>
                    <td>
                      <button type="button" class="btn btn-sm bg-navy"><i class="fa fa-eye-slash"></i></button>
                      <button type="button" class="btn btn-sm bg-orange"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-sm bg-red"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No.</th>
                <th>Nama Pelatihan</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Tempat</th>
                <th>Pemateri</th>
                <th>Keterangan</th>
                <th>Aksi</th>
                </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
