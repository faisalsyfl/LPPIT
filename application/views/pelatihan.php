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
                    <ul>
                        <li>Kategori&nbsp;&nbsp;: <?php echo $training['kategori']; ?></li>
                        <li>Tempat&nbsp;&nbsp;: <?php echo $training['tempat']; ?></li>
                        <li>Tanggal Mulai&nbsp;&nbsp;: <?php echo $training['start']?></li>
                        <li>Tanggal Selesai&nbsp;&nbsp;: <?php echo $training['end']?></li>
                        <li>Pemateri&nbsp;&nbsp;: <?php echo $training['pemateri']; ?></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</main>