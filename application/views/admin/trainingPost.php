
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Pelatihan
        <small>Buat Pelatihan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Pelatihan</a></li>
        <li class="active">Buat Pelatihan</li>
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
              <?php echo form_open('Admin/addTraining'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="nama" placeholder="Judul Pelatihan" required="">
                </div>
                <div class="form-group">
                  <select id="category" class="form-control select2" name="kategori" onchange="handleSelect()" style="width: 100%;" required="">
                    <option selected="selected" disabled="disabled">- Kategori -</option>
                    <option>Keuangan</option>
                    <option>Teknologi Informasi</option>
                    <option>Pendidikan</option>
                    <option>Sastra</option>
                    <option>Lainnya...</option>
                  </select>
                </div>
                <div class="form-group">
                  <input id="lainnya_text" type="text" class="form-control" name="kategori_lainnya" placeholder="Tulis lainnya" disabled/>
                </div>
                <!-- Date range -->
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="reservation" name="times" placeholder="Tanggal" required="">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <input type="text" class="form-control" name="tempat" placeholder="Tempat">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="pemateri" placeholder="Pemateri">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Keterangan" name="keterangan" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail" >Kirim
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

  <script>
	function handleSelect() {
		 if (document.getElementById("category").selectedIndex == "5") {
			 document.getElementById('lainnya_text').disabled = false;
		 } else {
			 document.getElementById('lainnya_text').disabled = true;
		 }
	 }
</script>
