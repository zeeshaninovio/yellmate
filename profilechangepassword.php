<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/userprofile.css">
<!-- Css Stylesheet -->

<!-- news detail page starts here -->
<section class="parallax-scroll">
    <!-- section banner start here -->
    <section class="profile-section profile-change-pass-sec">
        <div class="head-page">
            <h3 class="heading-page">PROFILE</h3>
        </div>
        <section class="profile-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 blackbg">
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
                            <div class="form-start">
                                <h3 class="red-heading">Personal Info</h3>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputName">Name</label>
                                            <input type="text" class="form-control" id="inputName" name="John"
                                                placeholder="John" required="required">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputLname">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" id="inputLname"
                                                placeholder="Doe" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputPhone">Phone</label>
                                            <input type="tel" class="form-control" name="State" id="inputPhone"
                                                placeholder="+1-234-4567-789" required="required">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputemail">Email</label>
                                            <input type="email" class="form-control" name="email" id="inputemail"
                                                placeholder="Johndoe@gmail.com" required="required">
                                        </div>

                                    </div>
                                </div>
                                <button class="btn red-btn">Save Changes</button>
                                <h3 class="red-heading mt-4">Security</h3>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputpassword">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="inputpassword" placeholder="•••••••••" required="required">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputcpassword">Change Password</label>
                                            <input type="password" class="form-control" name="cpassword"
                                                id="inputcpassword" placeholder="•••••••••" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputconpassword">Confirm Password</label>
                                            <input type="password" class="form-control" name="conpassword"
                                                id="inputconpassword" placeholder="•••••••••" required="required">
                                        </div>
                                        <div class="col-md-6 col-xs-12 btn-right">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn red-btn">Save Changes</button>
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