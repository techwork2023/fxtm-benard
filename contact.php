<?php
include('layout/header.php');
?>
<!-- Header Ends -->
<section class="banner-area">
    <div class="banner-overlay">
        <div class="banner-text text-center">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <div class="col-xs-12">
                        <!-- Title Starts -->
                        <h2 class="title-head">Get in <span>touch</span></h2>
                        <!-- Title Ends -->
                        <hr>
                        <!-- Breadcrumb Starts -->
                        <ul class="breadcrumb">
                            <li><a href="index.html"> home</a></li>
                            <li>contact</li>
                        </ul>
                        <!-- Breadcrumb Ends -->
                    </div>
                </div>
                <!-- Section Title Ends -->
            </div>
        </div>
    </div>
</section>
<!-- Banner Area Starts -->
<!-- Contact Section Starts -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 contact-form">
                <h3 class="col-xs-12">feel free to drop us a message</h3>
                <p class="col-xs-12">Need to speak to us? Do you have any queries or suggestions? Please contact us about all inquiries including membership and volunteer work using the form below.</p>
                <!-- Contact Form Starts -->
                <form class="form-contact" method="post" action="#">
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="firstname" id="firstname" placeholder="FIRST NAME" type="text" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="lastname" id="lastname" placeholder="LAST NAME" type="text" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="text" id="subject" placeholder="SUBJECT" type="text" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" id="message" name="message" placeholder="MESSAGE" required></textarea>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Submit Form Button Starts -->
                    <div class="form-group col-xs-12 col-sm-4">
                        <button class="btn btn-primary btn-contact" type="submit">send message</button>
                    </div>
                    <!-- Submit Form Button Ends -->
                    <!-- Form Submit Message Starts -->
                    <div class="col-xs-12 text-center output_message_holder d-none">
                        <p class="output_message"></p>
                    </div>
                        <!-- Form Submit Message Ends -->
                </form>
                <!-- Contact Form Ends -->
            </div>
            <!-- Contact Widget Starts -->
            <div class="col-xs-12 col-md-4">
                <div class="widget">
                    <div class="contact-page-info">
                        <!-- Contact Info Box Starts -->
                        <div class="contact-info-box">
                            <i class="fa fa-home big-icon"></i>
                            <div class="contact-info-box-content">
                                <h4>Office Addresses</h4>
                                <p><span class="color-blue">USA:</span><br>
                                <span>New York</span><br>
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Box Ends -->
                        <!-- Contact Info Box Starts -->
                        <div class="contact-info-box">
                            <i class="fa fa-envelope big-icon"></i>
                            <div class="contact-info-box-content">
                                <h4>Email Address</h4>

                                <p>support@fxtm-capitalgrowth.com 
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Box Ends -->
                    </div>
                </div>
            </div>
            <!-- Contact Widget Ends -->
        </div>
    </div>
</section>
<!-- Call To Action Section Starts -->
<section class="call-action-all">
    <div class="call-action-all-overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Call To Action Text Starts -->
                    <div class="action-text">
                        <h2>Get Started Today With Fxtm capital growth</h2>
                        <p class="lead">Let us help get you on the right track as you start your investment journey!</p>
                    </div>
                    <!-- Call To Action Text Ends -->
                    <!-- Call To Action Button Starts -->
                    <p class="action-btn"><a class="btn btn-primary" href="register.html">Register Now</a></p>
                    <!-- Call To Action Button Ends -->
                </div>
            </div>
        </div>
    </div>
</section>        
<!-- Call To Action Section Ends -->
<!-- Footer Starts -->
<?php
include('layout/footer.php');
?>