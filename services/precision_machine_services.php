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
        <h1>Precision Machining Services</h1>
        <img src="../public/images/services-page/main/service3.jpg" alt="">
        <!-- <h4>Heading 1</h4> -->
        <label>
            <p>
                At Shree Ram Industry, we specialize in delivering high-quality precision machining services tailored to meet the exacting standards of various industries. 
                Our state-of-the-art facility is equipped with advanced CNC machines, manual equipment, and a team of skilled machinists who are dedicated to providing exceptional craftsmanship and reliable results.
            </p>
            <p>
                CNC Machining: Utilizing cutting-edge CNC technology, we provide precise and repeatable machining for complex parts and components. Whether you need prototypes or high-volume production, our CNC machining services ensure consistent quality and tight tolerances.
                Custom Fabrication: Our custom fabrication services allow you to create unique parts and assemblies with precision. From design to production, we work closely with you to deliver solutions that meet your specific requirements. 
            </p>
            <p>
                Prototyping & Production: We offer rapid prototyping services to help you bring your ideas to life quickly. Our production capabilities can scale from small runs to large quantities, ensuring you have the parts you need, when you need them.
                Material Expertise: We work with a wide range of materials, including metals, plastics, and composites. Our expertise in material properties allows us to recommend the best options for your project, ensuring durability and performance.
                Quality Assurance: Quality is at the core of our machining services. Our rigorous inspection processes and adherence to industry standards ensure that every part we produce meets the highest levels of precision and reliability.
            </p>
            <p>
                Aerospace: Delivering components that meet the stringent requirements of the aerospace industry.
                Medical: Manufacturing precision parts for medical devices and equipment with the highest level of accuracy.
                Automotive: Providing machining services for automotive components, ensuring performance and longevity.
                Electronics: Creating intricate parts for electronic devices and assemblies.
                Defense: Supplying precision-machined parts for defense and military applications.
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
