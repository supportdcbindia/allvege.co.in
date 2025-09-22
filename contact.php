<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/contact-us.webp" alt="" class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span>Contact Us</span></h2>
    </div>
</div>

<section class="contact-page-section">
    <div class="container">
        <div class="row ">
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft animated" data-wow-delay="0ms"
                    style="visibility: visible; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="title-box">
                        <h3>Contact Details</h3>
                        <div class="title-text">Get in touch with us for any questions about our industries or
                            products.
                        </div>
                    </div>
                    <ul class="contact-info-list">
                        <li><span class="icon fa fa-map-marker-alt"></span><strong>Address:</strong>
                            Survey No. 381, Village - Vasna Rathod, <br>
                            Ahmedabad - Dehgam Road, <br>
                            2 km Away From Galudan Chaukdi, Tal. Dehgam, <br>
                            Dist. Gandhiangar - 382305. Gujarat (INDIA)</li>
                        <li><span class="icon fa fa-phone"></span><strong>Phone</strong>
                            <a style="color: #fff;" href="tel:+917600814075"
                                onclick="gtag('event', 'send', { 'event_category': 'click on Mobile', 'event_action': 'Mobile', 'event_label': '+917600814075' });">+91 76008 14075</a>
                        </li>
                        <li><span class="icon fa fa-envelope"></span><strong>Email us</strong><a style="color: #fff;" href="mailto:sales@allvege.co.in" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'sales@allvege.co.in' });">sales@allvege.co.in</a>
                        </li>
                        <li><span class="icon fa fa-envelope"></span><strong>Email us</strong><a style="color: #fff;" href="mailto:info@allvege.co.in" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'info@allvege.co.in' });">info@allvege.co.in</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight animated" data-wow-delay="0ms"
                    style="visibility: visible; animation-delay: 0ms; animation-name: fadeInRight;">
                    <div class="sec-title">
                        <h2>Send a Message</h2>
                    </div>
                    <div class=" my-custom-modal">
                        <form class="form-horizontal form3" action="inquiry-action.php" method="post"
                            novalidate="novalidate">
                            <div class="form-group has-feedback">
                                <div class="col-md-12">
                                    <input name="name" id="name" type="text" placeholder="Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <div class="col-md-12">
                                    <input name="company_name" id="company_name" type="text" placeholder="Company Name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <div class="col-md-12">
                                    <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group has-feedback class-feedback">
                                <div class="col-md-12">
                                    <input name="city" id="city" type="text" placeholder="City" class="form-control">
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <div class="col-md-12">
                                    <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15"
                                        minlength="10" class="form-control number21">
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" id="message"
                                        placeholder="Requirement"></textarea>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8 col position-relative">
                                            <input name="captcha" id="captcha" placeholder="Captcha Code"
                                                class="form-control" type="text">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="captcha.php" class="capside">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <div class="col-md-12 col-sm-3 col-xs-12">
                                    <input name="submit" class="submit submitbutton" type="submit" value="Submit Now!">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117501.74191055316!2d72.483861793486!3d23.02636302543719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e7e7caf4d28ed%3A0xadf0a8698ba4e0be!2sPNEUCON%20Process%20Technologies!5e0!3m2!1sen!2sin!4v1708953471964!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>


<?php include('footer.php')  ?>