<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengaturan Item
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('auth'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('item'); ?>">Pengaturan Item</a></li>
            <li class="active">Barang</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Barang</h3>
                <div class="box-tools pull-right">
                    <a href="<?= base_url('item/upload_barang'); ?>" class="btn btn-primary">Upload Barang</a>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fa fa-times"></i></button> -->
                </div>
            </div>
            <div class="box-body">
                <!-- Main scope -->
                <table border="1">
                    <tr>
                        <th class="col-lg-1 text-center">No</th>
                        <th class="col-lg-4 text-center">Nama Barang</th>
                        <th class="col-lg-2 text-center">Harga Barang (Rp)</th>
                        <th class="col-lg-1 text-center">Kategori</th>
                        <th class="col-lg-1 text-center">Sub Kategori</th>
                        <th class="col-lg-1 text-center">Stok</th>
                        <th class="col-lg-1 text-center">Gambar</th>
                        <th class="col-lg-1 text-center">Aksi</th>
                    </tr>
                    <?php
                    $no = $this->uri->segment('3') + 1;
                    foreach ($barang as $u) {
                        ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-left"><span class="m-1"
                                style="margin-left:10px;"><?php echo $u->nama_barang ?></span></td>
                        <td class="text-center"><?php
                                                    $harga_barang = $u->harga_barang;
                                                    echo number_format($harga_barang, 2, ',', '.');
                                                    ?></td>
                        <td class="text-center"><?php
                                                    $kategori = $u->kategori;
                                                    if ($kategori == 1) {
                                                        echo "Barang";
                                                    } else if ($kategori == 2) {
                                                        echo "Jasa";
                                                    } else {
                                                        echo "unidentified";
                                                    }
                                                    ?></td>
                        <td class="text-center"><?php
                                                    $sub_kategori = $u->sub_kategori;
                                                    switch ($sub_kategori) {
                                                        case '1':
                                                            echo "Otomotif";
                                                            break;
                                                        case '2':
                                                            echo "Fashion";
                                                            break;
                                                        case '3':
                                                            echo "Elektronik";
                                                            break;
                                                        case '4':
                                                            echo "Makanan";
                                                            break;
                                                        case '5':
                                                            echo "Rumah Tangga";
                                                            break;
                                                        default:
                                                            echo "Lain-lain";
                                                            break;
                                                    } ?></td>
                        <td class="text-center"><?= $u->stok_barang; ?></td>
                        <td class="text-center"><img src="<?= base_url('assets/img/product/') . $u->gbr_barang ?>"
                                alt="Gambar Produk" class="img-thumbnail col-lg-12"></td>
                        <td class="text-center"><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                    </tr>
                    <?php } ?>
                </table>
                <br />
                <?php
                echo $this->pagination->create_links();
                ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->