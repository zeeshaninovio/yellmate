<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/sign-in.css">
<!-- Css Stylesheet -->
<!-- App Include Here -->
<?php include 'inc/app.php';?>
    <!-- App Include Here -->
<!-- section banner start here -->
<section class="sign-in-section">
    
    <section class="signin-sec">
        <div class="signin">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p class="sign">Sign in</p>
                    <p class="classmember">
                        Not a Member ?
                    </p>
                    <span class="signupbtn"><a href="sign-up.php">Sign Up</a></span>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <div class="row mt-3">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="checkbox" class="custom-checkbox" id="html">
                                    <label for="html">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-4">
                                <a href="forget-password.php">
                                    <a href="forget-password.php"><p class="classmember">Forgot Password ?</p></a>
                                </a>
                            </div>
                        </div>
                        <div class="ter">
                            <p class="classmember">By Creating Account you are agree to our</p>
                            <a href="terms&condition.php">
                                <p class="classmember"> Terms & conditions</p>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
</section>
<!-- section banner End here -->
<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
    <!-- Footer Include Here -->