<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/userprofile.css">
<!-- Css Stylesheet -->

<!-- news detail page starts here -->
<section class="parallax-scroll">
    <!-- section banner start here -->
    <section class="profile-section">
        <div class="head-page">
            <h3 class="heading-page">PROFILE</h3>
        </div>
        <section class="profile-sec othersprofile-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="user-profile-sec">
                            <div class="useriamge">
                                <a href="userprofile.php">
                                    <img src="img/profile2.png" class="img-fluid" alt="">
                                    <div class="form-group">
                                        <label class="changeprofilepic" for="changepic"><img
                                                class="img-fluid changepropic" src="img/changepic1.png" alt=""></label>
                                        <input type="file" class="form-control-file" id="changepic">
                                    </div>
                                </a>
                                <div>
                                    <div class="username"><a href="userprofile.php">John Doe</a></div>
                                    <div class="useremail">JohnDoe@gmail.com</div>
                                </div>
                            </div>
                            <div class="username1"><a href="othersprofile.php">Personal Info </a></div>
                            <hr class="line">
                        </div>
                    </div>
                    <div class="col-md-9 personal-info-sec">
                        <div class="information">
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="personal-head">Personal Info</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="profilen">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>Full Name:</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Emily Clarke</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="profilen">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>Phone Number:</p>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="profileanc">
                                                    <p>+1-234-4567-789</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="profilen">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>Email:</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>emilyclarke@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="line">
                            <a href="chat.php" class="btn red-btn">Message</a>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </section>
    <!-- section banner End here -->
    <!-- Footer Include Here -->
    <?php include 'inc/footer.php';?>
    <!-- Footer Include Here -->
</section>
<!-- news detail page starts here -->