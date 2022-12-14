<?= $this->extend('Views/layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container mt-5 pt-5 mb-5">
    <div class="row justify-content-md-center">
        <div class="col-6">
            <h2 class="text-success mb-3">Sign In</h2>
            <!-- <div class="alert alert-danger"></div> -->
            <form action="/login/auth" method="post">
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="InputForEmail" value="">
                </div>
                <div class="mb-3">
                    <label for="InputForPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>
                <button type="submit" class="btn btn-success">Login</button>
                <a href="<?= base_url('/register');  ?>" class="m-3">buat akun</a>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>