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
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <!-- Main scope -->
                <table border="1">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Kategori</th>
                        <th>Sub Kategori</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
		$no = $this->uri->segment('3') + 1;
		foreach($barang as $u){ 
		?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $u->nama_barang ?></td>
                        <td><?php echo $u->harga_barang ?></td>
                        <td><?php 
                        $kategori = $u->kategori;
                        if ($kategori == 1){
                            echo "Barang";
                        }else if($kategori == 2){
                            echo "Jasa";
                        }else{
                            echo "unidentified";
                        }
                        ?></td>
                        <td><?php
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
                             default:
                                 echo $sub_kategori;
                                 break;
                         } ?></td>
                        <td><?= $u->stok_barang; ?></td>
                        <td><img src="<?= base_url('assets/img/product/').$u->gbr_barang ?>" alt="Gambar Produk"
                                class="col-lg-1"></td>
                        <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
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