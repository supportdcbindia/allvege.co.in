<footer class="main-footer footer">
    <div class="upper-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="about-widget">
                        <div class="logo"><a href="index.php"><img src="./assets/img/logo/all-vege-footer.webp" alt=""></a>
                        </div>
                        <div class="text">
                            Allvege Process Technologies is a leading manufacturer of advanced post-harvest equipment, specializing in high-performance Potato Grading Lines. Our comprehensive product range includes Receiving Hoppers, Grading Machines (Sizers), Inspection Tables, Elevators, Brushers, Ground Pickers, Box Fillers, Radial Graders, and Box Tippers — all engineered to ensure efficient, accurate, and hygienic processing.
                        </div>
                        <ul class="social-links">
                            <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript:;"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="links-widget">
                        <h4 class="widget_title">Quick Links</h4>
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="products.php">Products</a></li>
                                        <li><a href="process-flow.php">Process Flow</a></li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><a href="industires-we-serve.php">Industires We Serve</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-widget">
                        <h4 class="widget_title">Get In Touch</h4>
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
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@allvege.co.in" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'info@allvege.co.in' });">info@allvage.com</a>
                            </li>
                        </ul>
                    </div>
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