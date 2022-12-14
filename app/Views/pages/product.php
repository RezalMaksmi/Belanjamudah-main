<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- ------------- bg atas -------------  -->
<section class="bg-light mt-5" id="home">
    <div class="container-sm">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/1.png" class="d-block w-100" alt="..." style=" filter: brightness(50%);" />
                </div>
                <div class="carousel-item">
                    <img src="/img/4.png" class="d-block w-100" alt="..." style=" filter: brightness(50%);" />
                </div>
                <div class="carousel-item">
                    <img src="/img/5.png" class="d-block w-100" alt="..." style=" filter: brightness(50%);" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <div class="pencarian position-absolute top-50 start-50 translate-middle">
                <h1 class="text-white fw-bold"> BELANJA<span class="text-warning">MUDAH</span></h1>
                <div class="max-w-sm d-flex justify-content-center">
                    <form class="form-search d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari Kebutuhan dapur"
                            aria-label="Search" />
                        <button class="tombol-search btn btn-success btn-xxl" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- ----------------- / bg atas / -------------------  -->
<!-- ----------------- Product -------------------  -->
<div class="">
    <section class="pt-5 pb-5" id="product">
        <h2 class="m-auto d-flex justify-content-center text-success">Product</h2>
        <div class="bungkus-atas container text-center mt-sm-5 ">
            <div
                class="wrapping row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-2 m-auto d-flex justify-content-center align-content-center">
                <?php foreach($product as $p) : ?>
                <div class="wrap-kartu mb-xxl-5 mb-3 d-flex justify-content-center align-content-center col-4 col-13">
                    <div class="kartu card " style="width: 18rem">
                        <div class="img gambar" style=" widht:100%; overflow:hidden;">
                            <img src="/img/<?= $p['data_gambar']; ?>" class="card-img-top" alt="..." />
                        </div>
                        <div class="card-body">
                            <p class="nama-barang  fw-semibold "><?= $p['nama_barang']; ?></p>
                            <p class="harga fw-semibold">Rp.<?= $p['harga']; ?></p>
                            <p class="deskripsi card-text">
                                <?= $p['deskripsi']; ?>
                            </p>
                            <a href="https://wa.me/082141329712?text=halo%20saya%20mau%20pesan%20<?= $p['nama_barang'];?>"
                                type="button" class="btn-pesan btn btn-warning text-white">Pesan</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<!-- ----------------- / Product / -------------------  -->


<?= $this->endSection(); ?>