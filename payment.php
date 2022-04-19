<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/payment.css">
<!-- Css Stylesheet -->

<!-- news detail page starts here -->
<section class="parallax-scroll">
    <!-- section banner start here -->
    <section class="payment-section">
        <div class="head-page">
            <h3 class="heading-page">PAYMENT</h3>
        </div>
        <section class="payment-sec">
            <div class="container">
                <div class="payment">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inemail">Email</label>
                                    <input type="email" class="form-control" id="inemail"
                                        placeholder="Johndoe@emial.com" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inname">Name on Card</label>
                                    <input type="email" class="form-control" id="inname" placeholder="John Doe"
                                        required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="incardno">Card Number</label>
                                    <input type="text" class="form-control" id="incardno"
                                        placeholder="**********                                       mm/yy    cvc"
                                        required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="payment-icons">
                                    <div>
                                        <img class="img-fluid" src="img/payment1.png" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="img/payment2.png" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="img/payment3.png" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="img/payment4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row paymentsubs">
                            <div class="col-md-4">
                                <div>
                                    <p class="subs-head">Subscription</p>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <p class="subs-head"> £5/mon</p>
                            </div>
                        </div>
                        <button class="btn red-btn">Pay</button>
                    </form>
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