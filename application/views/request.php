<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
<section class="contact" id="contact">
    <div class="container">
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="active">Pelatihan</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>        
        <div class="col-lg-12 col-md-12 contact-wthree2">
           <h2 class="category-title">PERMINTAAN PELATIHAN</h2>
			<br/>
            <?php if ($this->uri->segment(1) == "RequestSuccess"){ ?>
            <div class="alert alert-success" role="alert">
              Permintaan anda telah dikirim. Silahkan cek folder inbox atau spam <b>email</b> anda untuk info lebih lanjut.
            </div>
            <?php } ?>
			<p style="color:black;">LP2IT menawarkan permintaan pelatihan bagi instansi yang ingin melaksanakan pelatihan. <br>Silahkan isi formulir dan berkas excel yang telah disediakan dibawah, kemudian unggah file tersebut.</p>
			<br/>
            <?php echo form_open_multipart('Request/requestTraining'); ?>
                <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input type="text" class="form-control first-name" name="nama" placeholder="Nama Lengkap" required/>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input type="text" class="form-control last-name" name="instansi" placeholder="Institusi" required/>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input type="email" class="form-control mail" name="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input type="tel" class="form-control pno" name="telepon" placeholder="Nomor Telepon" required/>
                    </div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<select id="category" class="form-control first-name" name="kategori" onchange="handleSelect()" required>
							<option selected="selected" style="color: #9e9e9e;" disabled>- Kategori -</option>
							<option value="Keuangan">Keuangan</option>
							<option value="Teknologi">Teknologi Informasi</option>
							<option value="Pendidikan">Pendidikan</option>
							<option value="Pendidikan">Sastra</option>
							<option value="Lainnya">Lainnya...</option>
						</select>
                    </div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input id="lainnya_text" type="text" class="form-control mail" name="other" placeholder="Tulis lainnya" disabled/>
                    </div>
                    <div class="clearfix"></div>
					<div class="form-group col-lg-12 slideanim">
                        <textarea class="form-control" rows="6" name="keterangan" placeholder="Tuliskan deskripsi Pelatihan yang diinginkann & Estimasi jumlah peserta"></textarea>
                    </div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<h5>Daftar Peserta</h5>
						<p>
							Silahkan unduh format berkas excel untuk daftar peserta <a  href="<?php echo base_url('uploads/excel/FORMAT_PESERTA_PELATIHAN.xlsx'); ?>" target="_blank" style="font-weight: bold; color:#1d76f6">disini</a><br>
							Unggah berkas daftar peserta: <br><br><input type="file" name="excel" required/>
						</p>
                    </div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<h5>Catatan</h5>
						<ul>
							<li>Silahkan cek status perkembangan permintaan pada email anda.</li>
							<li>Pihak LP2IT akan menghubungi anda untuk keterangan lebih lanjut.</li>
							<li>Jika ada pertanyaan, silahkan hubungi:<br/> LP2IT : +6222-2013163</li>
						</ul>
                    </div>
                    <div class="form-group col-lg-12 slideanim">
                        <center><button type="submit" class="btn btn-outline" style="background-color: #1d76f6; color: #fff;">Kirim Permintaan</button></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<br>
<br>

<script>
	function handleSelect() {
		 if (document.getElementById("category").selectedIndex == "5") {
			 document.getElementById('lainnya_text').disabled = false;
		 } else {
			 document.getElementById('lainnya_text').disabled = true;
		 }
	 }
</script>