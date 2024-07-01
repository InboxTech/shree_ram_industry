<?php
    include_once('header.php');
    $header = new Header();
    $header->includeHeader('Products', './');
?>

<div class="main-body-servicers">
    <div class="title-image">
        <img src="public/images/about-title.png" alt="">
        <div class="items ">
            <h3 class="title"> Products </h3>
            <ul>
                <li><a href="#">Home</a></li>   
                <li><a href="#"> Products</a></li>
            </ul>
        </div>
    </div>
    <!-- -------------------------------------------- Our Products -------------------------------------------- -->
    <div class="our-products">
        <h6><i class="ti ti-bookmark-filled"></i> Our Products</h6>
        <h2>Discover Our Latest Products</h2>
        <ul>
            <li><a href=""><img src="public/images/swiper/i5.1s2.png" alt=""> </a></li>
            <li><img src="public/images/swiper/i5.1s3.png" alt=""></li>
            <li><img src="public/images/swiper/i5.1s4.png" alt=""></li>
            <li><img src="public/images/swiper/i5.1s5.png" alt=""></li>
            <li><img src="public/images/swiper/i5.1s6.png" alt=""></li>
            <li><img src="public/images/swiper/i5s1.png" alt=""></li>
            <li><img src="public/images/swiper/i5s2.png" alt=""></li>
            <li><img src="public/images/swiper/i5s3.png" alt=""></li>
            <li><img src="public/images/swiper/i5s4.png" alt=""></li>
            <li><img src="public/images/swiper/i5s5.png" alt=""></li>
            <li><img src="public/images/swiper/i5.2s2.png" alt=""></li>
            <li><img src="public/images/swiper/i5.2s3.png" alt=""></li>
            <li><img src="public/images/swiper/i5.2s4.png" alt=""></li>
            <li><img src="public/images/swiper/i5.2s5.png" alt=""></li>
            <li><img src="public/images/swiper/i5.2s6.png" alt=""></li>
        </ul>
    </div>
</div>

<?php include_once('footer.php');?>