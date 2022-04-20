<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/userprofile.css">
<!-- Css Stylesheet -->

<!-- news detail page starts here -->
<section class="parallax-scroll">
    <!-- section banner start here -->
    <section class="profile-section profile-change-pass-sec profilechangedetail">
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
                            <h3 class="red-heading">Event Detail</h3>
                            <hr class="line">
                            <div class="form-start">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="addphoto" for="inputaddphoto">Add Photo
                                                    <img class="img-fluid addphotoimg" src="img/eventdetail2.png" alt="">
                                                </label>
                                                <input type="file" class="form-control-file"
                                                    id="inputaddphoto">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 mt-5">
                                            <label for="inputVenue">Venue</label>
                                            <input type="text" class="form-control" name="Venue" id="inputVenue"
                                                placeholder="Enter Venue Here" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputName">Name</label>
                                            <input type="text" class="form-control" id="inputName" name="John"
                                                placeholder="Enter Name Here" required="required">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputdate">Date</label>
                                            <input type="text" class="form-control" name="inputdate" id="inputdate"
                                                placeholder="Enter Date" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputDescription">Description</label>
                                            <input type="text" class="form-control" name="inputDescription"
                                                id="inputDescription" placeholder="Enter Description Here"
                                                required="required">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputtime">tIME</label>
                                            <input type="text" class="form-control" name="inputtime" id="inputtime"
                                                placeholder="Enter Time" required="required">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <label for="inputnoofpeo">No OF People</label>
                                            <input type="text" class="form-control" name="inputnoofpeo"
                                                id="inputnoofpeo" placeholder="Enter No. Of People" required="required">
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