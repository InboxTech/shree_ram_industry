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
        <h1>Component & engineering Design</h1>
        <img src="../public/images/services-page/main/service4.jpg" alt="">
        <!-- <h4>Heading 1</h4> -->
        <label>
            <p>
                At Shree Ram Industry, we specialize in providing top-tier component and engineering design services tailored to meet
                the unique needs of your projects. Our team of experienced engineers and designers work closely with you to transform your concepts
                into reality, ensuring precision, efficiency, and innovation at every step of the process.
            </p>
            <p>
                Shree Ram Industry specializes in precision component and engineering design for the metal 
                part manufacturing sector. The company leverages advanced CAD/CAM software and state-of-the-art machinery to create 
                high-quality metal components tailored to the specific needs of its clients. Their design process begins with a 
                thorough analysis of the client's requirements, ensuring that each component is optimized for performance, durability, 
                and cost-efficiency. The engineering team at Shree Ram Industry works closely with clients throughout the design phase, 
                offering insights into material selection, manufacturability, and potential cost savings. This collaborative approach 
                ensures that the final product not only meets but often exceeds expectations in terms of quality and functionality.
            </p>
            <p>
                In the metal part manufacturing industry, precision and reliability are crucial, and Shree Ram Industry excels in these areas by 
                adhering to strict quality control measures throughout the design and production processes. The company utilizes advanced 
                testing and simulation tools to validate designs before they move into production, minimizing the risk of errors and 
                ensuring a higher standard of quality. Whether it's creating custom components for automotive, aerospace, or 
                industrial machinery, Shree Ram Industry's engineering team is committed to delivering innovative solutions that 
                enhance the performance and longevity of the products they manufacture. Their focus on continuous improvement and 
                innovation makes them a trusted partner for clients looking for robust and efficient metal components.
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