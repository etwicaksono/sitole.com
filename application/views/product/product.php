<!--================Login Box Area =================-->
<!-- <section class="progress-table"> -->
<!-- <div class="container"> -->
<section class="container" style="margin-top: 10px;">
    <div class=" row">
        <div class="col-sm-4">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Cari Produk">
                </div>
            </form>
        </div>
        <div class="col-sm-4 offset-sm-4">
            <form action="" method="post">
                <button type="button" name="edit" class="btn btn-info">+ Tambah Produk Baru</button>
            </form>
        </div>
    </div>
</section>
<!-- </div> -->

<table class="table table-striped table-light table-bordered text-center">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Product</th>
            <th scope="col">Harga</th>
            <th scope="col">Stock</th>
            <th scope="col">Penjualan</th>
            <th scope="col">Status</th>
        </tr>
    </thead>


    <?php $i = 1;
    $x = 0;
    ?>

    <?php
    foreach ($barang as $product) :
        ?>

    <tbody>
        <tr>
            <th scope="row">
                <?= $i; ?>
            </th>
            <td class="text-left">
                <img src="<?= base_url('assets/img/').$barang[$x]['gbr_barang'] ?>" alt="gambar product" width="50px">
                <?= $barang[$x]["nama_barang"]; ?>
            </td>
            <td>
                <?= $barang[$x]["harga_barang"]; ?>
            </td>
            <td>
                <?= $barang[$x]["stok_barang"]; ?>
            </td>
            <td>
                10
                <!-- $product["penjualan"]; -->
            </td>
            <td>
                <button type="button" name="edit" class="btn btn-secondary btn-sm">Edit</button>
                <button type="button" name="hapus" class="btn btn-danger btn-sm">Hapus</button>
            </td>

        </tr>
        <?php $x++;
        $i++; ?>
    </tbody>
    <?php
endforeach;
?>
</table>
<!-- </section> -->
<!--================End Login Box Area =================-->