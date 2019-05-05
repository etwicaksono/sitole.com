<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
                <div class="login_form_inner">
                    <form class="row login_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-12 form-group" >
                          <h2>DATA JASA</h2>
                          <label for="nama_barang">NAMA JASA : </label><input type="text" class="form-control" id="name" name="nama_jasa" placeholder="Nama Jasa">
                        </div>
                        <div class="col-md-12 form-group">
                          KATEGORI JASA :
                            <select class="form-control" name="kategori_jasa">
                              <option value="rumah_tangga">RUMAH TANGGA</option>
                              <option value="kesehatan">KESEHATAN</option>
                              <option value="transportasi">TRANSPORTASI</option>
                            </select>
                        </div>
                      </form>
                  </div>
           </div>
           <br><br>
           <div class="col-lg-12">
               <div class="login_form_inner">
                   <form class="row login_form" action="contact_process.php" method="post" id="contactForm"
                       novalidate="novalidate">
                       <div class="col-md-12 form-group">
                         <h2>DETAIL JASA</h2>
                           HARGA JASA : <input type="text" class="form-control" id="name" name="harga_jasa" placeholder="Harga Jasa" >
                       </div>
                       <div class="col-md-12 form-group">
                           <textarea name="deskripsi_jasa" rows="8" cols="50" placeholder="Deskripsi Jasa"></textarea>
                       </div>
                       <div class="col-md-12 form-group">
                        Foto Jasa : <input type="file" class="form-control" name="foto_barang " multiple>
                      </div>
                      <div class="col-md-12 form-group">
                       <button type="submit" name="jual_button" class="primary-btn">JUAL</button>
                     </div>
                   </form>
               </div>
           </div>
           <br><br>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
