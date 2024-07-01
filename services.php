<?php
    include_once('header.php');
    $header = new Header();
    $header->includeHeader('Services', './');
?>

<div class="main-body-servicers">
    <div class="title-image">
        <img src="public/images/about-title.png" alt="">
        <div class="items ">
            <h3 class="title"> Services </h3>
            <ul>
                <li><a href="#">Home</a></li>   
                <li><a href="#"> Services</a></li>
            </ul>
        </div>
    </div>
    <!-- OUR SERVICES -->
    <div class="content">
        <h6><i class="ti ti-bookmark-filled"></i>Our Services</h6>
        <h2>Quality Manufacturing is Our Objective</h2>
    </div>
    <!-- MAIN SERVICES IMAGES ITEMS -->
    <div class="main">
        <div class="main-items-services">
            <h1>01</h1>
            <div class="img-container">
                <a href="services_details.php"> <img src="public/images/services-page/services-img-01.png" alt="">
                <div class="text-content">
                    <label for="">CNC & VMC Machining Services</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>01</h1>
            <div class="img-container">
                <a href="services_details.php"> <img src="public/images/services-page/services-img-02.png" alt="">
                <div class="text-content">
                    <label for="">Custom Sheet Metal works</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>01</h1>
            <div class="img-container">
                <a href="services_details.php"> <img src="public/images/services-page/services-img-03.png" alt="">
                <div class="text-content">
                    <label for="">Precision Machining Services</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>01</h1>
            <div class="img-container">
                <a href="services_details.php"> <img src="public/images/services-page/services-img-04.png" alt="">
                <div class="text-content">
                    <label for="">Component & engineering Design Services</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>01</h1>
            <div class="img-container">
                <a href="services_details.php"> <img src="public/images/services-page/services-img-05.png" alt="">
                <div class="text-content">
                    <label for="">Parts Assembly</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>01</h1>
            <div class="img-container">
                <a href="services_details.php"> <img src="public/images/services-page/services-img-06.png" alt="">
                <div class="text-content">
                    <label for="">Custom Die & Mold Making Service</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
    </div>
    <!-- OUR CLIENTS-->
    <div class="our-clients">
            <h6><i class="ti ti-bookmark-filled"></i> OUR CLIENTS</h6>
            <h2>Our Trusted Partners</h2>
            <ul>
                <li><a href="#/"><img src="public/images/about/client-1.png" alt=""></a></li>
                <li><a href="#/"><img src="public/images/about/client-2.png" alt=""></a></li>
                <li><a href="#/"><img src="public/images/about/client-3.png" alt=""></a></li>
                <li><a href="#/"><img src="public/images/about/client-4.png" alt=""></a></li>
                <li><a href="#/"><img src="public/images/about/client-5.png" alt=""></a></li>
            </ul>
    </div>
</div>

<?php include_once('footer.php');?>