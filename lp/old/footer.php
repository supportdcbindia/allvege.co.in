<!-- Footer -->
<footer class="footer">
    <div class="container">
        <!-- bottom -->
        <div class="bottom">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0">&copy; Copyright <?php echo date('Y') ?> <a href="index.php"><span>Allvege Process Technologies</span></a> All right reserved.</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Popup Contact Form -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-box">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="Your Name *" required="">
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Your Email *" required="">
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Your Number *" required="">
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" type="text" placeholder="Subject *" required="">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required=""></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="modal-button">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/jquery-migrate-3.4.1.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.isotope.v3.0.2.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollIt.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/YouTubePopUp.js"></script>
<script src="js/custom.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        groupAll: false,
        Thumbs: {
            showOnStart: false,
        },
    });
</script>

<script src="js/index.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/form-buzz.js"></script>

</body>

</html>