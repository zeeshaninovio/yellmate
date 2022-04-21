<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/userprofile.css">
<!-- Css Stylesheet -->

<!-- news detail page starts here -->
<section class="parallax-scroll">
    <!-- section banner start here -->
    <section class="profile-section posted-events-sec user-subscription-sec">
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
                            <div class="username1"><a href="applied-request.php">Applied Events</a></div>
                            <hr class="line">
                            <div class="username1"><a href="user-subscription.php">Subscription</a></div>
                            <hr class="line">
                            <div class="username1"><a href="logout.php">Logout</a></div>

                        </div>
                    </div>
                    <div class="col-md-9 personal-info-sec">
                        <div class="information">
                            <div class="row ">
                                <div class="col-md-6">
                                    <h3 class="red-heading">Subscription</h3>
                                    <div class="paymentsubs">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <p class="smallp">From USD</p>
                                                <div class="month5">
                                                    <p> £5.00</p>
                                                    <p>/month</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-5">
                                                <p class="subs-head">Cancel Subscription</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <hr class="line">
                            <div class="payments_methods">
                                <h3 class="red-heading">Payment Details</h3>
                                <p class="carddesc">Use Saved Payments</p class="carddesc">
                                <label class="subslabel">
                                    <input type="radio" checked="checked" name="payment-radio">
                                    <span class="checkmark">
                                        <div class="card-details">
                                            <div class="radio-btn">
                                                <span></span>
                                            </div>
                                            <div class="visa-card">
                                                <div class="img-box">
                                                    <figure><img src="img/savedcards.png" alt="No Image Found">
                                                    </figure>
                                                </div>
                                                <div class="input-box">
                                                    <label for="card-number">My Personal Card</label><br>
                                                    <input id="card-number" value="**********1239" type="text"
                                                        readonly="">
                                                </div>
                                            </div>
                                            <div class="extra-btn">
                                                <button class="btn default disabled">Default</button>
                                                <div class="selection">
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <a class="btn" href="#">
                                                    <img src="img/subtraction.png" alt="">
                                                    Delete Card
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </label>
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