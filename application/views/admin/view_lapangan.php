    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lihat Lapangan</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lapangan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 0;
                    foreach ($lapangan as $value) {
                        $nomor++; ?>
                        <tr>
                            <th scope="row"><?= $nomor; ?></th>
                            <td><?= $value['field_name']; ?></td>
                            <td><?= $value['field_address']; ?></td>
                            <td><?= $value['price']; ?></td>
                            <td><?= $value['phone_number']; ?></td>
                            <td><?= $value['status']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?= base_url('admin/updateLapangan/' . $value['field_id']); ?>">Update</a>
                                <a class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus ini?');" href="<?= base_url('admin/deleteLapangan/' . $value['field_id']); ?>">Delete</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
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