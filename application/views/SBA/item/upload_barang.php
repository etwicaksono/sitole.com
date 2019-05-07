<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Upload Barang!</h1>
                        </div>
                        <form class="user" method="post" enctype="multipart/form-data"
                            action="<?= base_url('item/upload_barang') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama_barang"
                                    name="nama_barang" placeholder="Nama Barang"
                                    value="<?= set_value('nama_barang'); ?>">
                                <?= form_error('nama_barang','<small class="text-danger pl-4">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Harga Barang Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" name="harga_barang">
                                    <?= form_error('harga_barang','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="sub_kategori">Sub Kategori:</label>
                                    <select class="form-control" id="sub_kategori" name="sub_kategori">
                                        <option value="1">Otomotif</option>
                                        <option value="2">Fashion</option>
                                        <option value="3">Elektronik</option>
                                    </select>
                                    <?= form_error('sub_kategori','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                                <div class="form-group shadow-textarea">
                                    <textarea class="form-control z-depth-1" name="deskripsi" rows="5" cols="62"
                                        placeholder="Deskripsi Barang" value="<?= set_value(''); ?>"></textarea>
                                    <?= form_error('deskripsi','<small class="text-danger pl-4">','</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="stok_barang">Stok Barang:</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control" id="stok_barang" name="stok_barang"
                                            placeholder="0" value="<?= set_value('stok_barang'); ?>">
                                        <?= form_error('Stok_barang','<small class="text-danger pl-4">','</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" multiple>
                                </div>
                                <input type="hidden" name="kategori" value="1">
                                <input type="hidden" name="kategori" value="1">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Jual Barang
                                </button>

                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>