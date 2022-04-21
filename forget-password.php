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
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p class="sign">Enter Email</p>
                    <p class="classmember">
                    Please Enter Your Email Below We will send 4 digit code
                    </p>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="InputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Email">
                        </div>
                        <a href="otp.php" type="submit" class="btn btn-primary">Submit</a href="otp.php">
                        <div class="ter mt-4">
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