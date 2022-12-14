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
    <title>Tambah Product</title>
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-8 border-1">
                <h2 class="my-3 text-success">Form Tambah Data</h2>

                <form action="/admin/save" method="post">
                    <?= csrf_field(); ?>
                    <!-- untuk menjaga agar formnya hanya bisa diinput lewat halaman ini saja -->
                    <div class="form-group row mb-4">
                        <label for="nama_barang" class="col-sm-2 col-form-label">nama barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" autofocus>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="data_gambar" class="col-sm-2 col-form-label">gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="data_gambar" name="data_gambar">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Barang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>