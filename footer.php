<footer class="main-footer footer">
    <div class="upper-box">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-widget contact-widget">
                        <div class="logo"><a href="index.php"><img src="./assets/img/logo/all-vege-footer.webp" alt=""></a>
                        </div>
                        <ul>
                            <li><i class="fa fa-map-marker-alt"></i><b>Address:</b><br />
                                Survey No. 381, Village - Vasna Rathod, <br>
                                Ahmedabad - Dehgam Road, <br>
                                2 km Away From Galudan Chaukdi, Tal. Dehgam, <br>
                                Dist. Gandhiangar - 382305. Gujarat (INDIA)
                            </li>
                            <li><i class="fa fa-phone"></i> <a href="tel:+917600814075"
                                    onclick="gtag('event', 'send', { 'event_category': 'click on Mobile', 'event_action': 'Mobile', 'event_label': '+917600814075' });">+91 76008 14075</a></li>
                            <li><i class="fa fa-envelope"></i>
                                <a href="mailto:sales@allvege.co.in" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'sales@allvege.co.in' });">sales@allvege.co.in</a>
                            </li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@allvege.co.in" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'info@allvege.co.in' });">info@allvege.co.in</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="links-widget">
                        <h4 class="widget_title">Quick Links</h4>
                        <div class="widget-content">
                            <ul class="list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="products.php">Products</a></li>
                                <li><a href="process-flow.php">Process Flow</a></li>
                                <li><a href="industires-we-serve.php">Industires We Serve</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h4 class="widget_title">Get In Touch</h4>
                    <form class="inquiryFormBox form4" action="inquiry-action.php" method="post" novalidate="novalidate">

                        <div class="title-area mb-4">
                            <span class="sub-title">Get In Touch
                                <span class="shape right"><span class="dots"></span></span>
                            </span>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <input name="name" id="name" type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input name="company_name" id="company_name" type="text" placeholder="Company Name" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <input name="email" id="email" type="text" placeholder="E-Mail Address" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input name="city" id="city" type="text" placeholder="City" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15" minlength="10" class="form-control number21">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" id="message" placeholder="Requirement"></textarea>
                            </div>

                            <div class="col-md-6">
                                <input name="captcha" id="captcha" placeholder="Captcha Code" class="form-control" type="text">
                            </div>
                            <div class="col-md-6">
                                <img src="captcha.php" class="capside w-100" alt="captcha">
                            </div>
                        </div>

                        <input name="submit" class="submit submitbutton w-100 mt-3" type="submit" value="Submit Now!">

                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <div class="wrapper-box">
            <div class="row m-0 align-items-center justify-content-center">
                <div class="copyright-text">Copyright © <?php echo date("Y"); ?> Allvege Process Technologies All
                    Rights Reserved.
                </div>

            </div>
        </div>
    </div>
</div>
<div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/form-buzz.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "slideShow",
                "thumbs",
                "zoom",
                "fullScreen",
                "share",
                "close"
            ],
            loop: false,
            protect: true
        });
    });
</script>
<script>
    if (document.querySelector('.productSwiper')) {
        const productSlider = new Swiper('.productSwiper', {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 15,
            speed: 900,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            },
            navigation: {
                prevEl: '.product-prev',
            },
            nextEl: '.product-next',
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            watchOverflow: false // keep arrows visible even with 1 slide
        });
    }
</script>
</body>

</html>