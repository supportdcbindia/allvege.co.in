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

<div class="tableData">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <div class="title-area mb-0">
                <h2 class="sec-title mb-0">Specifications</h2>
            </div>

            <div class="table-responsive pt-5 pb-0">
                <table class="machine-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>AV TCH 20</th>
                            <th>AV TCH 40</th>
                            <th>AV TCH 60</th>
                            <th>AV TCH 80</th>
                            <th>AV TCH 100</th>
                            <th>AV TCH 120</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="model">Width of the machine (cm)</td>
                            <td>20</td>
                            <td>40</td>
                            <td>60</td>
                            <td>80</td>
                            <td>100</td>
                            <td>120</td>
                        </tr>

                        <tr class="alt">
                            <td class="model">Length of the machine (cm)</td>
                            <td colspan="6">100 t/m 2500, steps of 25 cm</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="featureSection pt-40 pb-40 bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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

<!-- OPTIONS -->
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
                        <div class="material-name">Zinc plated steel</div>
                        <div class="material-desc">Frame is made from zinc plated steel. The bearings and drive/idle rollers are from mild steel</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">Frame is made from stainless steel AISI304. The bearings and drive/idle rollers are from mild steel</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Painted mild steel</div>
                        <div class="material-desc">Frame is made from painted mild steel. The bearings and drive/idle rollers are from mild steel</div>
                    </div>


                    <h3 class="section-title">Belt</h3>

                    <div class="material-row">
                        <div class="material-name">PVC</div>
                        <div class="material-desc">The belt is made of PVC</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">PU</div>
                        <div class="material-desc">The belt is made of PU</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Rubber</div>
                        <div class="material-desc">The belt is made of rubber</div>
                    </div>


                    <h3 class="section-title">Cleats*</h3>

                    <div class="material-row">
                        <div class="material-name">Straight</div>
                        <div class="material-desc">The type of cleats is straight</div>
                    </div>


                    <h3 class="section-title">Cleats shape*</h3>

                    <div class="material-row">
                        <div class="material-name">15 x 15</div>
                        <div class="material-desc">The shape of the cleats is 15 x 15</div>
                    </div>


                    <h3 class="section-title">Electrical control</h3>

                    <div class="material-row">
                        <div class="material-name">No electric</div>
                        <div class="material-desc">Motors and necessary sensors</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stand-alone</div>
                        <div class="material-desc">Motors, necessary sensors and control panel. The length of the cable is 5, 10, 15 or 20 meter</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Central control in line</div>
                        <div class="material-desc">Motors and necessary sensors</div>
                    </div>


                    <h3 class="section-title">Frequency inverter*</h3>

                    <div class="material-row">
                        <div class="material-name">Speed adjustment</div>
                        <div class="material-desc">A frequency inverter is used to control the speed</div>
                    </div>


                    <h3 class="section-title">Material and treatment (electrical panel)</h3>

                    <div class="material-row">
                        <div class="material-name">Painted mild steel</div>
                        <div class="material-desc">The electrical panel is made from painted mild steel</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">The electrical panel is made from stainless steel AISI304</div>
                    </div>


                    <h3 class="section-title">Material and treatment (bottomside cover)*</h3>

                    <div class="material-row">
                        <div class="material-name">Zinc plated steel</div>
                        <div class="material-desc">A cover is mounted on the bottom of the machine, made from zinc plated steel. The length of the bottomside cover is 0 t/m 2500, steps of 25 cm</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">A cover is mounted on the bottom of the machine, made from stainless steel AISI304. The length of the bottomside cover is 0 t/m 2500, steps of 25 cm</div>
                    </div>


                    <h3 class="section-title">Material and treatment (topside cover)*</h3>

                    <div class="material-row">
                        <div class="material-name">Zinc plated steel</div>
                        <div class="material-desc">A cover is mounted on top of the machine, made from zinc plated steel. The length of the topside cover is 0 t/m 2500, steps of 25 cm</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">A cover is mounted on top of the machine, made from stainless steel AISI304. The length of the topside cover is 0 t/m 2500, steps of 25 cm</div>
                    </div>


                    <h3 class="section-title">Switch*</h3>

                    <div class="material-row">
                        <div class="material-name">Maintenance</div>
                        <div class="material-desc">A maintenance switch is included</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Reverse</div>
                        <div class="material-desc">It is used to change the direction of the belt</div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Start/stop</div>
                        <div class="material-desc">It is used to start and stop the belt</div>
                    </div>


                    <h3 class="section-title">Product sensor*</h3>

                    <div class="material-row">
                        <div class="material-name">Sensor</div>
                        <div class="material-desc">The product’s height is determined by the product sensor</div>
                    </div>


                    <h3 class="section-title">Bracket*</h3>

                    <div class="material-row">
                        <div class="material-name">Bracket</div>
                        <div class="material-desc">Bracket is used to mount the product sensor</div>
                    </div>


                    <h3 class="section-title">Motor on top*</h3>

                    <div class="material-row">
                        <div class="material-name">On top</div>
                        <div class="material-desc">The motor is placed on top of the machine</div>
                    </div>


                    <h3 class="section-title">Omega drive*</h3>

                    <div class="material-row">
                        <div class="material-name">Omega</div>
                        <div class="material-desc">Omega drive is included to make sure the belt can move both ways</div>
                    </div>


                    <h3 class="section-title">Extra motor*</h3>

                    <div class="material-row">
                        <div class="material-name">Extra motor</div>
                        <div class="material-desc">An extra motor is included to make sure the belt can move both ways. Available options are 0.37 KW, 0.75 KW, 1.1 KW, 1.5 KW, 2.2 KW or 3 KW. If this option is selected, the originally selected power (kW) must be divided between the two motors</div>
                    </div>


                    <h3 class="section-title">Waste collection – chute*</h3>

                    <div class="material-row">
                        <div class="material-name">Chute</div>
                        <div class="material-desc">A waste chute is included on the end of the belt. The chute will guide waste to a transport conveyor or box</div>
                    </div>

                </div>
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