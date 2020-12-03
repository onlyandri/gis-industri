<div class="main">

    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="<?= base_url('assets/login/'); ?>images/heh.png" alt="sing up image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Lupa Password?</h2>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="register-form" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>" />
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Reset Password" />
                        </div>
                        <div class="form-group">
                            <a href="<?= base_url('auth'); ?>" class=" signup-image-link">Kembali ke Login!</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</div>