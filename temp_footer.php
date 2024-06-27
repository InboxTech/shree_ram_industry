<script src="public/js/swiper-bundle.min.js"></script>
<script src="public/js/Swiper.js"></script>

<footer>
    <div class="sub">
        <div class="card1">
            <div class="title1">
                <h4>Subscribe now!</h4>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Enter Your Email">
                <i class="ti ti-send"></i>
            </div>
            <div class="title2">
                <h4>Our location:</h4>
            </div>
            <div class="icon">
                <img src="public/images/location.png" alt="location">
                <div class="ptext">
                    <P class="add1">677, G.I.D.C Estate, Makarpura, Vadodara </p>
                    <p class="add2">-390010, Gujarat, India </p>
                </div>
            </div>
            <div class="social">
                <img src="public/images/social.png" alt="Social Media">
            </div>
        </div>
        <div class="card1">
            <div class="title3">
                <h4>Quick Links</h4>
            </div>
            <div class="main-items-ss">
                <div class="tag">
                    <ul>
                        <li> <a href="index.php">Home</a> </li>
                        <li> <a href="about.php">About Us</a> </li>
                        <li> <a href="services.php">Services </a> </li>
                        <li> <a href="products.php">Products</a> </li>
                        <li> <a href="contact_us.php">Contact</a> </li>
                        <li> <a href="#">Our Mission</a> </li>
                        <li> <a href="#">Our Partners</a> </li>
                    </ul>
                </div>
                <div class="tag">
                    <ul>
                        <li> <a href="#">Privacy policy</a> </li>
                        <li> <a href="#">Sitemap </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card1">
            <div class="title4">
                <h4>Get in touch</h4>
            </div>

            <div class="gtext">
                <P class="add3">Our phone number </p>
                <hr>
                <p class="add4">+91 74900 04746</p>
            </div>

            <div class="Etext">
                <P class="add3">Our Email Address </p>
                <hr>
                <p class="add4">info@shreeramindustry.in</p>
            </div>
        </div>
    </div>
    <div class="last">
        <hr>
        <div class="Copyright">
            <p>SHREE RAM INDUSTRIES © 2024. All rights reserved.</p>
            <p>Design & Develop by Inbox Infotech.</p>
        </div>
    </div>
</footer>

</body>
</html>



css 




footer {
    background-color: #15151D;
}

footer .sub {
    padding: 24px;
    display: flex;
    justify-content: center;
}

footer .sub .card1 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: 365px;
    background-image: linear-gradient(#2B2B32, #15151D);
    padding: 24px;
    margin-right: 100px;
    border-radius: 8px;
}

footer .textbox input {
    width: 400px !important;
    height: 46px;
    border-radius: 8px;
    border-color:white;
    background-color: transparent;
}

footer .textbox input::placeholder{
    padding: 20px;
    color: white;
}

footer .textbox i {
    background-color: white;
    border-radius: 2px;
    height: 20px;
    width: 20px;
    color: var(--orang-color);
    position: absolute;
    top: 20%;
    left: 85%;
    padding: 1px;
}

footer .textbox input:focus{
    padding: 10px;
    color: white;
}

footer .textbox div input {
    background-color: #15151D !important;
    border-radius: 8px;
}

footer.icon {
    size: 100% !important;
    display: flex;
    margin-top: 16px;
}

footer .add1 {
    color: #ffffff;
    margin-bottom: 0px !important;
    margin-left: 16px;
}

footer .add2 {
    color: #ffffff;
    margin-bottom: 0px !important;
    margin-left: 16px;
}

footer.title1 {
    color: #ffffff;
}

footer .title2 {
    color: #ffffff;
}

footer .social {
    margin: 24px 24px 24px 0px;
}

footer.tag ul {
    list-style: none;
    padding-left: 0px;
}

footer .tag ul li a {
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: white;
    padding-bottom: 20px;
}

footer .sub .card2 {
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: 30px;
    width: 50px;
    background-image: linear-gradient(#2B2B32, #15151D); 
    /* background: linear-gradient(221deg, rgba(43,43,50,1) 0%, rgba(21,21,29,1) 100%); */
    padding: 24px;
    margin-right: 100px;
    border-radius: 8px;
}

footer .cart-itmes-2 {
    border: 1px solid black;
    border-radius: 8px;
    height: 100px;
}

footer .main-items-ss {
    display: flex;
}

footer .card1 {
    width: 450px !important;
    color: #ffffff;
}

footer .title3 {
    margin-bottom: 20px;
}

footer .gtext {
    margin-left: 0px !important;
}

footer .add3 {
    color: #ffffff;
    margin-bottom: 0px !important;
}

footer .add4 {
    color: #ffffff;
    margin-bottom: 0px !important;
    font-weight: 700 !important;
}

footer .title4 {
    margin-bottom: 20px;
}

footer .Etext {
    margin-top: 40px;
}

footer .last {
    color: #ffffff;
    margin: 80px 80px 0px 80px !important;
}

footer .Copyright {
    display: flex;
    justify-content: space-between;
}

footer .sub .card1:hover {
    border: 0.5px solid #727277;
    padding: 24px;
}