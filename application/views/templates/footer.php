<!-- Arranged by Faisal & Tri -->
<!-- Agustus 2017 -->   
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>LP2IT</h4>
                    <p class="text">
                        <b>Lembaga Pelatihan, Penerapan Ilmu dan Teknologi.</b><br>
                        Universitas Pendidikan Indonesia.
                    </p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>PROGRAM PELATIHAN</h4>
                    <ul class="big">
                        <li>Teknologi</li>
                        <li>Pendidikan</li>
                        <li>Keuangan</li>
                        <li>Sastra</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>PROFIL</h4>
                    <ul class="big">
                        <li><a href="#" title="">Tentang Kami</a></li>
                        <li><a href="#" title="">Visi dan Misi</a></li>
                        <li><a href="#" title="">Pimpinan</a></li>
                        <li><a href="#" title="">Struktur Organisasi</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>KONTAK</h4>
                    <p class="text">Jl. Dr. Setiabudhi No. 229 Bandung 40154 Jawa Barat - Indonesia.</p>
                    <p><a href="tel:+902222222222"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +6222 2013163</a></p>
                    <p><a href="mailto:lp2it@upi.edu"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> lp2it@upi.edu</a></p>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">Copyright &copy; 2017 LP2IT | Universitas Pendidikan Indonesia</p>
                    </div>
                    <div class="col-md-8">
                        <p class="list-inline navbar-right">Dikembangkan Oleh: Faisal S.A. & Tri S.</p>
                    </div>
                </div>
            </div>
        </div>        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/Image-popup/jquery.migrate.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/Image-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/Image-popup/jquery.imagesloaded.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/Image-popup/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/Image-popup/script.js"></script>

    <script type="text/javascript">
    <script type="text/javascript">
        $('.carousel[data-typeImage-popup/').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });        
    </script>
</body>
</html>
<!-- EOF -->