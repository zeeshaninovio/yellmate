<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/create-event.css">
<!-- Css Stylesheet -->

<!-- news detail page starts here -->
<section class="parallax-scroll">
    <!-- section banner start here -->
    <section class="create-event-section">
        <div class="head-page">
            <h3 class="heading-page">CREATE EVENTS</h3>
        </div>
        <section class="create-event">
            <div class="container">
                <div class="createevent">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Photo</label>
                                    <label for="Add-Photo"><img src="img/create-event1.png" alt=""></label>
                                    <input type="file" class="form-control-file" id="Add-Photo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group venue">
                                    <label for="Enter-Venue">Venue</label>
                                    <input type="text" class="form-control" id="Enter-Venue"
                                        placeholder="Enter Venue Here">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Event-Title">Event Title</label>
                                    <input type="email" class="form-control" id="Event-Title"
                                        placeholder="Enter Name Here">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Enter-Date">Date</label>
                                    <input type="text" class="form-control" id="Enter-Date" placeholder="Enter Date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="enterdesc">Description</label>
                                    <input type="text" class="form-control" id="enterdesc"
                                        placeholder="Enter Description Here">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Enter-Time">tIME</label>
                                    <input type="text" class="form-control" id="Enter-Time" placeholder="Enter Time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="noofpeople">No OF People</label>
                                    <input type="text" class="form-control" id="noofpeople"
                                        placeholder="Enter Description Here">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categorys1">Category</label>
                                    <select class="form-control" id="categorys1">
                                        <option class="categoryop">Beach</option>
                                        <option class="categoryop">Out For Coffee</option>
                                        <option class="categoryop">Night Club</option>
                                        <option class="categoryop">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div><button class="btn red-btn">Upload Event</button>
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