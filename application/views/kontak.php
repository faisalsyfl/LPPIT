<div class="bread_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li class="active">Kontak</li>
                </ol>                    
            </div>
        </div>
    </div>
</div>    

<section class="contact" id="contact">
    <div class="container">
        <div class="col-lg-12 col-md-12 contact-wthree2">
            <h2 class="category-title">KONTAK KAMI</h2>
            <?php if ($this->uri->segment(2) == 1){ ?>
            <div class="alert alert-success" role="alert">
              Pesan anda telah sukses disampaikan kepada LP2IT. Silahkan cek email untuk perkembangan lebih lanjut.
            </div>
            <?php } ?>
			<br/>
            <?php echo form_open('Home/kontakProses'); ?>
                <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input type="text" class="form-control first-name" name="nama" placeholder="Nama Depan" required/>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input type="text" class="form-control last-name" name="instansi" placeholder="Institusi" required/>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input type="email" class="form-control mail" name="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
                        <input type="tel" class="form-control pno" name="telp" placeholder="Nomor Telepon" required/>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12 slideanim">
                        <textarea class="form-control" rows="6" name="pesan" placeholder="Pesan Anda"></textarea>
                    </div>
                    <div class="form-group col-lg-12 slideanim">
                        <center><button type="submit" class="btn btn-outline" style="background-color: #1d76f6; color: #fff;">Kirim Pesan</button></center>
                    </div>
                </div>
				<br/>
            </form>
        </div>
    </div>
</section>
<br>
<br>