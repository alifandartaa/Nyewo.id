		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Buat Lapangan</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="container">

			<div class="row">
				<form class="form-signin" method="post" action="<?php echo base_url('admin/createLapangan'); ?>">
					<img class="mb-4" src="/docs/4.3/assets/admin/brand/bootstrap-solid.svg" alt="" width="72" height="72">
					<label for="inputEmail">Nama Lapangan</label>
					<input type="text" name="nama" id="inputEmail" class="form-control" placeholder="Nama Lapangan" required autofocus>
					<small id="emailHelp" class="form-text text-danger"><?php echo form_error('nama'); ?></small>
					<label for="inputState">Kategori</label>
					<select id="inputState" name="kategori" class="form-control">
						<option value="futsal">Futsal</option>
						<option value="basket">Basket</option>
					</select>
					<label for="inputPassword">Alamat</label>
					<input type="text" name="alamat" id="inputPassword" class="form-control" placeholder="Alamat" required>
					<small id="emailHelp" class="form-text text-danger"><?php echo form_error('alamat'); ?></small>
					<label for="inputEmail">Harga</label>
					<input type="number" name="harga" id="inputEmail" class="form-control" placeholder="Masukkan harga" required>
					<small id="emailHelp" class="form-text text-danger"><?php echo form_error('harga'); ?></small>
					<label for="inputEmail">Nomor Telefon</label>
					<input type="tel" name="telp" id="inputEmail" class="form-control" placeholder="Masukkan nomor telefon" required>
					<small id="emailHelp" class="form-text text-danger"><?php echo form_error('telp'); ?></small>
					<?php echo $this->session->flashdata('error'); ?>
					<?php echo $this->session->flashdata('success'); ?>
					<button class="btn btn-lg btn-primary btn-block mt-3" type="submit" style="margin-top:20px; width:100px; height: 50px">Submit</button>
				</form>
			</div>
		</div>
		<!--/.row-->
		<div class="col-sm-12">
			<p class="mt-5 mb-3 text-muted text-center">&copy; Nyewo.id 2019</p>
		</div>
		</div>
		<!--/.row-->
		</div>
		<!--/.main-->

		<script src="<?= base_url('assets/admin/js/jquery-1.11.1.min.js'); ?>"></script>
		<script src="<?= base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
		<script src="<?= base_url('assets/admin/js/chart.min.js'); ?>"></script>
		<script src="<?= base_url('assets/admin/js/chart-data.js'); ?>"></script>
		<script src="<?= base_url('assets/admin/js/easypiechart.js'); ?>"></script>
		<script src="<?= base_url('assets/admin/js/easypiechart-data.js'); ?>"></script>
		<script src="<?= base_url('assets/admin/js/bootstrap-datepicker.js'); ?>"></script>
		<script src="<?= base_url('assets/admin/js/custom.js'); ?>"></script>
		<script>
			window.onload = function() {
				var chart1 = document.getElementById("line-chart").getContext("2d");
				window.myLine = new Chart(chart1).Line(lineChartData, {
					responsive: true,
					scaleLineColor: "rgba(0,0,0,.2)",
					scaleGridLineColor: "rgba(0,0,0,.05)",
					scaleFontColor: "#c5c7cc"
				});
			};
		</script>

		</body>

		</html>