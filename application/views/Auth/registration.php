<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Daftar Akun</h2>
                    <form class="register-form" action="<?= base_url('auth/registration'); ?>  " method="POST">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Nama Lengkap" />
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" />
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-gps-dot"></i></label>
                            <input type="text" name="desa" id="desa" placeholder="Desa" />
                            <?= form_error('desa', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-gps-dot"></i></label>
                            <input type="text" name="kecamatan" id="kecamatan" placeholder="Kecamatan" />
                            <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password1"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password1" id="password1" placeholder="Password" />
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password2" id="password2" placeholder="Ulangi Password" />
                        </div>
                        <a href="<?= base_url('auth'); ?>" class="signup-image-link">Sudah punya akun? Login!</a>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar" />
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="<?= base_url('assets/login/'); ?>images/signup-image.jpg" alt="sing up image"></figure>
                </div>
            </div>
        </div>
    </section>

</div>