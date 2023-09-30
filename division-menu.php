<div class="left-side-bar">
     
                
                <div class="widget mb-30" >
                    <div class="body-widget"  style="background-image: url('assets/images/icons/map_img.png');">
                        <div class="title-widget">
                            <h3>Our Services</h3>
                        </div>
                        
                       <ul class="links-services">
                           <li><a href="core-drilling.php"><i class="fas fa-long-arrow-alt-right"></i> Core Drilling</a></li>
                                <li><a href="blasting.php"><i class="fas fa-long-arrow-alt-right"></i> Blasting</a></li>
                                <li><a href="undergrounding-mining.php"> <i class="fas fa-long-arrow-alt-right"></i> Underground Mining</a></li>
                                <li ><a href="cutting.php"><i class="fas fa-long-arrow-alt-right"></i> Cutting</a></li>
                                <li><a href="survey-equipment.php"><i class="fas fa-long-arrow-alt-right"></i> Survey Equipment </a></li>
                                <li><a href="consultancy.php"><i class="fas fa-long-arrow-alt-right"></i> Consultancy Service</a></li>
                          
                        
                    </ul>
                    
                    </div>
                    
                </div>
                
                <div class="widget mb-30">
                    <div class="body-widget">
                        <div class="title-widget">
                            <h3>Downloads</h3>
                        </div>
                          <?php
                                            $en1 = "SELECT * FROM `environment_report` ORDER BY id DESC LIMIT 1";
                                            $report1 = mysqli_query($con, $en1);
                                            $rep1 = mysqli_fetch_array($report1);
                                            ?>
                        <ul class="lists-brochures">
                        <li>
                            <a href="admin/images/environment/<?= $rep1['file'] ?>"  target="_blank">
                                <i class="fa fa-download"></i>
                                  Environmental reports
                                <span>pdf</span>
                            </a>
                        </li>
                        
                         <li>
                            <a href="environmental_laws.php">
                                <i class="fa fa-download"></i>
                                 Mining Laws
                                <span>pdf</span>
                        </li>
                        
              
                        
                        
                    </ul>
                        
                    </div>
                    
                </div>
                
                <div class="widget mb-30">
                    <div class="body-widget">
                        <div class="title-widget">
                            <h3>How Can We Help You</h3>
                        </div>
                        
                        <div class="inner-widget">
                        <p>Fill our query form to let us know your requirement.We will communicate with and start planning accordingly.
 
Get your desire output for which we have worked for.
</p>

                            <a href="contact-us.php" class="main-btn-two">
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
                    
                </div>
                
          
                
             </div>  