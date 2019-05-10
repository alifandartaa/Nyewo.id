<div class="tm-recommended-place">
	<img src="<?= base_url('assets/img/img10.jpg'); ?>" width="310" height="250" alt="Image">
	<div class="tm-recommended-description-box">
		<h3 class="tm-recommended-title"><?= $lapangan[0]['field_name']; ?></h3>
		<p class="tm-text-highlight"><?= $lapangan[0]['field_address']; ?></p>
		<div class="form-bottom">
			<form role="form" action="<?php echo base_url('pesan/booking'); ?>" method="post" class="registration-form">
				<input type="hidden" name="field_id" value="<?= $lapangan[0]['field_id'] ?>">
				<div class="form-group">
					<label for="form-first-name">Nama Lengkap</label>
					<!-- <input name="lapanganID" value="<?= $value->field_id; ?>" type="hidden"> -->
					<input type="text" name="nama" placeholder="Nama Lengkap..." class="form-first-name form-control" id="form-first-name" autofocus required>
				</div>
				<div class="form-group">
					<label for="form-last-name">Alamat</label>
					<input type="text" name="alamat" placeholder="Alamat..." class="form-last-name form-control" id="form-last-name" required>
				</div>
				<div class="form-group">
					<label for="form-username">Tanggal Penyewaan</label>
					<input type="text" name="tanggal" placeholder="DD/MM/YYYY.." class="form-username form-control" id="form-username" required>
				</div>
				<div class="form-group">
					<label for="form-field">Jumlah Lapangan</label>
					<input type="text" name="jumlah-lap" placeholder="Jumlah lapangan..." class="form-password form-control" id="form-password" required>
				</div>
				<?php echo $this->session->flashdata('error'); ?>
				<?php echo $this->session->flashdata('success'); ?>
				<button type="submit" name="submit" class="btn">Booking</button>
			</form>
		</div>
	</div>

</div>
<footer class="tm-container-outer">
	<p class="mb-0">Copyright © <span class="tm-current-year">2019</span> nyewo.id</p>
</footer>