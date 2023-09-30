

<footer class="footer footer-default-padding">

    <div class="container">
        <div class="row footer-row">
            <div class="col-lg-4 mb-30">

                <div class="footer-widget">
                    <div class="footer-logo">
                        <img src="assets/images/logo/logo-1.png" alt="Bhavya Resources logo">
                    </div>

                    <p class="mb-30 text-justify">The mining industry is involved in the extraction of precious minerals and other geological materials. The extracted materials are transformed into a mineralized form that serves an economic benefit to the prospector or miner.</p>
                 

                    <!-- Btn Two -->
                    <a href="contact-us.php" class="main-btn-three">
                        <div class="text-btn">
                            <span class="text-btn-one">Contact Us</span>
                            <span class="text-btn-two">Contact Us</span>
                        </div>
                        <div class="arrow-btn">
                            <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                            <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                        </div>
                    </a> 

                </div>
            </div>



            <div class="col-sm-6 col-lg-4 mb-30">
                <div class="footer-widget mb-0">
                    <h4>Useful Links</h4>
                    <div class="line-footer"></div>
                    <div class="row">
                        <div class="col-6">
                            <ul class="footer-link mb-0">
                                <li>
                                    <a href="about-our-company.php">
                                        <span><i class="fas fa-angle-right"></i></span> About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="legal-disclaimer.php"><span><i class="fas fa-angle-right"></i></span> Legal disclaimer</a>
                                     
                                </li>
                                <li>
                                    <a href="contact-us.php"><span><i class="fas fa-angle-right"></i></span> Contact us</a>
                                     
                                </li>
                                <li>
                                    <a href="sitemap.php">
                                        <span><i class="fas fa-angle-right"></i></span> Sitemap
                                    </a>
                                </li>

                                <li>
                                    <a href="gallery.php">
                                        <span><i class="fas fa-angle-right"></i></span> Our Gallery 
                                    </a>
                                </li>
                            </ul>
                        </div>

                         <div class="col-6">
                            <ul class="footer-link mb-0">
                                <li>
                                    <a href="company-management.php">
                                        <span><i class="fas fa-angle-right"></i></span>Vision & Mission 
                                    </a>
                                </li>

                                <li>
                                    <a href="joint_venture.php">
                                        <span><i class="fas fa-angle-right"></i></span> Joint Venture 
                                    </a>
                                </li>

                                <li>
                                    <a href="services.php">
                                        <span><i class="fas fa-angle-right"></i></span> Our Services
                                    </a>
                                </li>

                                <li>
                                    <a href="products.php">
                                        <span><i class="fas fa-angle-right"></i></span> Our Products 
                                    </a>
                                </li>

                                <li>
                                    <a href="our-team.php">
                                        <span><i class="fas fa-angle-right"></i></span> Our Team 
                                    </a>
                                </li>
                            </ul>
                        </div>



                    </div>
                </div>
            </div>





            <div class="col-sm-6 col-lg-4">
                <div class="footer-widget">
                     <h4>Download Links</h4>
                    <div class="line-footer"></div>
                    <div class="newsletter-item">
                        <ul class="lists-brochures">
                            
                            <?php
                                            $en = "SELECT * FROM `environment_report` ORDER BY id DESC LIMIT 1";
                                            $report = mysqli_query($con, $en);
                                            $rep = mysqli_fetch_array($report);
                                            ?>
                                            
                        <li>
                            <a href="admin/images/environment/<?= $rep['file'] ?>" target="_blank">
                                <i class="fa fa-download"></i>
                                Download Environmental reports
                                <span>pdf</span>
                            </a>
                        </li>
                        <?php
                                        ?>
                         <li>
                            <a href="environmental_laws.php">
                                <i class="fa fa-download"></i>
                               Download Mining Laws
                                <span>pdf</span>
                            </a>
                        </li>
                    </div>
                      

                    <!-- List Icons Social Media-->
                    <ul class="social-media">
                       <li><a href="https://www.facebook.com/bhavyaresources" class="facebook" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>
       <li><a href="#" class="twitter" rel="noopener"><i class="fab fa-twitter"></i></a></li>
       <li><a href="https://www.instagram.com/bhavyaresources/" class="instagram"  target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li>
                    </ul> 


                </div>
            </div>





        </div>

        <div class="row row-contact">
            <div class="col-lg-4 col-sm-6 no-padding">
                <div class="single-item">
                    <span class="flaticon-call"></span>

                    <p>+918839683232, +918908282089</p> 
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 no-padding">

                <div class="single-item">
                    <span class="flaticon-email"></span>

                    <p>  info@bhavyaresources.com </p>
                    <!--<p>  support@bhavyaresources.in </p>-->
                </div>  

            </div>


            <div class="col-lg-4 col-sm-12 no-padding">
                <div class="single-item">
                    <span class="flaticon-location"></span>
                    <!--<p>C-1, Fortune Delight City, Hoshangabad Road,  </p>-->
                    <p> Bhopal, M.P. (462026) India</p>
                </div>
            </div>






        </div>

    </div>

   <div class="footer-bar">
    <div class="container">
         <div class="footer-copy">
             <div class="row">
                <div class="col-md-6">
                 <!-- Copyright By Me NourEgy  -->
        <div class="copyright">
            &copy;    2021. 

 All Rights Reserved By
            <a href="#" target="_blank">Bhavya Resources</a>
        </div>
                </div>
                 
                 <div class="col-md-6">
                     <ul class="links-of-footer">
            <li>Created by <a href="https://www.webangeltech.com/" target="_blank" rel="noopener">Webangel</a></li> 
            <!--<li><a href="#">Privacy</a></li> -->
            <!--<li><a href="#">Terms of Use</a></li> -->
        </ul>
                </div>
             </div>
        
             
       


        </div>   

    </div> 

   </div>


</footer>

<!-- Scroll To Top -->
<!--<div class="scroll-up">-->
<!--    <i class="fas fa-angle-up"></i>-->
<!--</div> -->




<style>
    
    .float{
	position:fixed;
	width:40px;
	height:40px;
	bottom:40px;
	right:20px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:25px; 
  z-index:9999;
}

.my-float{
	margin-top:8px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



<a href="https://api.whatsapp.com/send?phone=91 8839683232&text=I have a Query." class="float" target="_blank" rel="noopener">
<i class="fa fa-whatsapp my-float" aria-hidden="true"></i></a>
