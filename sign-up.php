<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/sign-in.css">
<!-- Css Stylesheet -->
<!-- section banner start here -->
<section class="sign-in-section">
    <!-- App Include Here -->
    <?php include 'inc/app.php';?>
    <!-- App Include Here -->
    <section class="signin-sec">
        <div class="signin">
            <div class="row">
                <div class="col"></div>
                <div class="col-md-5">
                    <p class="sign">Sign Up</p>
                    <p class="classmember">
                        Already Member ?
                    </p>
                    <span class="signupbtn"><a href="sign-in.php">Sign in</a></span>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phoneno" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="password" class="form-control" id="inputpassword"
                                            placeholder="Password">
                                        <div class="input-group-prepend">
                                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            <div class="input-group-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <input type="password" class="form-control" id="cpassword"
                                        placeholder="Confirm password"> -->
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="password" class="form-control" id="inputcpassword"
                                            placeholder="Confirm Password">
                                        <div class="input-group-prepend">
                                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            <div class="input-group-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="faddress" placeholder="Full Address">
                                </div>
                            </div>

                        </div><button type="submit" class="btn btn-primary">Sign Up</button>
                        <div class="ter">
                            <p class="classmember">By Creating Account you are agree to our</p>
                            <a href="terms&amp;condition.php">
                                <p class="classmember"> Terms &amp; conditions</p>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
</section>
<!-- section banner End here -->