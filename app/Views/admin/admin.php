<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>

    <!-- ----------------- Product -------------------  -->
    <div class="">
        <section class="pt-5 pb-5" id="product">
            <h2 class="m-auto d-flex justify-content-center text-success">Product</h2>
            <div class="container text-center mt-5">
                <a href="/admin/create" type="button" class="btn btn-primary mb-4 w-5" style="">Tambah Product</a>
                <div
                    class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1 m-auto d-flex justify-content-center align-content-center">
                    <?php foreach($product as $p) : ?>
                    <div class="mb-xxl-5 mb-3 d-flex justify-content-center align-content-center col-4 col-9">
                        <div class="card" style="width: 18rem">
                            <div class="img" style="height: 200px; widht:100%; overflow:hidden;">
                                <img src="/img/<?= $p['data_gambar']; ?>" class="card-img-top" alt="..." />
                            </div>
                            <div class="card-body">
                                <p><?= $p['nama_barang']; ?></p>
                                <p>Rp.<?= $p['harga']; ?></p>
                                <p class="card-text">
                                    <?= $p['deskripsi']; ?>
                                </p>
                            </div>
                            <button type="button" class="btn btn-primary mb-4 w-5" style="">Edit</button>
                            <button type="button" class="btn btn-danger mb-4 w-5">Delete</button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
    <!-- ----------------- / Product / -------------------  -->


</body>

</html>