    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="active">Berita</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>    
    <main class="site-main category-main">
        <div class="container">
            <div class="row">
                <section class="category-content col-sm-9">
                    <h2 class="category-title">SEMUA BERITA</h2>
                    <ul class="media-list">
                    <?php foreach($all as $row){  ?>
                        <li class="media">
                            <div class="media-left">
                                <a href="<?php echo base_url(); ?>Berita/view/<?php echo $row['id']; ?>" title="Post">
                                    <img class="media-object" src="<?php echo base_url(); ?>uploads/berita/<?php echo $row['path']; ?>" class="img-responsive" style="width:240px; height: auto;" alt="Post">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="<?php echo base_url(); ?>Berita/view/<?php echo $row['id']; ?>" title="<?php echo $row['judul']; ?>"><?php echo $row['judul']; ?></a></h3>
                                <p>Oleh: <span style="color: #005FA6"><?php echo $row['penulis']; ?></span> | Tanggal: <span style="color: #005FA6"><?php echo $row['tanggal']; ?></span>| Kategori: <span style="color: #005FA6"><?php echo $row['kategori']; ?></span> 
                                        </p>
                                <p class="" style="text-align:justify;"><?php echo mb_strimwidth($row['teks'], 0, 350, "...");  ?></p>
                                <aside class="meta category-meta">
                                    <div class="pull-right">
                                        
                                    </div>
                                </aside>                                
                            </div>
                        </li>
                    <?php } ?>             
                    </ul>                    
                </section>
            </div>
        </div>
    </main>