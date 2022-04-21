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
                    <p class="sign">Enter OTP</p>
                    <p class="classmember">
                        Enter 4 digit code
                    </p>
                    <form>
                        <div class="form-group d-flex justify-content-between">
                            <input type="text" name="email" required="" class="form-control mx-2">
                            <input type="text" name="email" required="" class="form-control mx-2">
                            <input type="text" name="email" required="" class="form-control mx-2">
                            <input type="text" name="email" required="" class="form-control mx-2">
                        </div>
                        <a href="changepassword.php" type="submit" class="btn btn-primary">Send</a>
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