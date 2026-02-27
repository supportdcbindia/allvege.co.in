<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span> PVC belt Conveyor</span></h2>
    </div>
</div>

<div class="productSec">
    <div class="innerProductDetails">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <!-- <div class="productImg">
                        <img src="assets/img/image-available-soon.webp" alt="Washer">
                    </div> -->
                    <div class="productImg">
                        <div class="swiper productSwiper">
                            <div class="swiper-wrapper">
                                <?php
                                $nb_elem_per_page = 100;
                                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                                $data = glob("assets/img/products/details/pvc-belt-conveyor/*.*");
                                $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                                foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                                ?>
                                <div class="swiper-slide"> <img src="<?php echo $p; ?>" alt=""></div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="productContent">
                        <div class="title-area mb-0">
                            <span class="sub-title">AllVege
                                <span class="shape right">
                                    <span class="dots"></span>
                                </span>
                            </span>
                            <h2 class="sec-title mb-0"> PVC belt Conveyor</h2>
                        </div>
                        <div class="des">
                            <ul class="feature-list">
                                <li> Widths: 20 to 120 cm</li>
                                <li> Lengths: 100 cm - 2500 cm</li>
                                <li> Optional Cleats 15 x 15 mm</li>
                                <li> Available in PVC, PU, or Rubber</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="bgGrey content-wrapper pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title"></h2>

                <div class="title-area mb-4">
                    <span class="sub-title">Features & Benefits
                        <span class="shape right"><span class="dots"></span></span>
                    </span>
                    <h2 class="sec-title mb-0">Features & Benefits of Our PVC Belt Conveyors</h2>
                </div>
                <div class="features-grid">
                    <!-- Left Column -->
                    <div class="image-box">
                        <img src="assets/img/products/details/pvc-belt-conveyor/feature/1.png"
                            alt="img">
                    </div>
                    <div class="feature-box">
                        <div class="feature-header">Adjustable Widths & Lengths</div>
                        <ul class="feature-list">
                            <li>Available in 20 to 120 cm widths and lengths 100 cm-2500 cm py 250 cm</li>
                            <li>Painted Mild Steel, Zinc Coated Steel or Stainless Steel (AIS) 304)</li>
                            <li>Bearings and drivezidle opllers suppheed in mild steel as stendard.</li>
                        </ul>
                    </div>

                    <div class="image-box">
                        <img src="assets/img/products/details/pvc-belt-conveyor/feature/2.png"
                            alt="img">
                    </div>

                    <!-- Center Column -->
                    <div class="feature-box">
                        <div class="feature-header">Hygienic & Durble Construction</div>
                        <ul class="feature-list">
                            <li>Painted Mild Steel, n Zinc Coated Steel or Stainless Steel (AISI 304)</li>
                            <li>Hygienic environments Allow your conveying coloration.</li>

                        </ul>

                    </div>
                    <div class="image-box">
                        <img src="assets/img/products/details/pvc-belt-conveyor/feature/3.png"
                            alt="img">
                    </div>

                    <!-- Right Column -->
                    <div class="feature-box">
                        <div class="feature-header">Optional Cleats</div>
                        <ul class="feature-list">
                            <li>Straight welded design for inclined conveying</li>
                            <li>Ideal for loose or bulk products</li>
                            <li>Fully customizable</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featureSection pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title-area mb-4">
                    <span class="sub-title">Why Choose
                        <span class="shape right"><span class="dots"></span></span>
                    </span>
                    <h2 class="sec-title mb-0">Why Choose Allvege Process Technology?</h2>
                </div>

                <ul class="list-style-one">
                    <li><strong>Trusted Expertise:</strong> Over 20 years of experience in material handiing solutions
                    </li>
                    <li><strong>Fully Customizable:</strong> Tailored to meet your specific needs</li>
                    <li><strong>Quality Assurance:</strong> Built with the highest quality materials for reliability
                    </li>
                    <li><strong>Exceptional Support.</strong> Quick and responsive customer</li>

                </ul>
            </div>
        </div>
    </div>
</div>
 <div class="tableData bgGrey  pt-40 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Right side: Form (content NOT changed) -->
                <div class="col-md-8">
                    <form class="inquiryFormBox form5" action="inquiry-action.php" method="post"
                        novalidate="novalidate">

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
                                <input name="company_name" id="company_name" type="text" placeholder="Company Name"
                                    class="form-control">
                            </div>

                            <div class="col-md-6">
                                <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                    class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input name="city" id="city" type="text" placeholder="City" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15"
                                    minlength="10" class="form-control number21">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" id="message"
                                    placeholder="Requirement"></textarea>
                            </div>

                            <div class="col-md-6">
                                <input name="captcha" id="captcha" placeholder="Captcha Code" class="form-control"
                                    type="text">
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

<?php include('related-products.php')  ?>


<?php include('footer.php')  ?>

<style>
   
</style>