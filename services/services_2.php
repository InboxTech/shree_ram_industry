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
        <h1>Custom Sheet Metal works</h1>
        <img src="../public/images/services-page/services-details-img.png" alt="">
        <!-- <h4>Heading 1</h4> -->
        <label>
            <p>
                At Shree Ram Industry, we specialize in custom sheet metal work, delivering high-quality solutions tailored to your specific needs. With decades 
                of experience and state-of-the-art technology, we transform raw metal into precisely crafted components that meet the highest standards
                of durability and functionality.
            </p>
            <p>
                Whether you require intricate designs, large-scale production, or specialized components, our 
                team of skilled artisans and engineers is equipped to handle all types of custom sheet metal work. We work with a wide range of metals, including:
            </p>
            <p>
                Precision Fabrication: Our advanced CNC machines and laser cutting technology ensure that every piece is crafted with 
                utmost precision. We can create complex shapes, detailed patterns, and custom dimensions to suit your exact specifications.
                Welding and Assembly: We provide professional welding services, ensuring strong, clean joints for all types of metal assemblies. 
                Whether it's a prototype or a final product, our team ensures every piece is assembled with care and precision.
                Custom Finishes: Choose from a variety of finishes, including powder coating, anodizing, and polishing. Our finishing services not
                only enhance the appearance of your metal products but also provide additional protection against corrosion and wear.
                Prototyping and Production Runs: From single prototypes to full-scale production, we offer flexible manufacturing solutions. 
                Our quick turnaround times and attention to detail ensure that your project stays on track and meets your deadlines.
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
                        <img src="../public/images/services-page/services-img-01.png" alt="">
                        <a href="services_1.php" class="swiper-service-text">
                            <p>CNC & VMC Machining Services</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-02.png" alt="">
                        <a href="services_2.php" class="swiper-service-text">
                            <p>Custom Sheet Metal works</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-03.png" alt="">
                        <a href="services_3.php" class="swiper-service-text">
                            <p>Precision Machining Services</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-04.png" alt="">
                        <a href="services_4.php" class="swiper-service-text">
                            <p>Component & engineering Design</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-05.png" alt="">
                        <a href="services_5.php" class="swiper-service-text">
                            <p>Parts Assembly</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-06.png" alt="">
                        <a href="services_6.php" class="swiper-service-text">
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
