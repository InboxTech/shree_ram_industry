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
                <li><a href="#">Home</a></li>   
                <li><a href="#"> Contact Us</a></li>
            </ul>
        </div>
    </div>

<div class="map-items">
    <div class="map-img">
        <iframe src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sin!4v1719374913482!5m2!1sen!2sin!6m8!1m7!1sENH96YMpLWyK9uJ0SvSpYQ!2m2!1d19.16500516749226!2d72.84708774672261!3f257.265598129557!4f10.827421560321866!5f0.7820865974627469" 
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-content">
            <div class="map-add">
                <h6><i></i>Store 1</h6>
                <label for="">Address: <br><span> G I D C Estate, C-1-677, Makarpura, Vadodara, Gujarat - 390 010. </label></span><br>
                <label for="">Email: <br><span> info@shreeramindustry.in </span></label><br>
                <label for="">Call: <br><span> +91 74900 04746 </span></label><br>
            </div>
            <div class="navigation">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.147496915326!2d73.18083077586655!3d22.310260842533282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b65249098c37%3A0xaf37aa47cd30c21c!2sStation%20Rd%2C%20Maharaja%20Sayajirao%20University%2C%20Sayajiganj%2C%20Vadodara%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1719375009311!5m2!1sen!2sin" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php');?>