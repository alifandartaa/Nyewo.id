		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Welcome, admin</h3>
			</div>
		</div>
		<!--/.row-->
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