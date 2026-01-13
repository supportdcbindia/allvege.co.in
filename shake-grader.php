<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt="" class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span> Shake Grader</span></h2>
    </div>
</div>

<div class="productSec">
    <div class="innerProductDetails">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="productImg">
                        <div class="swiper productSwiper">
                            <div class="swiper-wrapper">
                                <?php
                                $nb_elem_per_page = 100;
                                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                                $data = glob("assets/img/products/details/shake-grader/*.*");
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
                            <h2 class="sec-title mb-0"> Shake Grader</h2>
                        </div>
                        <div class="desc">
                            <p>At <strong>ALLVEGE</strong>, our <strong>Shake Graders</strong> are engineered to deliver maximum efficiency, precise size grading, and superior product quality for vegetable and agricultural processing industries of all scales. Designed with advanced vibration technology and robust construction, our shake graders help businesses achieve accurate separation with minimal product damage and manual intervention.</p>

                            <p>Our shake graders are suitable for <strong>potatoes, onions, fruits, vegetables, seeds</strong>, and many other agricultural products. Whether you are a small farm, mid-scale processor, or large industrial facility, ALLVEGE provides <strong>fully customized shake grading solutions</strong> tailored to your capacity, product type, and grading requirements.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Features Section -->
    <div class="featureSection pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-area mb-4">
                        <span class="sub-title">Performance Highlights
                            <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title mb-0">What Makes Our Shake Grader Superior</h2>
                    </div>

                    <ul class="list-style-one">
                        <li>High-precision grading based on product size</li>
                        <li>Modular design – easily integrable into existing lines</li>
                        <li>Heavy-duty frame for continuous industrial operation</li>
                        <li>Controlled vibration for accurate and gentle grading</li>
                        <li>User-friendly operation with low maintenance needs</li>
                        <li>Stainless steel construction ensuring hygiene & long service life</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <div class="title-area mb-4">
                        <span class="sub-title">Industry Uses
                            <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title mb-0">Where Our Shake Grader Delivers Efficiency</h2>
                    </div>

                    <ul class="list-style-one two-column">
                        <li>Potato grading & sorting units</li>
                        <li>Seed potato suppliers</li>
                        <li>Vegetable processing plants</li>
                        <li>Agricultural cooperatives</li>
                        <li>Cold storage sorting operations</li>
                        <li>Farm-level grading & packing centers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Section -->
    <div class="whychooseSec bgGrey pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-area mb-4">
                        <span class="sub-title">Our Competitive Edge
                            <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title mb-0">Why Industries Choose ALLVEGE Shake Grader</h2>
                    </div>

                    <ul class="list-style-one">
                        <li>End-to-end grading support for agricultural produce</li>
                        <li>High durability – built for continuous industrial use</li>
                        <li>Low maintenance – reduced downtime & easy servicing</li>
                        <li>Energy-efficient operation with optimized vibration system</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <div class="title-area mb-4">
                        <span class="sub-title">System Variants
                            <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title mb-0">Available Shake Grader Configurations</h2>
                    </div>

                    <ul class="list-style-one">
                        <li>Single Deck Shake Grader</li>
                        <li>Multi-Deck Shake Grader</li>
                        <li>Custom Screen Size & Mesh Options</li>
                        <li>Standalone or Integrated Grading Systems</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <!-- Table + Form Section -->
    <!-- Table + Form Section -->
    <!-- Table + Form Section -->
    <div class="tableData pt-40 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Right side: Form (content NOT changed) -->
                <div class="col-md-8">
                    <form class="inquiryFormBox form5" action="inquiry-action.php" method="post" novalidate="novalidate">

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
</div>

<?php include('footer.php')  ?>