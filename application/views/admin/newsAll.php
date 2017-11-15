  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Berita
        <small>Semua Berita</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Berita</a></li>
        <li class="active">Semua Berita</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "Success"){ ?>
      <div class="alert alert-success" role="alert">
        Berita berhasil diposting, silahkan cek pada daftar pelatihan dibawah ini.
      </div>
      <?php }else if($this->uri->segment(3) == "Delete"){ ?>
        <div class="alert alert-danger" role="alert">
        Berita berhasil di hapus.
      </div>
      <?php }else if($this->uri->segment(3) == "Edit"){ ?>
        <div class="alert alert-info" role="alert">
        Berita berhasil di edit.
      </div>      
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Berita</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul Berita</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr >
                    <td><?php echo $i++; ?></td>
                    <td><?php echo "Pelatihan ".$row['judul']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo $row['kategori']; ?></td>
                    <td><?php echo $row['penulis']; ?></td>
                    <td>
                      <button type="button" title="Lihat Berita" class="btn btn-sm bg-blue" onclick="window.open('<?php echo site_url();?>Berita/view/<?php echo $row['id']; ?>')"><i class="fa fa-eye"></i></button>
                      <button type="button" class="btn btn-sm bg-orange" onclick="location.href='<?php echo site_url();?>Admin/editNews/<?php echo $row['id']; ?>'"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-sm bg-red"><i class="fa fa-trash" onclick="location.href='<?php echo site_url();?>Admin/deleteNews/<?php echo $row['id']; ?>'"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Judul Berita</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
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
