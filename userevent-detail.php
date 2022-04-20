<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/userprofile.css">
<!-- Css Stylesheet -->

<!-- news detail page starts here -->
<section class="parallax-scroll">
    <!-- section banner start here -->
    <section class="profile-section posted-events-sec">
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
                            <div class="username1"><a href="request-event.php">Event Requests</a></div>
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
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="red-heading">Event Detail</h3>
                                </div>
                                <div class="col-md-2">
                                    <a href="profilechangedetail.php"><span class="editicon">Edit</span></a>
                                    <a href="profilechangedetail.php"><img class="img-fluid edit-img"
                                            src="img/icon-edit.png" alt=""></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <hr class="line">
                                            <div class="profilen">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Event Title</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>Lorem Ipsum</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="profilen">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>No of People</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>Johndoe@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="profilen">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Description</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>Enter Description Here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <hr class="line">
                                            <div class="profilen">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Venue</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>Lorem Ipsum</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="profilen">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Date</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>4-5-2022</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="profilen">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Time</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>11 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 userdetial-eventimg">
                                    <div>
                                        <img src="img/usereventdetail.png" class='img-fluid' alt="">
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