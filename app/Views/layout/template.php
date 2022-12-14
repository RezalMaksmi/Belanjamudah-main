<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- j query  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <style>
    section div .wrapping .wrap-kartu .kartu .gambar {
        height: 200px;
    }

    .layanan {
        padding-top: 30px;
    }

    .bg-color {
        background-color: #F8F8FF;
    }

    .bg-nav-default {
        background-color: #F8F8FF;
        transition: ease all .8s;
        -webkit-transition: ease all .8s;
        -moz-transition: ease all .8s;
        -o-transition: ease all .8s;
    }

    .bg-color-nav {
        background-color: #F8F8FF;
        box-shadow: 0px 4px 30px 4px rgba(0, 0, 0, 0.25);
    }



    @media (max-width: 576px) {
        section div #carouselExampleIndicators .wrap-belanja .belanja {
            font-size: 12px;
            padding: 4px 5px;

        }

        section div #carouselExampleIndicators .pencarian .form-search input {
            font-size: 12px;
            height: 30px;
        }

        section div #carouselExampleIndicators .pencarian .form-search .tombol-search {
            font-size: 12px;
            padding: 3px 5px;
            height: 30px;
        }

        .layanan {
            padding-top: 20px;
        }

        .layanan div .info-center {
            display: flex;
            justify-content: end;
            background-color: #F8F8FF;

        }

        .layanan div .info-center div .card-info h5,
        .p-info {
            text-align: right;
        }



        section .bungkus-atas {
            margin-top: 15px;
        }

        section div .wrapping {
            gap: 3;
        }

        section div .wrapping .wrap-kartu .kartu .gambar {
            height: auto;
        }

        section div .kartu .card-body {
            padding: 2px;
        }

        section div .kartu .card-body .nama-barang {
            font-size: 9px;
            width: 100%;
            margin: 0;
        }

        section div .kartu .card-body .deskripsi {
            font-size: 7px;
            margin: 0;
            padding: 0;
            line-height: 1.3;
        }

        section div .kartu .card-body .harga {
            font-size: 7px;
            margin: 2px;
            padding: 0;

        }

        section div .kartu .card-body .btn-pesan {
            font-size: 7px;
            padding: 2px 5px;
            margin-bottom: 5px;
            border-radius: 3px;
        }

    }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title><?= $title; ?></title>
</head>

<body>
    <!-- ---------------- navigasi ----------------  -->
    <section class="position-fixed top-0 start-50 translate-middle-x w-100" style="z-index: 1030">
        <nav class="navbar navbar-expand-lg bg-nav-default">
            <div class="container py-2 d-flex justify-content-evenly">
                <a class="navbar-brand flex-fill text-success fw-semibold fs" href="/">BELANJAMUDAH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto  flex-fill d-flex justify-content-end gap-3">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url('/product'); ?>">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url('/'); ?>">Reviuw</a>
                        </li>

                        <?php if (logged_in()) : ?>
                        <li class="nav-item">
                            <a type="button" class="btn btn-outline-success"
                                href="<?= base_url('/logout'); ?>">Logout</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a type="button" class="btn btn-outline-success" href="<?= base_url('/login'); ?>">Login</a>
                        </li>
                        <?php endif; ?>

                    </ul>
                    <section>




                    </section>
                </div>
            </div>
        </nav>
        <script src="navigasi.js"></script>
    </section>
    <!-- ----------------/ navigasi /----------------  -->


    <?= $this->renderSection('content'); ?>


    <!-- ---------------- footer ----------------  -->
    <footer class="text-center text-lg-start bg-color text-muted">
        <section class="pt-3">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            BELANJAMUDAH
                        </h6>
                        <p>
                            Belanja kebutuhan rumah tangga mudah dan praktis, hanya di
                            BELANJAMUDAH.COM dengan berbagai macam kebutuhan pasar yang
                            lengkap.
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Follow Use</h6>
                        <p>
                            <a href="/" class="text-reset">Instagram</a>
                        </p>
                        <p>
                            <a href="/" class="text-reset">Facebook</a>
                        </p>
                        <p>
                            <a href="/" class="text-reset">Youtube</a>
                        </p>
                        <p>
                            <a href="/" class="text-reset">Tiktok</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
                        <p>
                            <a href="/" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="/" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="/" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="/" class="text-reset">Help</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p>Kec. Kesamben Kab. Blitar desa tapakrejo Rt.04 Rw.03</p>
                        <p>rezalnurscc@gmail.com</p>
                        <p> +6282141329712</p>
                        <p> +6282141329716</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
            ©2022 Copyright:
            <a class="text-reset fw-bold" href="">BELANJAMUDAH.COM</a>
        </div>
    </footer>
    <!-- Footer -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        once: true
    });
    </script>

</body>

</html>