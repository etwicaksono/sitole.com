<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Upload Jasa!</h1>
                            <?php if (isset($_POST['nama_barang'])) {
                echo $this->session->flashdata('message_form');
              } ?>
                            <?= $this->session->flashdata('message_upload'); ?>
                            <?= $this->session->flashdata('message_insert'); ?>
                            <?= $this->session->flashdata('message_login'); ?>
                            <?= $this->session->flashdata('message_relogin'); ?>
                        </div>
                        <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama_jasa"
                                    name="nama_jasa" placeholder="Nama Jasa" value="<?= set_value('nama_jasa'); ?>">
                                <?= form_error('nama_jasa', '<small class="text-danger pl-4">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Harga Jasa Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" name="harga_jasa">
                                    <?= form_error('harga_jasa', '<small class="text-danger pl-4">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="sub_kategori">Sub Kategori:</label>
                                    <select class="form-control" id="sub_kategori" name="sub_kategori">
                                        <option value="1">Transportasi</option>
                                        <option value="2">Rumah Tangga</option>
                                        <option value="3">Kesehatan</option>
                                    </select>
                                    <?= form_error('sub_kategori', '<small class="text-danger pl-4">', '</small>'); ?>
                                </div>
                                <div class="form-group shadow-textarea">
                                    <textarea class="form-control z-depth-1" name="deskripsi" rows="5" cols="62"
                                        placeholder="Deskripsi Jasa"><?= set_value('deskripsi'); ?></textarea>
                                    <?= form_error('deskripsi', '<small class="text-danger pl-4">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label for="estimasi_kerja">Estimasi Pengerjaan:</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="estimasi_kerja"
                                            name="estimasi_kerja" placeholder="0"
                                            value="<?= set_value('estimasi_kerja'); ?>">
                                        <?= form_error('estimasi_kerja', '<small class="text-danger pl-4">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="waktu_estimasi">
                                            <option value="<?= $val = 3600; ?>">JAM</option>
                                            <option value="<?= $val = 3600 * 24; ?>">HARI</option>
                                            <option value="<?= $val = 3600 * 24 * 7; ?>">MINGGU</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto"
                                            value="<?= $_SESSION['foto']; ?>">
                                        <label for="customFile" class="custom-file-label">Pilih File</label>
                                    </div>
                                    <?= form_error('foto', '<small class="text-danger pl-4">', '</small>'); ?>
                                </div>
                                <input type="hidden" name="kategori" value="1">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Jual Jasa
                                </button>

                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>