<!-- Arranged by Faisal & Tri -->
<!-- Agustus 2017 -->   
<div class="bread_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="#">Pelatihan</a></li>
                    <li class="active"><?php echo "Pelatihan ".$training['nama']; ?></li>
                </ol>                    
            </div>
        </div>
    </div>
</div>
<main class="site-main page-main">
    <div class="container">
        <div class="row">
            <section class="page col-sm-8">
                <h2 class="page-title"><?php echo "Pelatihan ".$training['nama']; ?></h2>
                <div class="entry text-justify">
                    <?php echo $training['keterangan']; ?>                        
                </div>
            </section>
            <aside class="sidebar col-sm-4">
                <div class="widget">
                    <h4>Info Pelatihan</h4>
                    <table style="margin-left: 15px;">
                        <tr  style="vertical-align: top;">
                            <td style="width: 30%;">Kategori&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td><?php echo $training['kategori']; ?></td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td>Tempat&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td><?php echo $training['tempat']; ?></td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td>Tanggal Mulai&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td><?php echo $training['start']; ?></td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td>Tanggal Selesai&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td><?php echo $training['end']; ?></td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td>Pemateri&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td><?php echo $training['pemateri']; ?></td>
                        </tr>
                        
                    </table>
                </div>
            </aside>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 contact-wthree2">
                <h2 class="category-title">Foto Kegiatan Pelatihan</h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>assets/img/h1.jpeg" class="zoom"><img src="<?php echo base_url(); ?>assets/img/h1.jpeg" class="img-responsive rounded" alt="..."></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>assets/img/h2.jpg" class="zoom"><img src="<?php echo base_url(); ?>assets/img/h2.jpg" class="img-responsive rounded" alt="..."></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>assets/img/h3.jpeg" class="zoom"><img src="<?php echo base_url(); ?>assets/img/h3.jpeg" class="img-responsive rounded" alt="..."></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>assets/img/h4.jpeg" class="zoom"><img src="<?php echo base_url(); ?>assets/img/h4.jpeg" class="img-responsive rounded" alt="..."></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>