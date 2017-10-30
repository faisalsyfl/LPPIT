
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Galeri
        <small>Upload Galeri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Galeri</a></li>
        <li class="active">Buat Galeri</li>
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
              <?php echo form_open_multipart('Admin/uploadGaleri'); ?>
                <div class="form-group">
                  <select class="form-control select2" name="kategori" style="width: 100%;" required="">
                    <option selected="selected" disabled="disabled">- Pilih Pelatihan -</option>
                    <?php foreach($training as $row){ ?>
                    <option value="<?php echo$row['nama']; ?>"><?php echo $row['nama']; ?></option>
                    <?php } ?>
                  </select>
                </div>                   
                <!-- Date range -->
                <!-- /.form group -->
                <div class="form-group">
                  Masukkan foto-foto pelatihan tersebut (Anda dapat memilih banyak foto) : 
                  <input type="file" name="foto[]" multiple >
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail" >Unggah
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


