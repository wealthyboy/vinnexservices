<?php include('header.php') ?>


<!--Page Title-->
<section class="page-title" style="background-image:url('');">
    <div class="auto-container">
        <h1>Contact Us</h1>

        <!--Bread Crumb-->
        <div class="bread-crumb">
            <a href="/">Home</a> / <a href="#" class="current">Contact Us</a>
        </div>
    </div>
</section>


<!--Sidebar Page-->
<div class="sidebar-page">
    <div class="auto-container">



        <div class="row clearfix">


            <!--Sidebar-->
            <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar">


                    <!-- Contact Information -->
                    <div class="widget contact-info">
                        <div class="sidebar-title">
                            <h3>Contact information</h3>
                        </div>
                        <ul class="info">
                            <li><strong>Address</strong> <?= $settings['site_address'] ?> Nigeria</li>
                            <li><strong>Email</strong> <a href="#"><?= $settings['site_email'] ?></a></li>
                            <li><strong>Phone</strong> <?= $settings['site_phone'] ?></li>

                        </ul>
                    </div>

                </aside>


            </div>
            <!--Sidebar-->


        </div>
    </div>
</div>


<?php include('footer.php') ?>