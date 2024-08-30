<?php 
    include_once('../header.php');
    $header = new Header();
    $header->includeHeader('Services', '../');
?>

<div class="main-body-servicers">
    <div class="title-image">
        <img src="../public/images/about-title.png" alt="">
        <div class="items ">
            <h3 class="title"> Services </h3>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../services.php" class="active"> Services </a></li>
            </ul>
        </div>
    </div>
    <!-- SERVICES -->
    <div class="services-details">
        <h1>CNC & VMC Machining Services</h1>
        <img src="../public/images/services-page/main/service1.jpg" alt="no images">
        <!-- <h4>Heading 1</h4> -->
        <label>
            <p>
                As one precision CNC  & VMC machining services in Vadodra supplier for a wide range of practices across a spectrum of industries,
                we provide numerous CNC  & VMC machining processes, including CNC  turning, VMC milling, surface grinding, drilling and tapping.
            </p>
            <p>
                Sinker EDM and EDM wire cutting services are playing more and more important roles in manufacturing to achieve close tolerance,
                especially for small batches of parts and components, which have small slots with high precision dimensions and fine surface finish requirements.
            </p>
        </label>
    </div>
    <!-- OUR SERVICES -->
    <div class="our-services-details">
        <h6> <i class="ti ti-bookmark-filled"></i> Our Services</h6>
        <h2>Services We Offer</h2>
        <div class="swiper-services-details">
            <div class="swiper mySwiper5">
                <div class="swiper-wrapper">    
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-01.jpg" alt="">
                        <a href="cnc-and-vmc-machine-services.php" class="swiper-service-text">
                            <p>CNC & VMC Machining Services</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-02.jpg" alt="">
                        <a href="custom-sheet-metal-works.php" class="swiper-service-text">
                            <p>Custom Sheet Metal works</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-03.jpg" alt="">
                        <a href="precision-machine-services.php" class="swiper-service-text">
                            <p>Precision Machining Services</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-04.jpg" alt="">
                        <a href="component-and-engineering-design.php" class="swiper-service-text">
                            <p>Component & engineering Design</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-05.jpg" alt="">
                        <a href="parts-assembly.php" class="swiper-service-text">
                            <p>Parts Assembly</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-06.jpg" alt="">
                        <a href="custom-die-and-mold-making-services.php" class="swiper-service-text">
                            <p>Custom Die & Mold Making Service</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include_once('../footer.php'); 
    $footer = new Footer();
    $footer->includeFooter('../');
?>
