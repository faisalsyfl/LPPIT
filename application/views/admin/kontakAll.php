  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Pesan
        <small>Semua Pesan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Admin</a></li>
        <li class="active">Semua Pesan</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Pesan</h3>
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
                    <th>Pesan</th>
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
                    <td><?php echo $row['instansi']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telp']; ?></td>
                    <td><?php echo $row['pesan']; ?></td>
                    <td>
                      <button type="button" onclick="location.href='<?php echo site_url();?>Admin/markUnread/<?php echo $row['id']; ?>'" class="btn btn-sm btn-<?php if($row['stats']==1)echo 'info'; else echo 'danger';?>"><i class="fa fa-eye<?php if($row['stats']==1)echo "-slash"; ?>"></i></button>
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
