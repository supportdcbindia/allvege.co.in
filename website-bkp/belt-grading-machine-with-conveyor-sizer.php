<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <!-- <h2><span>Belt Grading machine with Conveyor (Sizer)</span></h2> -->
        <h2><span>Screen Sizer</span></h2>
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
                                $data = glob("assets/img/products/details/belt-grading/*.*");
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
                            <h2 class="sec-title mb-0">Screen Sizer</h2>
                        </div>
                        <div class="desc">
                            <P>The screen sizer is used to grade produce by hexagonal, square, or round size. It
                                operates with a rotating rubber surface that has fixed-dimension openings. Produce is
                                placed on the rubber surface, where smaller items drop through the openings onto a
                                conveyor below, while larger items move forward on a web conveyor to the outlet. A
                                gentle vibration system helps the produce move smoothly across the surface for accurate
                                separation.</P>

                            <P>Multiple screen sizers can be arranged in sequence, each with gradually increasing
                                opening sizes, allowing the produce to be sorted into several size groups.</P>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="feacture">
    <div class="container">
        <div class="col-12">
            <div class="title-area mb-0">
                <h2 class="sec-title mb-0">Characteristics</h2>
            </div>

            <div class="feature-list mt-5">
                <ul class="column-count">

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>Designed to sort produce by hexagonal, square, or round dimensions
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Sieve opening sizes range from 20 to 100, adjustable in 1 mm increments
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The frame can be manufactured in painted mild steel or galvanized steel, while bearings and
                        drive/idle rollers are made from mild steel
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        A frequency inverter is provided for precise speed control
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        A camshaft generates a hopping motion to improve grading accuracy
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="tableData bgGrey">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <div class="title-area mb-0">
                <h2 class="sec-title mb-0"> Specifications</h2>
            </div>
            <div class="table-responsive pt-5 pb-0">
                <table class="machine-table">
                    <thead>
                        <tr class="table-title">
                            <th></th>
                            <th>AV SS 90</th>
                            <th>AV SS 120</th>
                            <th>AV SS 180</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Width of the screen (in cm)</td>
                            <td>90</td>
                            <td>120</td>
                            <td>180</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="tableData">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <div class="title-area mb-0">
                <h2 class="sec-title mb-0">Options</h2>
            </div>
            <div class="content-responsive pt-5 pb-0">
                <div class="material-section">

                    <h3 class="section-title">Material and treatment (frame)</h3>

                    <div class="material-row">
                        <div class="material-name">Painted mild steel</div>
                        <div class="material-desc">
                            Frame is made from painted mild steel. The bearings and drive/idle rollers are from mild
                            steel.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            Frame is made from stainless steel AISI304. The bearings and drive/idle rollers are from
                            mild steel.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Material and treatment (sieves)</h3>

                    <div class="material-row">
                        <div class="material-name">Mild steel</div>
                        <div class="material-desc">
                            Sieve is made from mild steel.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Rubber</div>
                        <div class="material-desc">
                            Sieve is made from rubber.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Sieve</h3>

                    <div class="material-row">
                        <div class="material-name">Sieve</div>
                        <div class="material-desc">
                            The gaps of the sieve are 20 to 100, in steps of 1 mm, and the gaps are round, hexagon or
                            square shaped.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Electrical control</h3>

                    <div class="material-row">
                        <div class="material-name">No electric</div>
                        <div class="material-desc">
                            Motors and necessary sensors.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stand-alone</div>
                        <div class="material-desc">
                            Motors, necessary sensors and control panel. The length of the cable is 5, 10, 15 or 20
                            meter.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Central control in line</div>
                        <div class="material-desc">
                            Motors and necessary sensors.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Frequency inverter</h3>

                    <div class="material-row">
                        <div class="material-name">Frequency inverter</div>
                        <div class="material-desc">
                            A frequency inverter is included to control the speed.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Material and treatment (electrical panel)</h3>

                    <div class="material-row">
                        <div class="material-name">Painted mild steel</div>
                        <div class="material-desc">
                            The electrical panel is made from painted mild steel.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            The electrical panel is made from stainless steel AISI304.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Material and treatment (subframe)</h3>

                    <div class="material-row">
                        <div class="material-name">Painted mild steel</div>
                        <div class="material-desc">
                            It is made of painted mild steel.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            It is made of stainless steel AISI304.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Galvanized steel</div>
                        <div class="material-desc">
                            It is made of galvanized mild steel.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Height of subframe</h3>

                    <div class="material-row">
                        <div class="material-name">Height of subframe</div>
                        <div class="material-desc">
                            0 – 3 meters.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Camshaft</h3>

                    <div class="material-row">
                        <div class="material-name">Camshaft</div>
                        <div class="material-desc">
                            A camshaft is included to create the hopping effect so the grading result can be better.
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>



<?php include('related-products.php')  ?>
<?php include('footer.php')  ?>