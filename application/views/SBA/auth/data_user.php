<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Data User</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('Auth/registration') ?>">
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="nama_asli">Nama </label>
                                </div>g
                                <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-user" id="nama_asli"
                                      name="nama_asli" value="<?= $this->session->get_userdata()['nama_asli']; ?>">
                                  <?= form_error('nama_asli','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="nama_asli">Username </label>
                                </div>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-user" id="username" value="<?= $this->session->get_userdata()['username']; ?>">
                                  <?= form_error('username','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="nama_asli">Alamat Email </label>
                                </div>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= $this->session->get_userdata()['email']; ?>">
                                  <?= form_error('email','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="nama_asli">Nomor HP </label>
                                </div>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?= $this->session->get_userdata()['no_hp']; ?>">
                                  <?= form_error('no_hp','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="nama_asli">Foto</label>
                                </div>
                                <div class="col-sm-9">
                                  <input type="image" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?= $this->session->get_userdata()['foto']; ?>">
                                  <?= form_error('no_hp','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="nama_asli">Password Lama </label>
                                </div>
                                <div class="col-sm-4">
                                  <input type="password" class="form-control form-control-user" id="password1"
                                      name="password1" value="<?= $this->session->get_userdata()['password']; ?>">
                                  <?= form_error('password1','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="nama_asli">Password Baru </label>
                                </div>
                                <div class="col-sm-4">
                                  <input type="password" class="form-control form-control-user" id="password1"
                                      name="password2">
                                  <?= form_error('password1','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="nama_asli"> Ulangi Password Baru </label>
                                </div>
                                <div class="col-sm-4">
                                  <input type="password" class="form-control form-control-user" id="password1"
                                      name="password3">
                                  <?= form_error('password1','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group shadow-textarea">
                                <textarea class="form-control z-depth-1" name="alamat" rows="5" cols="62"
                                    placeholder="<?= $this->session->get_userdata()['alamat']; ?>"></textarea>
                                <?= form_error('alamat','<small class="text-danger pl-4">','</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Update Data User
                            </button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
