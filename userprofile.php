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
        <section class="profile-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="user-profile-sec">
                            <div class="useriamge">
                                <a href="userprofile.php">
                                    <img src="img/profile1.png" class="img-fluid" alt="">
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
                            <div class="username1"><a href="userprofile.php">Personal Info </a></div>
                            <hr class="line">
                            <div class="username1"><a href="posted-event.php">Posted Events</a></div>
                            <hr class="line">
                            <div class="username1"><a href="event-request.php">Event Requests</a></div>
                            <hr class="line">
                            <div class="username1"><a href="applied-event.php">Applied Events</a></div>
                            <hr class="line">
                            <div class="username1"><a href="user-subscription.php">Subscription</a></div>
                            <hr class="line">
                            <div class="username1"><a href="logout.php">Logout</a></div>
                        </div>
                    </div>
                    <div class="col-md-9 personal-info-sec">
                        <div class="information">
                            <div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3 class="personal-head">Personal Info</h3>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="profilechangepassword.php"><span class="editicon">Edit</span></a>
                                        <a href="profilechangepassword.php"><img class="img-fluid edit-img"
                                                src="img/icon-edit.png" alt=""></a>
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
                                                <p>John Doe</p>
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
                                                <p>Johndoe@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="line">
                            <div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3 class="personal-head">Security</h3>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="profilechangepassword.php"><span class="editicon">Edit</span></a>
                                        <a href="profilechangepassword.php"><img class="img-fluid edit-img"
                                                src="img/icon-edit.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="profilen">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>Password</p>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="profileanc">
                                                    <p>**********</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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