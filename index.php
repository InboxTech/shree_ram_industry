<?php 
    include_once('header.php');
    $header = new Header();
    $header->includeHeader('Index', './');
?>

<main>
    <!---------------------------- swiper ------------------------------>
    <div class="first">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="public/images/swiper/s1.png" alt="" />
                    <!------------------------------ img text ------------------------------>
                    <div class="img-container">
                        <div class="">
                            <span class="img-sb-title">TOTAL ENGINEERING SOLUTIONS</span><br/>
                            <span class="img-title">Create, Enhance and Sustain.</span><br/>
                            <p>
                                We would like introduce ourselves as Supplier of precision
                                engineering parts for more than 25 years having CNC & VMC
                                machines </p>
                            <!-- <button class="btn-outline-white">
                                Discover More
                            </button> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="public/images/swiper/s2.jpg" alt="" />
                    <!------------------------------ img text ------------------------------>
                    <div class="img-container">
                        <div class="">
                            <span class="img-sb-title">TOTAL ENGINEERING SOLUTIONS</span><br/>
                            <span class="img-title">Create, Enhance and Sustain.</span><br/>
                            <p>
                                We would like introduce ourselves as Supplier of precision
                                engineering parts for more than 25 years having CNC & VMC
                                machines </p>
                            <!-- <button class="btn-outline-white">
                                Discover More
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!------------------------------ OUR WORKING STATEGIES  ------------------------------>
    <div class="i-1">
        <!-- text -->
        <div class="col-lg-6 col-md-12">
            <div>
                <h4><i class="ti ti-bookmark-filled"></i> OUR WORKING STATEGIES</h4>
                <h1 class="sub-title">We Provide Excellent Engineering Solutions.</h1>
            </div>
            <div>
                <p>
                    Here is the working strategy for a manufacturing workshop in a paragraph format:
                </p>
                <p>
                    Our manufacturing workshop strategy aims to produce high-quality products efficiently and effectively, 
                    with a focus on achieving 95% on-time delivery, 98% product quality, and a 15% increase in productivity. 
                    To achieve this, we will maintain a structured approach with clear processes for production planning, quality control, production, and maintenance. 
                    We will regularly review our performance metrics, including on-time delivery, quality, lead time, productivity, and equipment uptime, and encourage continuous improvement through employee feedback and training. Additionally, 
                    we will prioritize a safe and healthy work environment, following established protocols and providing regular training to ensure a successful and efficient workshop operation.
                </p>
                <!-- <a href="#/">View More <i class="ti ti-chevrons-right"></i></a> -->
            </div>
        </div>
        <!------------------------------ card ------------------------------>
        <div class="col-lg-5 col-md-12">
            <div class="row">
                <div class="cards">
                    <div class="cards-body">
                        <h4><i class="ti ti-device-imac-search"></i></h4>
                        <h5>Product Research</h5>
                        <p>
                            Conducting product research in our manufacturing workshop enables us to innovate, improve designs, and 
                            optimize production processes, ensuring high-quality products that meet customer needs.
                        </p>
                    </div>
                    <div class="cards-body">
                        <h4><i class="ti ti-bolt"></i></h4>
                        <h5>Great Solutions</h5>
                        <p>
                            Develop innovative solutions by combining cutting-edge technology, expert craftsmanship, and customer-centric design, 
                            driving efficiency, quality, and cost-effectiveness in our manufacturing workshop's custom products.
                        </p>
                    </div>
                </div>

                <div class="cards1">
                    <div class="cards-body">
                        <h4><i class="ti ti-bulb"></i></h4>
                        <h5>Business Idea</h5>
                        <p>
                            Establish a manufacturing workshop offering custom high precision metal cutting ,fabrication, assembly, and testing services, leveraging 
                            skilled labor and advanced equipment to produce high-quality products for various industries.
                        </p>
                    </div>

                    <div class="cards-body">
                        <h4><i class="ti ti-files"></i></h4>
                        <h5>Quality Projects</h5>
                        <p>
                             1. Precision engineering <br>
                             2. Zero-defect assembly <br>
                             3. Customized quality control <br>
                             4. Material optimization <br>
                             5. Lean manufacturing <br>
                             6. Continuous improvement <br>
                             7. Certification and compliance <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------ OUR BEST SERVICES ------------------------------>
    <div class="i-2">
        <h4><i class="ti ti-bookmark-filled"></i> OUR BEST SERVICES</h4>
        <h2>Why we are different</h2>
        <ul>
            <li>
                <h4>01</h4> 
                <h5>CNC & VMC Machining Services</h5>
                <p>
                    Offering precision CNC (Computer Numerical Control) and VMC (Vertical Machining Center) services for custom part manufacturing, 
                    prototyping, and production, ensuring high accuracy and efficiency.
                </p>
                <a href="services/cnc-and-vmc-machine-services.php">View More <i class="ti ti-chevrons-right"></i></i></a>
            </li>
            <li>
                <h4>02</h4>
                <h5>Custom Sheet Metal Works</h5>
                <p>
                    Providing precision custom sheet metal works, including fabrication, cutting, bending, and assembly, 
                    for complex parts and products, utilizing advanced machinery and techniques.
                </p>
                <a href="services/custom-sheet-metal-works.php">View More <i class="ti ti-chevrons-right"></i></i></a>
            </li>
            <li>
                <h4>03</h4>
                <h5> Precision Machining Services</h5>
                <p>
                    Providing precision machining services, including milling, turning, and grinding, for complex parts and components, 
                    with tight tolerances and exceptional surface finishes, quickly and accurately.
                </p>
                <a href="services/precision-machine-services.php">View More <i class="ti ti-chevrons-right"></i></i></a>
            </li>
            <li>
                <h4>04</h4>
                <h5>Component & Engineering Services</h5>
                <p>
                    Expert metal component design services, creating precise 2D/3D models, prototypes, 
                    and production-ready parts using CAD/CAM software, ensuring optimal strength, durability, and functionality.
                </p>
                <a href="services/component-and-engineering-design.php">View More <i class="ti ti-chevrons-right"></i></i></a>
            </li>
            <li>
                <h4>05</h4>
                <h5>Parts Assembly</h5>
                <p>
                    Providing comprehensive part assembly services, including component sourcing, kitting, 
                    and final assembly, ensuring accurate, efficient, and high-quality product builds in our manufacturing workshop.
                </p>
                <a href="services/parts-assembly.php">View More <i class="ti ti-chevrons-right"></i></i></a>
            </li>
            <li>
                <h4>06</h4>
                <h5>Custom Die & Mold Making Service</h5>
                <p>
                    Designing and manufacturing custom dies and moulds for precision metal stamping, plastic injection, and 
                    casting, enabling accurate and efficient production of complex parts.
                </p>
                <a href="services/custom-die-and-mold-making-services.php">View More <i class="ti ti-chevrons-right"></i></i></a>
            </li>
        </ul>
    </div>

    <!------------ ------------------ WHO ARE WE ? ------------------------------>
    <div class="i-3">
        <div class="col-lg-6 col-md-12">
            <img src="public/images/i3.png" alt="">
        </div>
        <div class="col-lg-6 col-md-12">
            <h4><i class="ti ti-bookmark-filled"></i>WHO ARE WE ?</h4>
            <h1>SHREE RAM INDUSTRIES</h1>
            <p>We would like introduce ourselves as Supplier of precision engineering parts for more than 25
                years having CNC & VMC machines and all type of conventional machine shop set up Situated in
                Makarpura Industrial Area (G.I.D.C.) of Vadodara,Gujarat,india.</p>
            <p>We carry out all type of PRECISION MACHINED COMPONENT, CUSTOM SHEET METAL WORKS & ASSEMBLIES  as per
                customer’s design & Drawings.</p>
            <p>We provide complete engineering solutions from Process establishment, Manufacturing inspection and
                supply/trial to our customer to their at most satisfaction at committed time.</p>
            <!-- <a href="#/">View More <i class="ti ti-chevrons-right"></i></i></a> -->
        </div>
    </div>

    <!------------------------------ INDUSTRIES WE SERVE ------------------------------>
    <div class="i-4">
        <div>
            <h4><i class="ti ti-bookmark-filled"></i>INDUSTRIES WE SERVE</h4>
            <h1>Our Projects</h1>
        </div>
        <div class="p-5">
            <div class="swiper mySwiper2">
                <div class="button">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"><i class="ti ti-arrow-left"></i></div>
                    <div class="swiper-button-next"><i class="ti ti-arrow-right"></i></div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="pb-3"><i class="ti ti-point-filled"></i> GENERAL ENGINEERING</div>
                        <img src="public/images/our_project/general-eng.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="pb-3" ><i class="ti ti-point-filled"></i> ELECTRICAL PARTS</div>
                        <img src="public/images/our_project/electrical_parts.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="pb-3"><i class="ti ti-point-filled"></i> BEARING INDUSTRIES</div>
                        <img src="public/images/our_project/bearing-industrial.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <div class="pb-3"><i class="ti ti-point-filled"></i> AUTOMOTIVE</div><img
                            src="public/images/our_project/automative.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="pb-3"><i class="ti ti-point-filled"></i> POWER INDUSTRY</div><img
                            src="public/images/our_project/power-industries.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="pb-3"><i class="ti ti-point-filled"></i> OIL AND GAS</div><img
                            src="public/images/our_project/oil-and-gas.jpg" alt="">
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="pb-3"><i class="ti ti-point-filled"></i> VALVE COMPONENTS</div><img
                            src="public/images/our_project/" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="pb-3"><i class="ti ti-point-filled"></i> PRODUCT OF PUMP </div><img
                            src="public/images/our_project/" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!------------------------------ Our Products ------------------------------>
    <div class="i-5">
        <!-- title -->
        <div class="d-flex justify-content-between">
            <div>
                <h4><i class="ti ti-bookmark-filled"></i>Products</h4>
                <h1>Our Products</h1>
            </div>
            <div class=" align-content-center">
                <a class="btn-outline-orange" href="products.php">View All <i class="ti ti-arrow-right"></i></a>
            </div>
        </div>
        <!------------------------------ swiper ------------------------------>
        <div>
            <!------------------------------ swiper 1 ------------------------------>
            <div class="mt-5">
                <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="public/images/swiper/i5.1s1.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.1s2.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.1s3.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.1s4.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.1s5.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.1s6.png" alt=""></div>
                        <!-- <div class="swiper-slide"><img src="public/images/swiper/i5s1.png" alt=""></div> -->
                        <!-- <div class="swiper-slide"><img src="public/images/swiper/i5s2.png" alt=""></div> -->
                        <div class="swiper-slide"><img src="public/images/swiper/i5s3.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5s4.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5s5.png" alt=""></div>
                    </div>
                </div>
            </div>
            <!------------------------------ swiper 2 ------------------------------>
            <div class="mt-5">
                <div class="swiper mySwiper4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="public/images/swiper/i5.2s1.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.2s2.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.2s3.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.2s4.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.2s5.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5.2s6.png" alt=""></div>
                        <!-- <div class="swiper-slide"><img src="public/images/swiper/i5s1.png" alt=""></div> -->
                        <!-- <div class="swiper-slide"><img src="public/images/swiper/i5s2.png" alt=""></div> -->
                        <div class="swiper-slide"><img src="public/images/swiper/i5s3.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5s4.png" alt=""></div>
                        <div class="swiper-slide"><img src="public/images/swiper/i5s5.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------ OUR CLIENTS ------------------------------>
    <div class="i-6">
        <div class="top">
            <div class="our-clients">
                <h4><i class="ti ti-bookmark-filled"></i> OUR CLIENTS</h4>
                <h1>Our Trusted Partners</h1>
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
        <div class="mid">
            <img src="public/images/i6.2.png" alt="">
            <div class="mid-txt">
                <div>
                    <p>Clients</p>
                    <h1>50+</h1>
                </div>
                <span class="vl"></span>
                <div>
                    <p>Products</p>
                    <h1>15K+</h1>
                </div>
                <span class="vl"></span>
                <div>
                    <p>Machines</p>
                    <h1>30+</h1>
                </div>
                <span class="vl"></span>
                <div>
                    <p>Experiences</p>
                    <h1>25+</h1>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div>
                <h1>We're protecting your future with the best service</h1>
                <!-- <button> <img src="public/images/play-btn.png"> </button> -->
            </div>
        </div>
    </div>

    <!------------------------------  TESTIMONIALS ------------------------------>
    <!-- <div class="i-7">
        <div class="top">
            <div class="heading">
                <h5><i class="ti ti-bookmark-filled"></i>TESTIMONIALS</h5>
                <h1>People Says About Machine</h1>
            </div>
            <div class="view-btn">
                <a class="btn-outline-orange" href="#/">View All <i class="ti ti-arrow-right"></i></a>
            </div>
        </div>
        <div class="bottom">
            <div class="comments-img">
                <img src="public/images/comments-icon.png" alt="">
            </div>
            <div class="comments-section">
                <div class="text">
                    <img src="public/images/rating-star.png" alt="">
                    <label for="">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit .
                    </label>
                </div>
                <div class="name-txt">
                    <div>
                        <h3>Nathan Felix</h3>
                        <h5>CEO, High Rise Construction</h5>
                    </div>
                    <div class="arrow-img-icons">
                        <a href="#/"><img src="public/images/left-arrow (2).png" alt=""></a>
                        <a href="#/"><img src="public/images/rigth-arrow.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!------------------------------ Let’s Talk About : ------------------------------>
    <div class="i-8">
        <div class="col-lg-5 col-md-12 m-3">
            <div class="contents">
                <h1> Let’s Talk About : </h1>
                <p> Have a project in mind that you think we’d be a great fit for it? We’d love to know what you’re thinking </p>
                <ul id="menu">
                    <li><a href="#/" class="active" onclick="showForm('newProjectForm')">New Project</a></li>
                    <li><a href="#/" onclick="showForm('ourTeamJoinForm')">Joining Our Team</a></li>
                    <li><a href="#/" onclick="showForm('generalQueriesForm')">General Inquiries</a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 m-3 form" id="newProjectForm" style="display:block">
            <form class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your First Name" required>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Last Name" required>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" required>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Company Name" required>
                </div>
                <div class="mb-3 col-12">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Your Message" required></textarea>
                </div>
                <div class="d-flex">
                    <input type="submit" class="btn-outline-orange" name="new-project-btn" value="Send Message">
                </div>
            </form>
        </div>

        <div class="col-lg-6 col-md-12 m-3 form" id="ourTeamJoinForm" style="display:none">
            <form class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your First Name" required>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Last Name" required>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" required>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Designation</label>
                    <input type="text" class="form-control" placeholder="Designation" required>
                </div>
                <div class="mt-2 mb-3 col-6 ">
                    <label class="form-label">Upload CV</label>
                    <input type="file" name="cv" required/>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Mobile Number</label>
                    <input type="mobile" class="form-control" placeholder="Mobile" required>
                </div>
                <div class="d-flex">
                    <input type="submit" class="btn-outline-orange" name="our-team-join-btn" value="Send Message">
                </div>
            </form>
        </div>

        <div class="col-lg-6 col-md-12 m-3 form" id="generalQueriesForm" style="display:none">
            <form class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Full Name" required>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" required>
                </div>
                <div class="mb-3 col-12">
                    <label class="form-label">Query Message</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Your Query Message" required></textarea>
                </div>
                <div class="d-flex">
                    <input type="submit" class="btn-outline-orange" name="general-query-btn" value="Send Query">
                </div>
            </form>
        </div>
    </div>
</main>

<?php 
    include_once('footer.php'); 
    $footer = new Footer();
    $footer->includeFooter('./');
?>
