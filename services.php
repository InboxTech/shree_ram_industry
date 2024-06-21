<?php
    include_once('header.php');
    $header = new Header();
    $header->includeHeader('Services', './');
?>

<div class="main-body-servicers">
    <div class="title-image">
        <img src="public/images/about-title.png" alt="">
        <div class="items ">
            <h3 class="title"> Services </h3>
            <ul>
                <li><a href="#">Home</a></li>   
                <li><a href="#"> Services</a></li>
            </ul>
        </div>
    </div>
</div>

<?php include_once('footer.php');?>