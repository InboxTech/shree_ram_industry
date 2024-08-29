<?php 
    include_once('header.php');
    $header = new Header();
    $header->includeHeader('Contact Us', './');
?>

<div class="main-body-servicers">
    <div class="title-image">
        <img src="public/images/about-title.png" alt="">
        <div class="items ">
            <h3 class="title"> Contact </h3>
            <ul>
                <li><a href="index.php">Home</a></li>   
                <li><a href="contact_us.php" class="active"> Contact Us</a></li>
            </ul>   
        </div>
    </div>

    <div class="map-items">
        <div class="map-img">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sin!4v1719390144432!5m2!1sen!2sin!6m8!1m7!1sWl3hLkig4e0acLag8NrDhA!2m2!1d22.24808194184483!2d73.18115284078723!3f270.44455!4f0!5f0.7820865974627469"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <div class="map-content">
                <div class="map-add">
                    <h2><i class="ti ti-building-store"></i>Store 1</h2>
                    <label>Address: <br><span> G I D C Estate, C-1-677, Makarpura, Vadodara, Gujarat - 390 010. </label></span><br>
                    <label >Email: <br><span> <a href="mailto:info@shreeramindustry.in" style="color:rgba(243, 115, 50, 1); text-decoration: none;">info@shreeramindustry.in </a></span></label><br>
                    <label>Call: <br><span> <a href="tel:7490004746" style="color:rgba(243, 115, 50, 1); text-decoration: none;">+91 74900 04746 </a></span> <br> <span > <a href="tel:9820450680" style="color:rgba(243, 115, 50, 1); text-decoration: none;">+91 9820450680</a></span></label><br>
                </div>
                <div class="navigation">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17565.736531574938!2d73.18613831784936!3d22.24989528610248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc5423e21f48b%3A0xdb5ef45b87de6c25!2sShree%20Ram%20industries!5e0!3m2!1sen!2sin!4v1719390113220!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="contact-us-our-store">
            <div class="our-title">
                <h6><i class="ti ti-bookmark-filled"></i>Our Store</h6>
                <h2>Others Store</h2>
            </div>
            <div class="contact-us-cards">
                <ul>
                    <li>
                        <div class="contact-us-card">
                            <div class="card-title">
                                <h4>02</h4>
                            </div>
                            <div class="card-body">
                                <h4>USA</h4>
                                <h5>Waco, Texas, USA</h5>
                                <a href="mailto:npatel@shreeramindustry.in"><i class="ti ti-mail"></i> npatel@shreeramindustry.in</a><br>
                                <a href="tel:+1(580)2634223"><i class="ti ti-phone"></i> +1(580) 263 4223</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-us-card">
                            <div class="card-title">
                                <h4>03</h4>
                            </div>
                            <div class="card-body">
                                <h4>AUSTRALIA</h4>
                                <h5>Melbourne, Victoria, Australia</h5>
                                <a href="mailto:pdesai@shreeramindustry.in"><i class="ti ti-mail"></i> pdesai@shreeramindustry.in</a><br>
                                <a href="tel:+61401849022"><i class="ti ti-phone"></i> +61 401 849 022</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php 
    include_once('footer.php'); 
    $footer = new Footer();
    $footer->includeFooter('./');
?>
