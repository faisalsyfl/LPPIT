<!-- Arranged by Faisal & Tri -->
<!-- Agustus 2017 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LP2IT | Lembaga Pelatihan dan Penerapan Ilmu dan Teknologi</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/upi.png">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>assets/css/Image-popup/magnific-popup.css" rel="stylesheet"> -->
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>UNIVERSITAS PENDIDIKAN INDONESIA</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li><a href="http://www.upi.edu" target="_blank"><i class="fa fa-home"></i></a></li>
                            <li><a href="https://www.facebook.com/Universitas.Pendidikan.Indonesia.UPI/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.google.co.id/maps/place/Universitas+Pendidikan+Indonesia/@-6.8601379,107.5922075,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e6b9028d757f:0x8478e42d05e54464!8m2!3d-6.8601379!4d107.5944015" target="_blank"><i class="fa fa-map-marker"></i></a></li>
                            <li><a href="mailto:lp2it@upi.edu"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="tel:+62222013163"><i class="fa fa-phone"></i> +62222013163</a> | </li>
                            <li><a href="<?php echo site_url(); ?>Admin/login"><i class="fa fa-sign-in"></i> Login</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="<?php echo base_url(); ?>" class="navbar-brand">
                    <img src="<?php echo base_url(); ?>assets/img/lp2it.png" alt="Post" style="margin-top:3px;">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li <?php if(is_null($this->uri->segment(1))) echo "class='active'"; ?>><a href="<?php echo base_url(); ?>" title="">BERANDA</a></li>
                        <li class="dropdown <?php if($this->uri->segment(1) == "Profil") echo "active"; ?>"  >
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFIL <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>Profil" title="">Tentang Kami</a></li>
                                <li><a href="<?php echo base_url(); ?>Profil/visimisi" title="">Visi Misi</a></li>
                                <li><a href="<?php echo base_url(); ?>Profil/struktur" title="">Struktur Organisasi</a></li>
                            </ul>
                        </li>
                        <!-- <li <?php if($this->uri->segment(1) == "Profil") echo "class='active'"; ?>><a href="<?php echo base_url(); ?>Profil" title="">PROFIL</a></li> -->
                        <li class="dropdown">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PELATIHAN <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <?php foreach($allp as $row){ ?>
                                <li><a href="<?php echo site_url(); ?>Pelatihan/view/<?php echo $row['id']; ?>" title="">Pelatihan <?php echo $row['nama']; ?></a></li>
                            <?php } ?>
                            </ul>
                        </li>
                        <li <?php if($this->uri->segment(1) == "Berita") echo "class='active'"; ?>><a href="<?php echo base_url(); ?>Berita" title="">BERITA</a></li>
                        <li <?php if($this->uri->segment(1) == "Galeri") echo "class='active'"; ?>><a href="<?php echo base_url(); ?>Galeri" title="">GALERI</a></li>
                        <li <?php if($this->uri->segment(1) == "Kontak") echo "class='active'"; ?>><a href="<?php echo base_url(); ?>Kontak" title="">KONTAK</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>

<!-- EOF -->