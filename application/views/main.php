<!-- ***** Main Banner Area Start ***** -->
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>Burane456</h4>
                        <h6>Coffee & Eattery</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Make A Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/img/slide1.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/img/slide2.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/img/slide3.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>Boost Yours Mood, Stamina and Energy</h2>
                    </div>
                    <p>Kedai Burane456 merupakan tempat yang menyediakan berbagai macam menu makanan dan minuman dengan kualitas rasa yang nikmat serta menyediakan tempat yang aman dan nyaman bagi para pengunjung.<br><br>Beberapa menu favorit kedai kami yaitu Nasi Kebuli, Signature Coffe Espresso, dan Premium Coklat Montok. Kedai Burane456 juga menerima pesanan pernikahan dan akikah.</p>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/best.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/img/best2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/img/best3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <br>
                <div class="right-content">
                    <div class="thumb">
                        <!-- <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a> -->
                        <img src="assets/img/bout.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection menus with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12 ">
            <div class="owl-menu-item owl-carousel">
                <?php foreach ($barang as $brg) { ?>
                    <div class="item">
                        <div class='card'>
                            <div class='card-img-top' style=" background-image: url(<?php echo base_url() . '/uploads/' . $brg->gambar ?>);">
                                <div class="price">
                                    <h6><?php echo $brg->harga ?></h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title mb-3'><?php echo $brg->nama_brg ?></h1>
                                    <p class='description'><?php if (strlen($brg->keterangan) > 50) {
                                                                echo substr($brg->keterangan, 0, 30) . " ...";
                                                            } else {
                                                                echo $brg->keterangan;
                                                            } ?></p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->


<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make an Order or Just Walkin To Our Cafe</h2>
                    </div>
                    <p>Kedai kami berlokasi di Jalan Mandor Hasan No.4 RT05, RW06, Kelurahan Cipayung, dan Kecamatan Cipayung Jakarta Timur. Pelanggan dapat mengunjungi langsung ke kedai kami, atau bisa juga menghubungi nomor yang sudah disediakan untuk order.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                <span><a href="#">0815-1310-2006</a><br><a href="#">0815-1310-2006</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">burane.official@gmail.com</a><br><a href="#">burane.official@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.0075196394187!2d107.1222203!3d-6.2627387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69856a5c5539e3%3A0xb9bf16e3680a144!2sJl.%20Telaga%20Harapan%20Raya%2C%20Kec.%20Cikarang%20Bar.%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1640786297183!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <!-- <h6>Klassy Week</h6> -->
                    <h2>Kategori Semua Menu </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                        <li><a href='#tabs-1'><img src="assets/images/iconmkn.png" width="30px" height="30px " alt="">Makanan</a></li>
                                        <li><a href='#tabs-2'><img src="assets/images/iconminum.png" width="30px" height="30px " alt="">Minuman</a></a></li>
                                        <li><a href='#tabs-3'><img src="assets/images/iconsnack.png" width="30px" height="30px " alt="">Snack</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <?php
                                            foreach ($menu as $menu) { ?>
                                                <?php if ($menu->kategori == 'Makanan') { ?>
                                                    <div class="col-lg-6">
                                                        <div class="tab-item">
                                                            <img src="<?php echo base_url() . '/uploads/' . $menu->gambar ?>" alt="">
                                                            <h4><?= $menu->nama_brg ?></h4>
                                                            <p><?= $menu->keterangan ?></p>
                                                            <div class="price">
                                                                <h6><?= $menu->harga ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <?php
                                            foreach ($menu1 as $menu) { ?>
                                                <?php if ($menu->kategori == 'Minuman') { ?>
                                                    <div class="col-lg-6">
                                                        <div class="tab-item">
                                                            <img src="<?php echo base_url() . '/uploads/' . $menu->gambar ?>" alt="">
                                                            <h4><?= $menu->nama_brg ?></h4>
                                                            <p><?= $menu->keterangan ?></p>
                                                            <div class="price">
                                                                <h6><?= $menu->harga ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <?php
                                            foreach ($menu2 as $menu) { ?>
                                                <?php if ($menu->kategori == 'Snack') { ?>
                                                    <div class="col-lg-6">
                                                        <div class="tab-item">
                                                            <img src="<?php echo base_url() . '/uploads/' . $menu->gambar ?>" alt="">
                                                            <h4><?= $menu->nama_brg ?></h4>
                                                            <p><?= $menu->keterangan ?></p>
                                                            <div class="price">
                                                                <h6><?= $menu->harga ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/Burane456/photos/?ref=page_internal"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="https://www.instagram.com/burane456/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="index.html"><img src="" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© Copyright Burane456
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>