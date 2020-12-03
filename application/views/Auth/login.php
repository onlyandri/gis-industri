<div class="main">

<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="<?= base_url('assets/login/'); ?>images/signin-image.jpg" alt="sing up image"></figure>
            </div>
            <div class="signin-form">
                <div style="background-color: khaki; text-align: center;"><?= $this->session->flashdata('message'); ?></div>
                <br>
                <h2 class="form-title">Login inGIS</h2>
                <form method="post" action="<?= base_url('auth'); ?>" class="register-form">
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="email" id="email" placeholder="Email" />
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" />
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('auth/registration'); ?>" class="signup-image-link">Buat Akun Baru!</a>
                        <a href="<?= base_url('auth/forgotpassword'); ?>" class="signup-image-link">Lupa Password ?</a>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>