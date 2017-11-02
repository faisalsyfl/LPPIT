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
                <img src="<?php echo site_url(); ?>uploads/berita/<?php echo $news['path']; ?>" alt="" style="height: auto;width: 500px;">
                <div class="entry text-justify">
                    <?php echo $news['teks']; ?>                        
                </div>
            </section>
        </div>
    </div>
</main>