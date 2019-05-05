<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login_form_inner">
                    <?= form_open_multipart('product/upload_product') ?>
                    <div class="row login_form" action="" method="post" id="contactForm" novalidate="novalidate"
                        enctype="mmultipart/form-data">
                        <input type="hidden" value="<?= 1 ?>" name="id_user">
                        <div class="col-md-12 form-group">
                            <h2>DATA BARANG</h2>
                            <label for="nama_barang">NAMA BARANG : </label><input type="text" class="form-control"
                                id="name" name="nama_barang" placeholder="Nama Barang">
                        </div>
                        <div class="col-md-12 form-group">
                            KATEGORI BARANG :
                            <select class="form-control" name="kategori_barang">
                                <option value="elektronik">ELEKTRONIK</option>
                                <option value="otomotif">OTOMOTIF</option>
                                <option value="fashion">FASHION</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="col-lg-12">
                    <div class="login_form_inner">

                        <div class="col-md-12 form-group">
                            <h2>DETAIL BARANG</h2>
                            HARGA BARANG : <input type="text" class="form-control" id="name" name="harga_barang"
                                placeholder="Harga Barang">
                        </div>
                        <div class="col-md-12 form-group">
                            STOK BARANG : <input type="number" class="form-control" id="name" name="stok_barang"
                                placeholder="Stok Barang">
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="col-lg-12">
                    <div class="login_form_inner">
                        <div class="col-md-12 form-group">
                            <h2>DESKRIPSI BARANG</h2>
                            <textarea name="deskripsi_barang" rows="8" cols="50"></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            Foto Barang : <input type="file" class="form-control" name="foto_barang">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" name="jual_button" class="primary-btn">JUAL</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->