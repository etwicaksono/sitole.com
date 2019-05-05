<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login_form_inner">
                    <!-- <form class="row login_form" action="" method="post" id="contactForm" novalidate="novalidate">

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
                    <form class="row login_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
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
                    </form> -->


                    <!--===================================tester=============================-->
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?= '1' ?>" name="id_user">
                        <input type="hidden" value="<?= '1' ?>" name="kategori">
                        <table>
                            <tr>
                                <td>Nama Barang</td>
                                <td>:</td>
                                <td><input type="text" name="nama_barang"></td>
                                <?= form_error('nama_barang','<small class="text-danger pl-4">','</small>')."</br>";?>
                            </tr>
                            <tr>
                                <td>Harga Barang</td>
                                <td>:</td>
                                <td><input type="text" name="harga_barang"></td>
                                <?= form_error('harga_barang','<small class="text-danger pl-4">','</small>')."</br>";?>
                            </tr>
                            <tr>
                                <td>Sub Kategori</td>
                                <td>:</td>
                                <td>
                                    <select name="sub_kategori" id="sub_kategori">
                                        <option value="1">Elektronika</option>
                                        <option value="2">Otomotif </option>
                                        <option value="5">Fashion</option>
                                    </select>
                                    <?= form_error('sub_kategori','<small class="text-danger pl-4">','</small>')."</br>";?>
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea></td>
                                <?= form_error('deskripsi','<small class="text-danger pl-4">','</small>')."</br>";?>
                            </tr>
                            <tr>
                                <td>Stok Barang</td>
                                <td>:</td>
                                <td><input type="text" name="stok_barang"></td>
                                <?= form_error('stok_barang','<small class="text-danger pl-4">','</small>')."</br>";?>
                            </tr>
                            <tr>
                                <td>Gambar</td>
                                <td>:</td>
                                <td><input type="file" name="foto_barang"></td>

                                <?= form_error('foto_barang','<small class="text-danger pl-4">','</small>')."</br>";?>
                            </tr>
                        </table>
                        <button type="submit">Submit!</button>
                    </form>





                    <!--============================end of tester ==============================================-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->