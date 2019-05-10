<div class="tm-page-wrap mx-auto">
    <section class="tm-banner">
        <div class="tm-container-outer tm-banner-bg">
            <div class="container">

                <div class="row tm-banner-row tm-banner-row-header">
                    <div class="col-xs-12">
                        <div class="tm-banner-header">
                            <h1 class="text-uppercase tm-banner-title"><b>Selamat Datang</b></h1>
                            <img src="<?= base_url('assets/img/dots-3.png'); ?>" alt="Dots">
                            <p class="tm-banner-subtitle">Cari tempat olahragamu <strong>disini.</strong></p>
                            <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>
                        </div>
                    </div> <!-- col-xs-12 -->
                </div> <!-- row -->
                <div class="row tm-banner-row" id="tm-section-search">

                </div> <!-- row -->
                <div class="tm-banner-overlay"></div>
            </div> <!-- .container -->
        </div> <!-- .tm-container-outer -->
    </section>

    <div class="tm-container-outer" id="tm-section-3">
        <ul class="nav nav-pills tm-tabs-links">
            <li class="tm-tab-link-li">
                <a href="#1a" data-toggle="tab" class="tm-tab-link">
                    <img src="<?= base_url('assets/img/basket.png'); ?>" width="110" height="110" alt="Image" class="img-fluid">
                    Basket
                </a>
            </li>
            <li class="tm-tab-link-li">
                <a href="#3a" data-toggle="tab" class="tm-tab-link">
                    <img src="<?= base_url('assets/img/futsal.png'); ?>" width="110" height="110" alt="Image" class="img-fluid">
                    Futsal
                </a>
            </li>
        </ul>
        <div class="tab-content clearfix">

            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="1a">
                <div class="tm-recommended-place-wrap">
                    <?php foreach ($posts as $post) :
                        if ($post['kategori'] == "basket") {
                            ?>
                            <div class="tm-recommended-place">
                                <img src="<?= base_url('assets/img/img7.jpg'); ?>" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title"><?= $post['field_name']; ?></h3>
                                    <p class="tm-text-highlight"><?= $post['field_address']; ?></p>
                                </div>
                                <a href="<?= base_url('pesan/isi/' . $post['field_id']); ?>" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">Rp. <?= $post['price']; ?></p>
                                    <p class="tm-recommended-price-link">Booking Sekarang</p>
                                </a>
                            </div>
                        <?php
                    }
                endforeach; ?>
                </div>
            </div> <!-- tab-pane -->

            <!-- Tab 3 -->
            <div class="tab-pane fade" id="3a">

                <div class="tm-recommended-place-wrap">
                    <?php foreach ($posts as $post) :
                        if ($post['kategori'] == "futsal") {
                            ?>
                            <div class="tm-recommended-place">
                                <img src="<?= base_url('assets/img/img7.jpg'); ?>" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title"><?= $post['field_name']; ?></h3>
                                    <p class="tm-text-highlight"><?= $post['field_address']; ?></p>
                                </div>
                                <a href="<?= base_url('pesan/isi/' . $post['field_id']); ?>" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">Rp. <?= $post['price']; ?></p>
                                    <p class="tm-recommended-price-link">Booking Sekarang</p>
                                </a>
                            </div>
                        <?php
                    }
                endforeach; ?>
                </div>
            </div> <!-- tab-pane -->
        </div>
    </div>


    <footer class="tm-container-outer">
        <p class="mb-0">Copyright © <span class="tm-current-year">2019</span> nyewo.id

            . Designed by <a rel="nofollow" href="http://www.google.com/+templatemo" target="_parent">Template
                Mo</a></p>
    </footer>
</div>
</div> <!-- .main-content -->