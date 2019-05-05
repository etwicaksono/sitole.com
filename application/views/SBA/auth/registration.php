<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('Auth/registration') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama_asli"
                                    name="nama_asli" placeholder="Nama Lengkap" value="<?= set_value('nama_asli'); ?>">
                                <?= form_error('nama_asli','<small class="text-danger pl-4">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" name="username"
                                    placeholder="User Name" value="<?= set_value('username'); ?>">
                                <?= form_error('username','<small class="text-danger pl-4">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email"
                                    placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                <?= form_error('email','<small class="text-danger pl-4">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp"
                                    placeholder="Nomor HP" value="<?= set_value('no.hp'); ?>">
                                <?= form_error('no_hp','<small class="text-danger pl-4">','</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1"
                                        name="password1" placeholder="Password">
                                    <?= form_error('password1','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2"
                                        name="password2" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <div class="form-group shadow-textarea">
                                <textarea class="form-control z-depth-1" name="alamat" rows="5" cols="62"
                                    placeholder="Alamat" value="<?= set_value('alamat'); ?>"></textarea>
                                <?= form_error('alamat','<small class="text-danger pl-4">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="foto" value="default.jpg">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Akun
                            </button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>