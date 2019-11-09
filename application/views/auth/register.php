<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>NEXT</b>Com</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Jadilah Bagian dari Kami</p>

            <form action="<?= base_url('auth/register') ?>" method="post">
                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control datepicker" placeholder="Tanggal Lahir" value="<?= set_value('tgl_lahir') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-calendar-alt"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" value="<?= set_value('alamat') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-address-card"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password2', '<small class="text-danger">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?= base_url('auth') ?>" class="text-center">Saya Sudah Punya Akun</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->