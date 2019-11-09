<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <?= $this->session->flashdata('messages'); ?>
            <p class="login-box-msg">Silakan Masuk Untuk Melanjutkan</p>

            <form action="<?= base_url('auth') ?>" method="post">
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mb-1">
                <a href="#">Lupa Password?</a>
            </p>
            <p class="mb-0">
                <a href="<?= base_url('auth/register') ?>" class="text-center">Belum Punya Akun? Daftar Sekarang!</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>