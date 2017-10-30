<div class="bread_area">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<ol class="breadcrumb">
				<li class="active">Galeri</li>
			</ol>                    
		</div>
	</div>
</div>
</div>    

<section class="contact" id="contact">
<div class="container">
	<div class="col-lg-12 col-md-12 contact-wthree2">
		<h2 class="category-title">GALERI</h2>
			<?php $temp = -1; 
			foreach($all as $foto){
				if($foto['idp'] != $temp){
					if($temp != -1){
						echo "</div>";
					}
					echo $foto['nama'];
					echo "<div class='row'>";
				}
			?>
				<div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
					<div class="text-center">
						<a href="<?php echo base_url(); ?>uploads/peserta/<?php echo $foto['filename']; ?>" class="zoom"><img src="<?php echo base_url(); ?>uploads/peserta/<?php echo $foto['filename']; ?>" class="img-responsive rounded" alt="..."></a>
					</div>
				</div>
			<?php 
				$temp = $foto['idp'];
			} 
			?>
			
			<br/>
		</form>
	</div>
</div>
</section>
<br>
<br>