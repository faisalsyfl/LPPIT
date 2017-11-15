  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Galeri
        <small>Semua Foto</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Galeri</a></li>
        <li class="active">Semua Foto</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "Success"){ ?>
      <div class="alert alert-success" role="alert">
        Foto berhasil diposting, silahkan cek pada daftar pelatihan dibawah ini.
      </div>
      <?php }else if($this->uri->segment(3) == "Delete"){ ?>
      <div class="alert alert-success" role="alert">
        Foto berhasil di hapus.
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Foto</h3>
            </div>
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama File</th>
                    <th>Pelatihan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr >
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td>
                      <button type="button" title="Lihat Berita" class="btn btn-sm bg-blue" onclick="window.open('<?php echo site_url();?>uploads/galeri/<?php echo $row['filename']; ?>')"><i class="fa fa-eye"></i></button>
                      <button type="button" class="btn btn-sm bg-red" onclick="location.href='<?php echo site_url();?>Admin/deleteGaleri/<?php echo $row['id'] ?>'"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama File</th>
                  <th>Pelatihan</th>
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
