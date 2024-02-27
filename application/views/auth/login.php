        <!-- Sing in  Form -->
        <section class="sign-in" style="background-color: #6DABE4;">
            <div class="container">
                <div class="signin-content">
                    <img src="<?= base_url() ?>assets/auth/images/signup-image.jpg">
                    <div class="signin-form">
                        <h2 class="form-title text-center">NaFlavrrs's <h6 class="text-center">LOGIN HERE</h6></h2>
                        <form action="<?= base_url() ?>auth/prosesLoginPegawai" method="POST" class="register-form" id="login-form">
                            <?= $this->session->flashdata('message'); ?><br>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Email" autofocus required />
                            </div>
                            <div class="form-group">
                                <label for="Password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <a href="<?= base_url() ?>lupapassword/reset">Lupa Password?</a>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                                <a href="<?= base_url() ?>home" class="btn btn btn-info shadow-sm mb-10 mr-3"><i class="fas fa-arrow-left fa-sm text-white-70"></i> Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>