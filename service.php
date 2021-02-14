<?php include 'header.php';
include 'database.php';
$key =  !empty($_GET['service']) ? $_GET['service'] : '';

?>  
  
 <!-- Breadcroumbs start -->
  <div class="wshipping-content-block wshipping-breadcroumb inner-bg-1">
    <div class="container">
      <div class="row">
         <div class="col-12 col-lg-7">
            <h1><?php echo !empty($_GET['service']) ? $_GET['service'] : ''?></h1>
            <a href="index.html" title="Home">Home</a> / Services /<?php echo !empty($_GET['service']) ? $_GET['service'] : ''?>
            
         </div>
         
      </div>
    </div>
  </div>
  <!-- Breadcroumbs end -->
  
  <!-- About content start -->  
  <div class="wshipping-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
         <div class="col-12 col-lg-9">
            <div class="right-block">
               <h2 class="text-uppercase"><?php echo  $key?></h2>
<!--                <img src="assets/images/company-overview.jpg" alt="" class="img-responsive feat-img"/> -->
               <p><?php echo $services[$key]['description']?></p>
               
            </div>   
         </div>
         <div class="col-12 col-lg-3">
            <div class="left-block left-menu">
               <ul>
                 <?php foreach ($services as $key => $details):?>
               
                    <li class="<?php echo $_GET['service'] == $key ? 'active' : ''?>"><a href="service.php?service=<?php echo $key?>" title="<?php echo $key; ?>
                    "><?php echo $key; ?>
                    </a></li>
                  
                  <?php endforeach;?> 
                   
               </ul>
            </div>
            <div class="left-block wow fadeInUp">
               
            
            </div>

           
         </div>
      </div>
    </div>
  </div>
  <!-- About content end -->
   
  
  <!-- Our Team start-->  
  <div class="wshipping-content-block ">
    <div class="container wow fadeInUp">
      <div class="row">
         <div class="col-12 col-lg-12 ">
            <div class="">
               <h2>Management Team</h2>
               <p>Bervas Marine is at the verge of expansion. Incorporated barely


two years ago, the company has attained such an enviable feat under the sole management of


its managing director and chief executive officer in collaboration with his well trained


administrative staff and technicians.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 col-sm-6 col-lg-3">
            <div class="team-block">
               <div class="team-image">
               
                  <div class="team-figure">
                    
                  </div>
               </div>
               <div class="team-text">
                  <h5>Iyaduah V. Igietemho  </h5>
                  <p>Chief Executive Officer</p>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-lg-3">
            <div class="team-block">
               <div class="team-image">
                  
                  <div class="team-figure">
                     
                  </div>
               </div>
               <div class="team-text">
                  <h5>Blessing O Igietemho</h5>
                  <p>Director</p>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-lg-3">
            <div class="team-block">
               <div class="team-image">
                  
                  <div class="team-figure">
                      
                  </div>
               </div>
               <div class="team-text">
                  <h5>John A. Omoughie</h5>
                  <p>General Manager</p>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-lg-3">
            <div class="team-block">
               <div class="team-image">
                  
                  <div class="team-figure">
                     
                  </div>
               </div>
               <div class="team-text">
                  <h5>Capt Tunde Akinmuleya</h5>
                  <p>Merchant Captain</p>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
  <!-- Our Team end--> 
    
 
  <?php include 'footer.php';?>html>