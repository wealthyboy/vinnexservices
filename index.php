 <?php include 'header.php';
       include 'database.php';
 ?>
 <!-- Preloader start -->
  <div class="wshipping-site-preloader-wrapper">
     <div class="spinner">
        <div class="double-bounce1"></div>
  <?php ?>      <div class="double-bounce2"></div>
     </div>
  </div>
  <!-- Preloader End -->
  

  
  
   <!-- Slider Start -->   
  <div class="homepage-slides-wrapper">
    <div class="single-banner">
      <!-- Slider item1 start-->
      <div class="single-slide-item slider-overlay slide-bg-1">
         <div class="item-table">
           <div class="item-tablecell">
              <div class="container">
                 <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                       <h3>Bervas Marine</h3>
                       <h2  class="visible-md hidden-xs hidden-sm">We are commited to serve</h2>
                       
                       <p>Bervas Marine a subsidiary of VINNEX INVESMENT LIMITED, is in business with a passion to provide bunkers and other marine related services to all
types of ships in the most professional manner.</p>
<p></p>
                       <a href="contact.php" class="wshipping-button slide-btn">Learn More</a>
                       
                    </div>
                 </div>
              </div>
           </div>
         </div>
      </div>
      <!-- Slider item1 end-->
    </div>
  </div>
  <!-- Slider End --> 
      
   
  <!-- Service start -->   
  <div class="wshipping-content-block">
    <div class="container">
      <div class="row">
         <div class="col-12 col-lg-6 offset-lg-3">
            <div class="section-title wow fadeInUp">
               <h2>Our Services</h2>
               <p>Bervas Marine  is focused on products and services that have been structured to meet every of
your company’s/shipping needs.</p>
            </div>
         </div>
      </div>
      <div class="row">
      <?php foreach ($services as $key => $details):?>
         <div class="col-12 col-lg-4">
            <div class="single-service-item wow fadeInUp">
               <div class="service-item-bg <?php echo  $details['image']?>"></div>
               <div class="service-content">
                  <h4><?php echo $key; ?></h4>
                  <p><?php  echo  $details['teaser']; ?></p>
                  <a href="service.php?service=<?php echo $key?>" title="" class="readmore-btn">Read more <i class="fa fa-angle-right"></i></a>
                  <div class="location_map"><i class="fa fa-plus"></i></div>
               </div>
            </div>
         </div>
      <?php endforeach;?> 
       
      </div>
      
       <!-- List Style Start -->
      <div class="row list-sec">
         
         <div class="col-12 col-sm-6 col-lg-6">
         <div class="col-12 pt40">
           <h2 class="heading2-border">Clients</h2>
         </div>
           <ul class="bullet-list">
             <li>Union Maritime,</li>
             <li>OAN Overseas Ltd.</li>
             <li>Nujuud Shipping</li>
             <li> Multitrade</li>
             <li>Honey Well Flour Mills Plc</li>
             <li>Preimier Logistics Solutions</li>
             <li>Nigerian Breweries Plc</li>
             <li>Fidson Pharmaceutical Plc</li>
           </ul>
         </div>
         <div class="col-12 col-sm-6 col-lg-6">
         <div class="col-12 pt40">
           <h2 class="heading2-border">Objectives</h2>
         </div>
           <ul class="bullet-list">
             <li>The company maintains high safety, enhances teamwork and professionalism</li>
             <li>The company specializes in the selection and assessment of seafarers with the
ultimate end of reducing human factors.</li>
             <li>Undertakes responsibility for developing, conducting, monitoring and promoting
new relationships while maintaining the existing ones of genuine importance.</li>


             <li>To prove to the world that there is a young, vast, reliable, positive.and dynamic,
hardworking and sincere indigenous growing company like Bervas Marine in Nigeria.</li>
             <li>To deliver prompt and qualitative services to her clients with a capacity for
authenticity and dedication.</li>
<li>To ensure that our clients are treated with Value Added Services (VAS) delivery
that is nonpareil.</li>
           </ul>
         </div>
     
      </div>
      <!-- List Style End -->
    </div>
  </div>
  <!-- Service End -->
  
  
  
  <!-- we peovide start -->  	
  <div class="wshipping-content-block provided-block text-center">
   <div class="item-table">
      <div class="item-tablecell">
         <div class="container">
            <div class="row">
               <div class="col-12 wow fadeInUp">
                  <h3 class="text-uppercase">Bervas Marine</h3>
                  <h1 class="text-uppercase">a subsidiary of VINNEX INVESMENT LIMITED</h1>
                  <h2></h2>
                  <a href="http://vinnexservices.com" class="wshipping-button cta-btn">visit vinnex</a>
               </div>
            </div>      
         </div>
      </div>  
    </div>
  </div>   
  <!-- we provide end --> 
  
  <?php include 'footer.php';?>