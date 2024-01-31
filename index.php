<?php include('header.php'); ?>


<!--Main Slider-->
<section class="main-slider">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>

                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/resource/blog-image-1.jpg" data-saveperformance="off" data-title="Vinnex Services">
                    <img src="images/resource/blog-image-1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption lfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-100" data-speed="1000" data-start="300" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn" style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        <h2>WELCOME TO VINNEX INVESTMENT SERVICES LIMITED</h2> <br />We work professionaly to meet every of your company’s shipping needs.
                    </div>



                    <div class="tp-caption lfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-10" data-speed="1500" data-start="1200" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn" style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div class="link-box"><a href="services.php" class="theme-btn btn-style-one">Explore Our Services</a></div>
                    </div>

                </li>




            </ul>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>




<!--Default Two Column-->
<section class="default-two-col">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Column-->
            <div class="col-md-8 col-md-offset-2  col-sm-12 col-xs-12 content-column">
                <article class="inner-box">
                    <h2 class=" sec-title text-center">About Us</h2>
                    <div class="text">
                        <p><?php echo $about['teaser']  ?></p>
                    </div>
                    <br>

                </article>
            </div>


        </div>
    </div>
</section>





<!--Featured Services Section-->
<section class="featured-services">
    <div class="auto-container">

        <div class="sec-title text-center">
            <h2>Our services</h2>
            <div class="heading-text"></div>
        </div>

        <div class="row clearfix">
            <?php foreach ($services as $key => $val) { ?>
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="inner-box">
                        <div class="icon"><span class="flaticon-right"></span></div>
                        <div class="content">
                            <h3><?= $key ?></h3>
                            <div class="text">
                                <p><?php echo $val['teaser'] ?>.</p>
                            </div>
                            <a href="services.php" class="theme-btn skew-btn"><span class="btn-text">Read More</span></a>
                        </div>
                    </article>
                </div>

            <?php } ?>



        </div>
    </div>
</section>

<section class="brochure">
    <div class="container col-xxl-8 px-4 py-5 mb-5">
        <div class="row  g-5 py-5">

            <div class="col-lg-12 text-center">
                <h1 class="display-5 fw-bold lh-1 mb-3">Download Our Brochure Here</h1>
                <p class="">We are delighted to present our latest brochure, showcasing an array of exciting offerings and innovations that await you! To make your experience even more convenient, we invite you to download the brochure directly from our website.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="download.php" class="btn btn-primary btn-lg px-4 me-md-2">Download</a>
                </div>
            </div>
        </div>
    </div>

</section>










<?php include('footer.php') ?>