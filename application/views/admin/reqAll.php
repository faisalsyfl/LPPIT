  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Permintaan Pelatihan
        <small>Semua Permintaan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Admin</a></li>
        <li class="active">Semua Permintaan</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Permintaan Pelatihan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Instansi</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Kategori</th>
                    <th>Katerangan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr class="<?php if($row['stats'] == 1) echo "success"; else echo "danger";?>">
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['instansi']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telepon']; ?></td>
                    <td><?php echo $row['kategori']; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td>
                    <a title="Download Peserta" target="_blank" class="btn btn-sm btn-info" href="<?php echo base_url('uploads/peserta/'.$row['file']);?>"><i class="fa fa-download" ></i></a>
                    <button type="button" onclick="location.href='<?php echo site_url();?>Admin/markProcessed/<?php echo $row['id']; ?>'" class="btn btn-sm btn-<?php if($row['stats']==1)echo 'danger'; else echo 'success';?>"><i class="fa fa-<?php if($row['stats']==0)echo "check"; else echo "close"; ?>"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>

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
