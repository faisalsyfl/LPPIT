
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
              <form action="#" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="training-title" placeholder="Judul Pelatihan">
                </div>
                <div class="form-group">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected" disabled="disabled">- Kategori -</option>
                    <option>Artificial Intellegence</option>
                    <option>Micro Controller</option>
                    <option>Software Engineering</option>
                    <option>Network</option>
                  </select>
                </div>
                <!-- Date range -->
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="reservation" placeholder="Tanggal">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <input type="text" class="form-control" name="training-category" placeholder="Tempat">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="training-category" placeholder="Pemateri">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Keterangan" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Kirim
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>

        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

  <script>
    //Date range picker
    $('#reservation').daterangepicker();
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );
  </script>
