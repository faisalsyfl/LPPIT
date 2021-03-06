
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Berita
        <small>Edit Berita</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Berita</a></li>
        <li class="active">Edit Berita</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-body">
                <?php echo form_open_multipart('Admin/editNews'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="judul" placeholder="Judul Berita" value="<?php echo $obj['judul']; ?>" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="<?php echo $obj['kategori']; ?>" required>
                </div>        
                <div class="form-group">
                  <input type="text" class="form-control" name="penulis" placeholder="Penulis" value="<?php echo $obj['penulis']; ?>" required>
                </div>                        
                <div>
                  <textarea class="textarea" placeholder="Teks Berita" name="teks" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $obj['teks']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Unggah Foto Utama : </label>
                  <input type="file" name="photo" placeholder="">
                  <input type="hidden" name="id" value="<?php echo $obj['id']; ?>">
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Kirim
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
            </form>
          </div>

        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
