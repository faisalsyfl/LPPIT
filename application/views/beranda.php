<!-- Arranged by Faisal & Tri -->
<!-- Agustus 2017 -->   
 <main class="site-main">
    <section class="hero_area">
        <div class="hero_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
					<center>
                        <h1 style="color: #ffc801; font-size: 5em;">LP2IT</h1>
                        <h2>Lembaga Pelatihan,<br>Penerapan Ilmu dan Teknologi</h2>
						<a href="<?php echo site_url();?>Request" class="btn btn-outline btn-pelatihan">Pelatihan</a>
					</center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="boxes_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
						<center>
						<blockquote>
							<h3 class="visi-index">Menjadi unit usaha Produktif LP2IT Universitas Pendidikan Indonesia dalam mencapai kepeloporan dan keunggulan di bidang pendidikan se-ASEAN pada tahun 2020</h3>
						</blockquote>
						<br>
						</center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <h2 class="section-title">PROGRAM PELATIHAN</h2>
        <p class="desc">Berikut program pelatihan yang telah dilaksanakan oleh LP2IT</p>
        <div class="container">
            <div class="row">
                <?php foreach($allp as $row){ ?>
                <div class="col-md-4 col-sm-6 col-xs-12">   
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-<?php if($row['kategori']=='Keuangan') echo 'money'; elseif($row['kategori']=='Teknologi Informasi') echo 'cogs'; elseif($row['kategori'] =='Pendidikan') echo 'university'; elseif($row['kategori'] == 'Sastra') echo 'book'; else echo 'file-text-o';?>"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Pelatihan <?php echo $row['nama']; ?></h4>
                            <p><?php echo mb_strimwidth($row['keterangan'], 0, 100, "..."); ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                                  
            </div>
        </div>
    </section>
    <section class="home-area">
        <div class="home_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h2 class="sub_title">BERITA TERBARU</h2></div>
                    <div class="home_list">
                        <ul>
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/img/berita/1.jpg" alt="Post">
                                    <div class="caption">
                                        <h3><a href="#">MENINGKATKAN KOMPETENSI MELALUI PENDIDIKAN UNTUK MELAWAN MASALAH SOSIAL</a></h3>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <a href="#" class="btn btn-link" role="button">Selengkapnya</a>
                                    </div>
                                </div>                                        
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/img/berita/2.jpg" class="img-responsive" alt="Post">
                                    <div class="caption">
                                        <h3><a href="#">UPI – BANK BJB TANDATANGANI NOTA KESEPAHAMAN</a></h3>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <a href="#" class="btn btn-link" role="button">Selengkapnya</a>
                                    </div>
                                </div>                                        
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/img/berita/3.jpg" class="img-responsive" alt="Post">
                                    <div class="caption">
                                        <h3><a href="#">PAHAMI SECARA KOMPREHENSIF PEREMPUAN DAN ANAK</a></h3>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <a href="#" class="btn btn-link" role="button">Selengkapnya</a>
                                    </div>
                                </div>                                        
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/img/berita/4.jpg" class="img-responsive" alt="Post">
                                    <div class="caption">
                                        <h3><a href="#">PROF. DR. UYU WAHYUDIN, M.PD., GURU BESAR ILMU PENDIDIKAN LUAR SEKOLAH</a></h3>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <a href="#" class="btn btn-link" role="button">Selengkapnya</a>
                                    </div>
                                </div>                                        
                            </li>                                    
                        </ul>
                    </div>
                    
                    <div class="col-sm-12 home_bottom">
                        <h2 class="sub_title">Mitra Pelatihan</h2>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="6000" id="myCarousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l1.jpg" class="img-responsive" style="height:100px;" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l2.jpg" class="img-responsive" style="height:100px;" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l3.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l4.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l5.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l6.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l7.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l8.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l1.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l2.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l3.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l4.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l5.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l6.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l7.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/l8.jpg" class="img-responsive" alt="Reference"></a>
                                        </div>
                                    </div>                                        
                                </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>