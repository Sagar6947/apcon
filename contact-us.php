<?php
include('config.php');
$sql = mysqli_query($con, "select * from `contact_info` ");
$row = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Facnex - Industry & Factory HTML Template">
    <meta name="keywords" content="new, html, Facnex, design, Consulting, Business, Portfolio, Agency, advanced,">
    <link rel="shortcut icon" href="assets/images/favicon.ico" title="Favicon" sizes="16x16" />
    <!-- Main Page Title -->
    <title>Contact Us | Bhavya Resources - Totally eco-friendly mining Solutions </title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <section id="page" class="header-breadcrumb">


        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="page-title-line">Contact Us</span>
                    <h1 class="page-title-heading">Get in Touch.
                    </h1>
                </div>
            </div>
        </div>
    </section>
<!--contact-us-page-->
    <section id="service"  class="contact-us-page contact-bg  pt-120 pb-60">
        <div class="container">


            <div class="row">


                <div class="col-12">


                    <div class="contact-us-meta" >
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="contact-item">
                                    <div class="inner-contact">
                                        <span><i class="fa fa-phone"></i></span>
                                        <h4>Phone</h4>
                                    </div>

                                    <p>+918839683232</p>
                                     <p>+918908282089</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="contact-item">
                                    <div class="inner-contact">
                                        <span><i class="fa fa-envelope"></i></span>
                                        <h4>Email</h4>
                                    </div>

                                    <p>info@bhavyaresources.com</p>
                                    <p>aditya@bhavyaresources.com</p>
                                    <p>akhilesh@bhavyaresources.com</p>
                                     
                                </div>
                            </div>


                            <div class="col-lg-6 col-sm-6">
                                <div class="contact-item">
                                    <div class="inner-contact">
                                        <span><i class="fa fa-location-arrow"></i></span>
                                        <h4>Address</h4>
                                    </div>

                                    <p>C-1, Fortune Delight City, Hoshangabad  Road, Bhopal, M.P. (462026) India</p>
                                </div>
                            </div>


                           
                        </div>

                       
                    </div>
                </div>

            </div>
        </div>
    </section>
<section id="service"  class="contact-us-page  pt-20 pb-60">
        <div class="container">


            <div class="row">


                <div class="col-12">


                    <div class="contact-us-meta" >
                        
                        <div class="row">

                            <div class="col-lg-6 mb-50">
                                <div class="img-contact">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14669.551582138309!2d77.4552854!3d23.1925303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x262cade13d0e4ec7!2sBhavya%20Resources%20-%20Group%20of%20Mines%20and%20Minerals!5e0!3m2!1sen!2sin!4v1617432731478!5m2!1sen!2sin" width="600" height="700" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                     
                                </div>


                            </div>
 
                            <div class="col-lg-6 mb-50" style=" background-image: url('assets/images/con-bg.jpg');"  >


                                <div class="section-title-left" >
                                    <h4 class="title-inner-page">Write To Us. </h4>
                                </div>


                                <form class="form" action="query-popup.php" method="post">
                                    <div class="row  ">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">

                                                <label>What would you like to enquire about?</label></br>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                 <input type="checkbox" id="vehicle1" name="enquire_for[]" value="Core Drilling">
                                                <label style="font-size:12px;" for="vehicle1">Core Drilling</label><br>
                                                <input type="checkbox" id="Blasting" name="enquire_for[]" value="Blasting">
                                                <label style="font-size:12px;" for="Blasting">Blasting</label> 
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                <input type="checkbox" id="Underground" name="enquire_for[]" value="Underground Mining">
                                                <label style="font-size:12px;" for="Underground"> Underground Mining</label><br>
                                                <input type="checkbox" id="Cutting" name="enquire_for[]" value="Cutting">
                                                <label style="font-size:12px;" for="Cutting"> Cutting</label> 
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                <input type="checkbox" id="Survey" name="enquire_for[]" value="Survey Equipment">
                                                <label style="font-size:12px;" for="Survey"> Survey Equipment</label><br>

                                                <input type="checkbox" id="Consultancy" name="enquire_for[]" value="Consultancy"> 
                                                <label style="font-size:12px;" for="Consultancy"> Consultancy Service</label> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <label>Service of Interest : </label>
                                                <select name="subject">
                                                    <option value="">Select Subject</option>
                                                    <option value="Accounts Payable/Receivable">Accounts Payable/Receivable</option>
                                                    <option value="Procurement of our Products">Procurement of our Products</option>
                                                    <option value="Business Opportunities">Business Opportunities</option>
                                                    <option value="Complaints related to Product Quantity/ Quality/ Service">Complaints related to
                                                        Product Quantity/ Quality/ Service</option>
                                                    <option value="Your Experience with us">Your Experience with us</option>
                                                    <option value="Report/ Documents request">Report/ Documents request</option>
                                                    <option value="Suggestion for Process change">Suggestion for Process change</option>
                                                    <option value="Market/ Industry Information">Market/ Industry Information</option>
                                                    <option value="Others">Others</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label> Your Full name : </label>
                                                <input type="text" placeholder="Name *" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label> Contact no. : </label>
                                                <input type="text" placeholder="Phone" onKeyPress="return isNumber(event);" maxlength="10" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label> City name :</label>
                                                <input type="text" placeholder="City*" name="city" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group"><label> Email ID : </label>

                                                <input type="email" placeholder="Email *" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label> Confirm Email ID : </label>
                                                <input type="email" placeholder="Retype Email *" name="re_email" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">

                                                <label>Any message :</label>
                                                <textarea placeholder="Enquiry Message" name="message"></textarea>
                                            </div>
                                        </div>


                                    </div>


<div class="newsletter-item">
    <button type="submit" name="contact-sub" class="main-btn-two"  >
                                         Send Message 
                                    </button>
</div>
                                    <!-- Button two -->
                                    
                                </form>




                            </div>



                        </div>



                    </div>
                </div>

            </div>
        </div>
    </section>
     <?php include 'footer.php'; ?>
    <script src="assets/js/jquery-3.3.1.min.js"></script> 
    <script src="assets/js/plugins.js"></script> 
    <script src="assets/js/custom.js"></script> 
</body>
</html>