<?php 
    class Footer {
        public function includeFooter($parentPath) {
            echo '
                <footer>
                    <div class="footer-area">
                        <div class="subscribe">
                            <h4>Our Location:</h4>
                            <div class="location mt-4">
                                <i class="ti ti-map-pin"></i>
                                <a href="https://maps.app.goo.gl/7kAdxYuHYBTZGKqB6"><label >677, G.I.D.C Estate, Makarpura, Vadodara -390010, Gujarat, India</label></a>
                            </div>
                            <div class="location2">
                                <p><a href="https://www.facebook.com/SRI677?mibextid=ZbWKwL"><i class="ti ti-brand-facebook"></i></a></p>
                                    <!-- <p><a href="#/"><i class="ti ti-brand-instagram"></i></a></p> -->
                                    <p><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEUBQU6FwbuXwAAAZEx6LkIMiWYBHQ9qd1saDaQTIXAGwcp4uBD2narsPQgZnmzOxCrZa7ufnzykrxY1NdOBym0-vCYijRQupgSAMGdgVcY6R_imEeBgwFF7GGDeZeF4xdIIvQ=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fshree-ram-industries-vadodara%2F"><i class="ti ti-brand-linkedin"></i></a></p>
                                    <!-- <p><a href="#/"><i class="ti ti-brand-pinterest"></i></a></p> -->
                                </div>
                        </div>
                        <div class="queck-links">
                            <h4>Quick Links</h4>
                            <div class="queck-links-items" >
                                <ul>
                                    <li><a href="'.$parentPath.'index.php">Home</a></li>
                                    <li><a href="'.$parentPath.'about.php">About Us</a></li>
                                    <li><a href="'.$parentPath.'services.php">Services</a></li>
                                    <li><a href="'.$parentPath.'products.php">Products</a></li>
                                    <li><a href="'.$parentPath.'contact_us.php">Contact</a></li>
                                    <!-- <li><a href="#/">Our Mission</a></li>
                                    <li><a href="#/">Our Partners</a></li> -->
                                </ul>
                                <ul>
                                    <li><a href="#/">Privacy Policy</a></li>
                                    <li><a href="'.$parentPath.'public/downloads/sitemap.xml">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="get-in-touch">
                            <h4>Contact</h4>
                            <div class="phone">
                                <label>Our Phone Number</label> <div class="line"></div>
                                <p><a href="tel:7490004746">+91 74900 04746</a></p>
                                <p><a href="tel:9820450680">+91 9820450680</a></p>
                            </div>
                            <div class="email">
                                <label>Our Email Address</label> <div class="line"></div>
                                <p><a href="mailto:info@shreeramindustry.in">info@shreeramindustry.in</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="copy-rights">
                        <label>SHREE RAM INDUSTRIES © 2024. All rights reserved.</label>
                        <label>Design & Develop by Shree Ram Industries.</label>
                    </div>
                </footer>
                <script src="'.$parentPath.'public/js/swiper-bundle.min.js"></script>
                <script src="'.$parentPath.'public/js/Swiper.js"></script>
                <script src="'.$parentPath.'public/js/ToggleButton.js"></script>
                <script src="'.$parentPath.'public/js/ActiveInactiveLink.js"></script>
                <script src="'.$parentPath.'public/js/HideShowDiv.js"></script>
                </body>
                </html>
            ';
        }
    }
?>
