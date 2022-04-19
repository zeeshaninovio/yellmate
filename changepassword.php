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
                    <p class="sign">New Password</p>
                    <p class="classmember">
                        Create a new Password
                    </p>
                    <form>
                        <div class="form-group">
                            <input type="password" class="form-control" id="npassword"
                                placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="cnpassword"
                                placeholder="Re-enter New Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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