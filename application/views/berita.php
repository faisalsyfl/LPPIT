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
                                <p class="" style="text-align:justify;"><?php echo mb_strimwidth($row['teks'], 0, 350, "...");  ?></p>
                                <aside class="meta category-meta">

                                    <div class="pull-right">
                                        <ul class="arc-share">
                                            <li><a href="#" title="Post"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" title="Post"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" title="Post"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#" title="Post"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </aside>                                
                            </div>
                        </li>
                    <?php } ?>                       
                    </ul>                    
                </section>
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>SERVICES</h4>
                        <ul>
                            <li class="current"><a href="#" title="">Service Title One</a></li>
                            <li><a href="#" title="">Service Title Two</a></li>
                            <li><a href="#" title="">Service Title Three</a></li>
                            <li><a href="#" title="">Service Title Four</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>