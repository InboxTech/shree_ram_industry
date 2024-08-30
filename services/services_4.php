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
        <h1>Component & engineering Design</h1>
        <img src="../public/images/services-page/services-details-img.png" alt="">
        <!-- <h4>Heading 1</h4> -->
        <label>
            <p>
                At Shree Ram Industry, we specialize in providing top-tier component and engineering design services tailored to meet 
                the unique needs of your projects. Our team of experienced engineers and designers work closely with you to transform your concepts 
                into reality, ensuring precision, efficiency, and innovation at every step of the process.
            </p>
            <p>
                Our Services Include:
                Custom Component Design: From initial concept to final production, we design custom components that fit perfectly within your system, meeting both performance and aesthetic requirements.
                Prototyping & Testing: We provide rapid prototyping and rigorous testing to validate designs, ensuring that every component functions optimally under real-world conditions.
                Mechanical & Electrical Engineering: Our multidisciplinary team excels in both mechanical and electrical engineering, offering integrated solutions that encompass all aspects of your product’s design.
            </p>
            <p>
                CAD Modeling & Simulation: Utilizing the latest CAD software and simulation tools, we create detailed models and perform simulations to predict performance, identify potential issues, and optimize designs before they go into production.
                Product Development & Innovation: We partner with you throughout the product development lifecycle, from ideation and design through to manufacturing, helping you bring innovative products to market faster.
                Compliance & Regulatory Support: Our designs adhere to industry standards and regulatory requirements, ensuring that your components are compliant with all necessary certifications.
            </p>
            <p>
            Whether you’re developing a new product from scratch or need to enhance an existing system, 
            Shree Ram Industry is here to provide the engineering design expertise you need to succeed. 
            Let us help you bring your vision to life with precision, creativity, and excellence.
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
                        <a href="services_1.php" class="swiper-service-text">
                            <p>CNC & VMC Machining Services</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-02.jpg" alt="">
                        <a href="services_2.php" class="swiper-service-text">
                            <p>Custom Sheet Metal works</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-03.jpg" alt="">
                        <a href="services_3.php" class="swiper-service-text">
                            <p>Precision Machining Services</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-04.jpg" alt="">
                        <a href="services_4.php" class="swiper-service-text">
                            <p>Component & engineering Design</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-05.jpg" alt="">
                        <a href="services_5.php" class="swiper-service-text">
                            <p>Parts Assembly</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/images/services-page/services-img-06.jpg" alt="">
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
