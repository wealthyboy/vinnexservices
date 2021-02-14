<?php  include('header.php') ?>
    
    
     <!--Page Title-->
    <section class="page-title" style="background-image:url('images/vinnex_services.jpg');">
        <div class="auto-container">
            <h1>Services</h1>
            
            <!--Bread Crumb-->
            <div class="bread-crumb">
            	<a href="blog-two-column.html#">Home</a> / <a href="blog-two-column.html#" class="current">Services</a>
            </div>
        </div>
    </section>
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Sidebar-->	
                <div  class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside s class="sidebar">
                        
                            
                            <!-- Popular Categories -->
                            <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="sidebar-title"><h3>Our Services</h3></div>
                                
                                <ul class="list">
                                    <?php foreach($services as $key => $val) {?>
                                      <li><span class="icon fa fa-angle-right"></span> <a href="services.php?service=<?php  echo $key ?>"> <?= $key ?></a></li>
                                    <?php  } ?>
                                </ul>
                                
                            </div>
                            
                            
                                    
                        </aside>
                    
                        
                    </div>
                    <!--Sidebar-->
                    
            	
                <!--Content Side-->	
                <?php $key = isset($_GET['service']) ?  $_GET['service'] : '';  ?>
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section id="" class="blog-container two-column-blog">
                        
                        <div class="row clearfix">
                            
                            <!--Blog Post-->
                            <div class="col-md-12 col-sm-6 col-xs-12 blog-post wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <article class="inner-box">
                                <h2> <?php    echo !empty($key) ? $key : 'Marine Services';
?></h2>
                                <div class="text">
                                    <p><?php 
                                    
                                       echo !empty($key) ? $services[$key]['description'] : $services['Marine Services']['description'];
                                        
                                    ?></p>
                                    
                                </div>
                                
                         </article>
                        
                           </div>
                        
                        </div>
                
                    </section>
                


                   
                    
                                    
                    
                </div>
                <!--Content Side-->
                
                
                
            </div>
        </div>
    </div>
    
    
    <?php  include('footer.php')  ?>