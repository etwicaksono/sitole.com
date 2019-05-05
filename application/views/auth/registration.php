<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="<?= base_url('vendor/') ?>img/login.jpg" alt="">
                    <div class="hover">
                        <h4>New to our website?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this
                            is
                            the</p>
                        <!-- <a class="primary-btn" href="registration.html">Create an Account</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>REGISTER</h3>
                    <form class="row login_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="nama" placeholder="Your Name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="name" name="email" placeholder="Email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="alamat" rows="8" cols="50" placeholder="Alamat"></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="username" placeholder="Username"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="password" placeholder="Password"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="password2"
                                placeholder="Repeat Password" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="no.hp" placeholder="No. HP"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->