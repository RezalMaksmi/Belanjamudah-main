<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section class="bg-color mt-5" id="home">
    <div class="container-sm">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="img/1.png" class="d-block w-100" alt="..." style=" filter: brightness(50%);" />
                </div>
                <div class="carousel-item active">
                    <img src="img/4.png" class="d-block w-100" alt="..." style=" filter: brightness(50%);" />
                </div>
                <div class="carousel-item">
                    <img src="img/5.png" class="d-block w-100" alt="..." style=" filter: brightness(50%);" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <div class="wrap-belanja position-absolute top-50 start-50 translate-middle">
                <h1 class="text-white fw-bold">BELANJA<span class="text-warning">MUDAH</span></h1>
                <a href="/product" type="button" class="belanja btn btn-success btn-xxl">
                    Mulai Belanja
                </a>
            </div>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<!-- ---------------------- LAYANAN ------------------------  -->
<section class="layanan pb-5">
    <h2 data-aos="fade-right" data-aos-duration="1500"
        class="txt-layanan m-auto d-flex justify-content-center text-success">
        Layanan
    </h2>
    <div data-aos="fade-up" data-aos-duration="1500" class="container text-center mt-5">
        <div
            class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-1 row-cols-1 m-auto d-flex justify-content-around align-content-center">
            <div class="mb-xxl-5 mb-3">
                <div class="card border-0 mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="img/belimudah.png" class="img-fluid rounded-start" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-start">
                                <h5 class="card-title text-success fs-5 fw-semibold">
                                    Anti Ribet
                                </h5>
                                <p class="card-text fs-6">
                                    Dengan pembelian mudah tinggal klik nyampe tujuan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-xxl-5 mb-3">
                <div class="card border-0 mb-3" style="max-width: 540px">
                    <div class="info-center row g-0 ">
                        <div class="col-4">
                            <img src="./img/langsungketoko.png" class="img-fluid rounded-start float-end" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-info card-body text-start">
                                <h5 class="card-title text-success fs-5 fw-semibold">
                                    Toko Kami
                                </h5>
                                <p class="p-info card-text fs-6">
                                    Pembelian ditoko dan dapatkan diskon yang menarik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-xxl-5 mb-3">
                <div class="card border-0 mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="./img/pembayaran.png" class="img-fluid rounded-start" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-start">
                                <h5 class="card-title text-success fs-5 fw-semibold">
                                    Pembayaran
                                </h5>
                                <p class="card-text fs-6">
                                    Dengan sistem pembayaran electronik maupun cash anti
                                    ribet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------ / LAYANAN / ----------------------------  -->

<!-- ----------------- Product -------------------  -->
<section class="pt-5 pb-5 bg-color" id="product">
    <h2 data-aos="fade-up" data-aos-duration="1500" class="m-auto d-flex justify-content-center text-success">Produk
    </h2>
    <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100"
        class="bungkus-atas container text-center mt-5">
        <div
            class="wrapping row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-2 m-auto d-flex justify-content-center align-content-center">
            <?php foreach($product as $p) : ?>
            <div class="wrap-kartu mb-xxl-5 mb-4 d-flex justify-content-center align-content-center col-4 col-13">
                <div class="kartu card" style="width: 18rem">
                    <div class="img gambar" style=" widht:100%; overflow:hidden;">
                        <img src="/img/<?= $p['data_gambar']; ?>" class="card-img-top" alt="..." />
                    </div>
                    <div class="card-body p-1">
                        <p class="nama-barang mb-1 mt-1 fw-semibold"><?= $p['nama_barang']; ?></p>

                        <p class="deskripsi mb-2 card-text">
                            <?= $p['deskripsi']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ----------------- / Product / -------------------  -->

<!-- ---------------- review ----------------------  -->
<section class="pb-5" id="reviuw">
    <div class="container">
        <h2 class="pt-5 pb-4 m-auto d-flex justify-content-center text-success">
            Kata Mereka
        </h2>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <section class="d-flex gap-5 flex-row justify-content-center align-content-center">
                        <div class="card border-0 d-flex flex-column justify-content-center align-content-center"
                            style="width: 18rem">
                            <div class="m-auto pt-2" style="width: 100px; height: 100px">
                                <img src="./img/review/businessman.png" class="card-img-top rounded-circle" alt="..."
                                    width="100" height="100" />
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-content-center">
                                <p class="fs-6 fw-semibold m-auto">Andika S</p>
                                <p class="card-text fs-6 fw-normal text-center">
                                    Pelayanan sangat baik dan harga sangat terjangkau.
                                </p>
                            </div>
                        </div>
                        <div class="card border-0 d-flex flex-column justify-content-center align-content-center"
                            style="width: 18rem">
                            <div class="m-auto pt-2" style="width: 100px; height: 100px">
                                <img src="./img/review/businessman.png" class="card-img-top rounded-circle" alt="..."
                                    width="100" height="100" />
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-content-center">
                                <p class="fs-6 fw-semibold m-auto">Saiful A</p>
                                <p class="card-text fs-6 fw-normal text-center">
                                    sangat mudah dan simpel sekali belanja di BELANJAMUDAH.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <section class="d-flex gap-5 flex-row justify-content-center align-content-center">
                        <div class="card border-0 d-flex flex-column justify-content-center align-content-center"
                            style="width: 18rem">
                            <div class="m-auto pt-2" style="width: 100px; height: 100px">
                                <img src="./img/review/businessman.png" class="card-img-top rounded-circle" alt="..."
                                    width="100" height="100" />
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-content-center">
                                <p class="fs-6 fw-semibold m-auto">Aminah Putri</p>
                                <p class="card-text fs-6 fw-normal text-center">
                                    Pembayaran sangat simple dan pelayanan terbaik.
                                </p>
                            </div>
                        </div>
                        <div class="card border-0 d-flex flex-column justify-content-center align-content-center"
                            style="width: 18rem">
                            <div class="m-auto pt-2" style="width: 100px; height: 100px">
                                <img src="./img/review/businessman.png" class="card-img-top rounded-circle" alt="..."
                                    width="100" height="100" />
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-content-center">
                                <p class="fs-6 fw-semibold m-auto">Sifaul q</p>
                                <p class="card-text fs-6 fw-normal text-center">
                                    Banyak diskon saat belanja ke toko langsung.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="d-flex gap-5 flex-row justify-content-center align-content-center">
                        <div class="card border-0 d-flex flex-column justify-content-center align-content-center"
                            style="width: 18rem">
                            <div class="m-auto pt-2" style="width: 100px; height: 100px">
                                <img src="./img/review/businessman.png" class="card-img-top rounded-circle" alt="..."
                                    width="100" height="100" />
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-content-center">
                                <p class="fs-6 fw-semibold m-auto">Indra Panji</p>
                                <p class="card-text fs-6 fw-normal text-center">
                                    Alhamdulillah sangat dipermudah sekali.
                                </p>
                            </div>
                        </div>
                        <div class="card border-0 d-flex flex-column justify-content-center align-content-center"
                            style="width: 18rem">
                            <div class="m-auto pt-2" style="width: 100px; height: 100px">
                                <img src="./img/review/businessman.png" class="card-img-top rounded-circle" alt="..."
                                    width="100" height="100" />
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-content-center">
                                <p class="fs-6 fw-semibold m-auto">Putri Ratna</p>
                                <p class="card-text fs-6 fw-normal text-center">
                                    Sistem COD sangat membantu banget bagi ibu karir seperti
                                    saya.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon text-black bg-success rounded-2 p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next text-black" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon bg-success rounded-2 p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- ------------------ / review / ----------------  -->


<?= $this->endSection(); ?>