<?php
    class Header {
        public function includeHeader($title, $parentPath) {
            echo '
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <title>'.$title.'</title>
                    <link rel="icon" type="image/x-icon" href="'.$parentPath.'public/images/logo.png">
                    <meta charset="utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

                    <link href="'.$parentPath.'public/css/style.css" rel="stylesheet" />
                    <link href="'.$parentPath.'public/css/about.css" rel="stylesheet" />
                    <link href="'.$parentPath.'public/css/products.css" rel="stylesheet" />
                    <link href="'.$parentPath.'public/css/services.css" rel="stylesheet" />
                    <link href="'.$parentPath.'public/css/contact_us.css" rel="stylesheet" />
                    <link href="'.$parentPath.'public/webfont/tabler-icons.css" rel="stylesheet">
                    <link href="'.$parentPath.'public/bootstrap/bootstrap.min.css" rel="stylesheet">

                    <link href="https://fonts.googleapis.com" rel="preconnect" />
                    <link href="https://fonts.gstatic.com" crossorigin rel="preconnect" />
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
                    <!-- swiper -->
                    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
                </head>
                <body>
                <header>
                    <nav class="">
                        <div class="main-nav-items">
                            <div class="nav-all-items">
                                <ul class="nav-1">
                                    <li class="line1"> <i class="ti ti-map-pin"></i> 677, G.I.D.C Estate, Makarpura, Vadodara -390010, Gujarat, India </li>
                                    <li class="line1"><i class="ti ti-phone"></i> +91 74900 04746 </li>
                                    <li class="d-flex align-items-center"><i class="ti ti-mail"></i> info@shreeramindustry.in</li>
                                </ul>
                                <div class="nav-left-items">
                                    <ul>
                                        <li> <i class="ti ti-file-description"></i> <a href="'.$parentPath.'public/downloads/brochure.pdf" target="_blank"> Download Our Brochure </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nav-2">
                            <div class="first-row">
                                <img src="'.$parentPath.'public/images/icon.png" alt="">
                            </div>
                            <div class="second-row">
                                <ul>
                                    <li><a class="active" href="'.$parentPath.'index.php">Home</a></li>
                                    <li><a href="'.$parentPath.'about.php">About Us</a></li>
                                    <li><a href="'.$parentPath.'services.php">Services</a></li>
                                    <li><a href="'.$parentPath.'products.php">Products <i class="ti ti-chevron-down"></i> </a></li>   
                                    <li><a href="'.$parentPath.'contact_us.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="third-row">
                                <img src="'.$parentPath.'public/images/certification.png" alt="">
                            </div>
                        </div>
                    </nav>
                </header>
            ';
        }
    }
?>