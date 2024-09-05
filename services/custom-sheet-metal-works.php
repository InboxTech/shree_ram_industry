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
                <li><a href="../services.php"> Services </a></li>
                <li><a href="#/" class="active" id="servicesDetailsButton"> Services Details </a></li>
            </ul>
        </div>
    </div>
    <!-- SERVICES -->
    <div class="services-details">
        <h1>Custom Sheet Metal works</h1>
        <img src="../public/images/services-page/main/service2.jpg" alt="">
        <!-- <h4>Heading 1</h4> -->
        <label>
            <p>
                Shree Ram Industry is a leader in providing custom sheet metal work services, catering to a wide array 
                of industries including automotive, construction, electronics, and machinery. The company specializes 
                in creating bespoke sheet metal components tailored to the unique specifications of each client. From 
                simple brackets to complex enclosures, Shree Ram Industry offers a full range of services, including 
                cutting, bending, welding, and finishing, all executed with precision and attention to detail. Their 
                advanced fabrication facilities are equipped with the latest CNC machines and laser cutting technology, 
                ensuring high accuracy and consistency across all projects.
            </p>
            <p>
                The custom sheet metal work process at Shree Ram Industry begins with a thorough consultation to understand 
                the client's specific needs and design requirements. The experienced engineering team works closely 
                with clients to develop detailed plans, offering expert advice on material selection, design optimization, 
                and cost-efficiency. Whether it's stainless steel, aluminum, copper, or any other metal, Shree Ram Industry 
                has the expertise to handle various materials and produce components that meet the highest standards of 
                quality and durability. Their ability to execute complex designs with tight tolerances makes them a 
                preferred partner for clients seeking reliable and high-performance sheet metal solutions.
            </p>
            <p>
                Quality control is a cornerstone of Shree Ram Industry's custom sheet metal services. Every component 
                undergoes rigorous inspection and testing to ensure it meets the precise specifications and functional 
                requirements of the client. The company employs advanced quality assurance processes, including dimensional 
                inspections, material testing, and surface finish assessments, to guarantee that the final product is 
                flawless. This commitment to quality is reflected in the longevity and performance of the sheet metal 
                components they produce, which are designed to withstand the demanding conditions of their intended applications.
            </p>
            <p>
                In addition to fabrication, Shree Ram Industry offers a range of value-added services such as assembly, 
                finishing, and coating, providing clients with a complete solution from concept to finished product. 
                Their dedication to customer satisfaction is evident in their flexible approach to project management, 
                where they accommodate tight deadlines and complex customizations. By combining technical expertise with 
                a customer-centric approach, Shree Ram Industry has established itself as a trusted provider of custom 
                sheet metal work, delivering solutions that meet and often exceed client expectations.
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
                    <a href="cnc-and-vmc-machine-services.php" class="swiper-slide">
                        <img src="../public/images/services-page/services-img-01.jpg" alt="">
                        <div class="swiper-service-text">
                            <p>CNC & VMC Machining Services</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </div>
                    </a>
                    <a href="custom-sheet-metal-works.php" class="swiper-slide">
                        <img src="../public/images/services-page/services-img-02.jpg" alt="">
                        <div class="swiper-service-text">
                            <p>Custom Sheet Metal works</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </div>
                    </a>
                    <a href="precision-machine-services.php" class="swiper-slide">
                        <img src="../public/images/services-page/services-img-03.jpg" alt="">
                        <div class="swiper-service-text">
                            <p>Precision Machining Services</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </div>
                    </a>
                    <a href="component-and-engineering-design.php" class="swiper-slide">
                        <img src="../public/images/services-page/services-img-04.jpg" alt="">
                        <div class="swiper-service-text">
                            <p>Component & engineering Design</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </div>
                    </a>
                    <a href="parts-assembly.php" class="swiper-slide">
                        <img src="../public/images/services-page/services-img-05.jpg" alt="">
                        <div class="swiper-service-text">
                            <p>Parts Assembly</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </div>
                    </a>
                    <a href="custom-die-and-mold-making-services.php" class="swiper-slide">
                        <img src="../public/images/services-page/services-img-06.jpg" alt="">
                        <div class="swiper-service-text">
                            <p>Custom Die & Mold Making Service</p>
                            <i class="ti ti-arrow-up-right"></i>
                        </div>
                    </a>
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