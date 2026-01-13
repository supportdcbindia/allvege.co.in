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
</div>
<?php include('footer.php')  ?>