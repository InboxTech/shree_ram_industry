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
        <h2>Quality Manufacturing is Our Objective</h2>
    </div>
    <!-- MAIN SERVICES IMAGES ITEMS -->
    <div class="main">
        <div class="main-items-services">
            <h1>01</h1>
            <div class="img-container">
                <a href="services/cnc-and-vmc-machine-services.php"> <img src="public/images/services-page/services-img-01.jpg" alt="">
                <div class="text-content">
                    <p>CNC & VMC Machining Services</p>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>02</h1>
            <div class="img-container">
                <a href="services/custom-sheet-metal-works.php"> <img src="public/images/services-page/services-img-02.jpg" alt="">
                <div class="text-content">
                    <p>Custom Sheet Metal works</p>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>03</h1>
            <div class="img-container">
                <a href="services/precision-machine-services.php"> <img src="public/images/services-page/services-img-03.jpg" alt="">
                <div class="text-content">
                    <p>Precision Machining Services</p>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>04</h1>
            <div class="img-container">
                <a href="services/component-and-engineering-design.php"> <img src="public/images/services-page/services-img-04.jpg" alt="">
                <div class="text-content">
                    <p>Component & engineering Design Services</p>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>05</h1>
            <div class="img-container">
                <a href="services/parts-assembly.php"> <img src="public/images/services-page/services-img-05.jpg" alt="">
                <div class="text-content">
                    <p>Parts Assembly</p>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
        <div class="main-items-services">
            <h1>06</h1>
            <div class="img-container">
                <a href="services/custom-die-and-mold-making-services.php"> <img src="public/images/services-page/services-img-06.jpg" alt="">
                <div class="text-content">
                    <p>Custom Die & Mold Making Service</p>
                    <i class="ti ti-arrow-up-right"></i>
                </div>
                </a>
            </div>
        </div>
    </div>
    <!-- OUR CLIENTS-->
    <div class="our-clients">
            <h4><i class="ti ti-bookmark-filled"></i> OUR CLIENTS</h4>
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

