<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <!-- <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol> -->

    </section>

    <!-- Main content -->
    <section class="content bg-dark" style="padding-top:0px; margin-top:0px;">

        <!-- Default box -->
        <div class="box bg-aqua" style="height:100vh;">
          <div class="row">
            <div class="col-md-12">
              <div id="contoh-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#contoh-carousel" data-slide-to="1"></li>
                  <li data-target="#contoh-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="<?= base_url('assets/img/slide 1.jpg') ?>" alt="Gambar Pertama" style="width: 100%;height:300px;">
                    <div class="carousel-caption">
                      <h3>SLIDE 1</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?= base_url('assets/img/slide 2.jpg') ?>" alt="Gambar Kedua" style="width: 100%;height:300px;">
                    <div class="carousel-caption">
                      <h3>SLIDE 2</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?= base_url('assets/img/slide 3.png') ?>" alt="Gambar Ketiga" style="width: 100%;height:300px;">
                    <div class="carousel-caption">
                      <h3>SLIDE 3</h3>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Prev</span>
                </a>
                <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>

          <div>
            <table class="table table-striped table-bordered" style="width: 80%;margin:auto;">
              <thead>
                <tr>
                  <th colspan="2" class="text-center">KATEGORI</th>
                </tr>
                <tr>
                  <th class="text-center" style="width:50%;">BARANG</th>
                  <th class="text-center">JASA</th>
                </tr>
              </thead>
                <tr>
                  <td><a href="#">Elektronik</a></td>
                  <td><a href="#">Transportasi</a></td>
                </tr>
                <tr>
                  <td><a href="#">Otomotif</a></td>
                  <td><a href="#">Rumah Tangga</a></td>
                </tr>
                <tr>
                  <td><a href="#">Fashion</a></td>
                  <td><a href="#">Kesehatan</a></td>
                </tr>
            </table>
          </div>
            <!-- <div class="box-header with-border">
                <h3 class="box-title">Title</h3>

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
                Start creating your amazing application!
            </div> -->
            <!-- /.box-body -->
            <!-- <div class="box-footer">
                Footer
            </div> -->
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
