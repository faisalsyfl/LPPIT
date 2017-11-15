<!-- Arranged by Faisal & Tri -->
<!-- Agustus 2017 -->   
<div class="bread_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="#">Berita</a></li>
                    <li class="active"><?php echo $news['judul']; ?></li>
                </ol>                    
            </div>
        </div>
    </div>
</div>
<main class="site-main page-main">
    <div class="container">
        <div class="row">
            <section class="page col-md-9">
                <h2 class="page-title"><?php echo $news['judul']; ?></h2>
                <p>Oleh: <span style="color: #005FA6"><?php echo $news['penulis']; ?></span> | Tanggal: <span style="color: #005FA6"><?php echo $news['tanggal']; ?></span>| Kategori: <span style="color: #005FA6"><?php echo $news['kategori']; ?></span></p>
                <br/>
                <br/>
                <center><img src="<?php echo site_url(); ?>uploads/berita/<?php echo $news['path']; ?>" alt="" style="height: auto;width: 450px;"></center>
                <div class="entry text-justify">
                    <br/>
                    <?php echo $news['teks']; ?>                      
                    <br/>
                </div>
            </section>
            <aside class="col-sm-3">
                <div class="widget">
                    <h4>Berita Lainnya</h4>
                    <ul class="media-list" style="margin-left:15px;">
                    <?php foreach($all as $row){  ?>
                        <li class="media">
                            <div class="media-left">
                                <a href="<?php echo base_url(); ?>Berita/view/<?php echo $row['id']; ?>" title="Post">
                                    <img class="media-object" src="<?php echo base_url(); ?>uploads/berita/<?php echo $row['path']; ?>"style="width:60px; height: auto;" alt="Post">
                                </a>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="<?php echo base_url(); ?>Berita/view/<?php echo $row['id']; ?>" title="<?php echo $row['judul']; ?>"><?php echo $row['judul']; ?></a></h5>
                                <p>Tanggal: <span style="color: #005FA6"><?php echo $row['tanggal']; ?></span></p>                           
                            </div>
                        </li>
                    <?php } ?>             
                    </ul>    
                </div>
            </aside>
        </div>
    </div>
</main>