<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Data User</h1>
                            <?= $this->session->flashdata('message_wp'); ?>
                            <?= $this->session->flashdata('message_upload'); ?>
                            <?= $this->session->flashdata('message_pass'); ?>
                            <?= $this->session->flashdata('message_edit'); ?>
                        </div>
                        <form class="user" method="post" action="<?= base_url('user') ?>" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="nama_asli">Nama </label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-user" id="nama_asli"
                                        name="nama_asli" value="<?= $_SESSION['nama_asli']; ?>">
                                    <?= form_error('nama_asli','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="username">Username </label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-user" id="username"
                                        name="username" value="<?= $_SESSION['username']; ?>" readonly>
                                    <?= form_error('username','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="email">Alamat Email </label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-user" id="email" name="email"
                                        value="<?= $_SESSION['email']; ?>" readonly>
                                    <?= form_error('email','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="no_hp">Nomor HP </label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp"
                                        value="<?= $_SESSION['no_hp']; ?>">
                                    <?= form_error('no_hp','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="foto">Foto</label>
                                </div>
                                <div class="col-sm-9">
                                    <?php $foto = $_SESSION['foto']; ?>
                                    <img src="<?= base_url('assets/img/profile/'.$foto) ?>" alt="Profile Photo"
                                        class="img-thumbnail col-lg-5">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto"
                                            value="<?= $_SESSION['foto']; ?>">
                                        <label for="customFile" class="custom-file-label">Pilih File</label>
                                    </div>
                                    <?= form_error('foto','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="password1">Password Lama </label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control form-control-user" id="password1"
                                        name="password1">
                                    <input type="hidden" name="password2" value="<?= $_SESSION['password']; ?>">
                                    <?= form_error('password1','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="password2">Password Baru </label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control form-control-user" id="password3"
                                        name="password3">
                                    <?= form_error('password3','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="password4"> Ulangi Password Baru </label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control form-control-user" id="password4"
                                        name="password4">
                                    <?= form_error('password4','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group shadow-textarea">
                                <textarea class="form-control z-depth-1" name="alamat" rows="5"
                                    cols="62"><?= $_SESSION['alamat']; ?></textarea>
                                <?= form_error('alamat','<small class="text-danger pl-4">','</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Update Data User
                            </button>
                        </form>

                        <a href="<?= base_url('auth'); ?>" class="btn btn-primary btn-user btn-block mt-2">Back to
                            Dashboard</a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>