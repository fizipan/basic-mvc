<div class="nav">
    <header>
    </header>
    <div class="card" style="position: absolute; top: 60px">
        <div class="card-body">
            <h5 class="card-title">Register</h5>
            <?php Messages::message(); ?>
            <h6 class="card-subtitle mb-2 text-muted pt-2">Silahkan Daftar dan isi dengan username dan
                paswword anda</h6>

            <form action="<?= BASEURL; ?>/register/insertdata" method="POST">
                <div class="input-group flex-nowrap pt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="username" required>
                </div>
                <div class="input-group flex-nowrap pt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="addon-wrapping" name="password" required>
                </div>
                <div class="input-group flex-nowrap pt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Konfirmasi Password" aria-label="password" aria-describedby="addon-wrapping" name="password2" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3 ml-4" style="width: 330px;" name="login">Registrasi</button>
            </form>
        </div>
        <a href="<?= BASEURL; ?>/login" style="text-align: center">sudah punya akun?</a>
    </div>
</div>
<footer>
    <p>&copy; Copyright 2020 Hafizh Maulana Y</p>
</footer>