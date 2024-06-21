<?php 
    include_once ('header.php'); 
    $header = new Header();
    $header->includeHeader('About Us', './');
?>
<div class="main-body">
    <div class="title-image">
        <img src="public/images/about-title.png" alt="">
        <div class="items ">
            <h3 class="title"> About Us </h3>
            <ul>
                <li><a href="#">Home</a></li>   
                <li><a href="#"> About Us</a></li>
            </ul>
        </div>
    </div>

        <!--  TESTIMONIALS -->
    <div class="i-7">
        <div class="top">
            <div class="heading">
                <h5><i class="ti ti-bookmark-filled"></i>TESTIMONIALS</h5>
                <h1>People Says About Machine</h1>
            </div>
            <div class="view-btn">
                <a class="btn-outline-orange" href="\">View All <i class="ti ti-arrow-right"></i></a>
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
                        <a href=""><img src="public/images/left-arrow (2).png" alt=""></a>
                        <a href=""><img src="public/images/rigth-arrow.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once ('footer.php');?>