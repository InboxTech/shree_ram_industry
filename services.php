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
                <li><a href="index.php">Home</a></li>   
                <li><a href="services.php" class="active"> Services</a></li>
            </ul>
        </div>
    </div>
    <!-- OUR SERVICES -->
    <div class="content">
        <h4><i class="ti ti-bookmark-filled"></i>Our Services</h4>
        <h1>Quality Manufacturing is Our Objective</h1>
    </div>
    <!-- MAIN SERVICES IMAGES ITEMS -->
    <div class="main">
        <div class="main-items-services">
            <h1>01</h1>
            <div class="img-container">
                <a href="services/services_1.php"> <img src="public/images/services-page/services-img-01.png" alt="">
                <div class="text-content">
                    <label for="">CNC & VMC Machining Services</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>02</h1>
            <div class="img-container">
                <a href="services/services_2.php"> <img src="public/images/services-page/services-img-02.png" alt="">
                <div class="text-content">
                    <label for="">Custom Sheet Metal works</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>03</h1>
            <div class="img-container">
                <a href="services/services_3.php"> <img src="public/images/services-page/services-img-03.png" alt="">
                <div class="text-content">
                    <label for="">Precision Machining Services</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>04</h1>
            <div class="img-container">
                <a href="services/services_4.php"> <img src="public/images/services-page/services-img-04.png" alt="">
                <div class="text-content">
                    <label for="">Component & engineering Design Services</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>05</h1>
            <div class="img-container">
                <a href="services/services_5.php"> <img src="public/images/services-page/services-img-05.png" alt="">
                <div class="text-content">
                    <label for="">Parts Assembly</label>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>06</h1>
            <div class="img-container">
                <a href="services/services_6.php"> <img src="public/images/services-page/services-img-06.png" alt="">
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
                <li><a href="https://www.te.com/en/home.html"><img src="public/images/clients_logo/TE_Connectivity_logo.png" alt=""></a></li>
                <li><a href="https://www.nvent.com/en-in/raychem"><img src="public/images/clients_logo/raycham_logo.jpg" alt=""></a></li>
                <li><a href="https://bruggcables.com/en/"><img src="public/images/clients_logo/brugg_logo.png" alt=""></a></li>
                <li><a href="https://www.nkt.com/"><img src="public/images/clients_logo/nkt_logo.png" alt=""></a></li>
                <li><a href="https://www.lscns.co.kr/en/main.asp"><img src="public/images/clients_logo/ls-cable-and-system-logo.png" alt=""></a></li>
                <li><a href="https://www.epoxyhouse.com/"><img src="public/images/clients_logo/baroda_bushing_logo.jpg" alt=""></a></li>
                <li><a href="https://www.epoxyhouse.com/"><img src="public/images/clients_logo/eproxy_house_logo.png" alt=""></a></li>
                <li><a href="https://www.epoxyhouse.com/contactus"><img src="public/images/clients_logo/ecs_logo.jpg" alt=""></a></li>
                <li><a href="https://www.epoxyhouse.com/contactus/"><img src="public/images/clients_logo/kaizan_logo.jpg" alt=""></a></li>
            </ul>
    </div>
</div>

<?php 
    include_once('footer.php'); 
    $footer = new Footer();
    $footer->includeFooter('./');
?>

