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
        <h1>Parts Assembly</h1>
        <img src="../public/images/services-page/main/service5.jpg" alt="">
        <!-- <h4>Heading 1</h4> -->
        <label>
            <p>
                At Shree Ram Industry, we specialize in providing comprehensive parts assembly services tailored to meet the specific needs of our clients. Our expertise covers a wide range of industries, from automotive and electronics to consumer 
                goods and industrial equipment. We understand that efficient and precise assembly is crucial for the success of any product, and we are committed to delivering high-quality services that meet your production goals.
            </p>
            <p>
                Custom Assembly Solutions: We offer customized assembly solutions designed to fit the unique requirements of your product, ensuring that every component is assembled with precision and care.
                Sub-Assembly Services: Our sub-assembly services are ideal for complex products that require multiple stages of assembly. We can manage the entire process, from component sourcing to final assembly, ensuring a seamless integration into your production line.
                Electromechanical Assembly: We specialize in the assembly of electromechanical components, providing expertise in wiring, soldering, and testing to ensure that your products are reliable and ready for market.
                Kitting Services: We offer kitting services to streamline your production process. By pre-assembling components into kits, we help reduce assembly time and increase efficiency on the production floor.
                Quality Assurance: Our rigorous quality assurance processes ensure that every assembled product meets your specifications and industry standards. We perform thorough inspections at every stage of assembly to guarantee the highest level of quality.
            </p>
            <p>
                Expertise and Experience: With years of experience in the assembly industry, our team has the knowledge and skills to handle even the most complex assembly projects.
                State-of-the-Art Equipment: We utilize the latest technology and equipment to ensure precision and efficiency in every assembly task.
                Flexibility: Whether you need a one-time assembly project or ongoing support, we offer flexible services that can be scaled to meet your needs.
                On-Time Delivery: We understand the importance of deadlines, and we are committed to delivering your assembled products on time, every time.
                Cost-Effective Solutions: Our efficient processes and expertise allow us to offer competitive pricing without compromising on quality.
            </p>
            <p>
                Ready to discuss your parts assembly needs? Contact us today to learn more about how we can help you achieve your production goals with our reliable and efficient assembly services.
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
