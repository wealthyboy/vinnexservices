<?php  include('config.php') ?>


<!--Main Footer-->
<footer class="main-footer">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="clearfix">
                	
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                        	
                            <!--Footer Column-->
                        	<div class="col-md-8 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget about-widget">
                                	<p>	<?php  echo $about['teaser'];  ?></p>
                                    
                                      
                                </div>
                            </div>
                            
                    		<!--Footer Column-->
                        	<div class="col-md-4 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget links-widget">
                                	<h2>Quick Links</h2>	
                                    <ul>
                                    	<li><a href="index.php">Home</a></li>
                                        <li><a href="about_us.php">About Us</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="contact_us.php">Contact Us</a></li>

                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                    		<!--Footer Column-->
                        	
                            
                            <!--Footer Column-->
                        	<div class="col-md-8 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget contact-widget">
                                	<h2>Contact Us</h2>
                                	<ul>
                                    	<li><strong>Address:</strong> <?php echo $settings['site_address'] ?></li>
                                        <li><strong>Phone:</strong> <?php echo $settings['site_phone'] ?></li>
                                        <li><strong>E-mail:</strong> <?php echo $settings['site_email'] ?></li>
                                    </ul>
                                    <br>
                                    
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
                <!--Copyright-->
                <div class="copyright">&copy; <?php  echo date('Y') ?> &ensp; <strong><?php echo $settings['site_name'] ?></strong> &ensp; All rights reserved</div>
            </div>
        </div>
        
    </footer>
        	
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="icon flaticon-sky8"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Start of Tawk.to Script-->


</body>
</html>
