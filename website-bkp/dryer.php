<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span>Dryer</span></h2>
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
                                $data = glob("assets/img/products/details/dryer/*.*");
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
                            <h2 class="sec-title mb-0">Dryer</h2>
                        </div>
                        <div class="desc">
                            <P>
                                The AllVege Dryer is specially developed to remove surface moisture from fruits
                                and vegetables after the washing process. It uses high-absorption felt rollers that
                                gently take away excess water from the produce. These felt rollers are continuously
                                squeezed by stainless steel pressure rollers, which release the collected water and keep
                                the system working efficiently.
                            </P>

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
                        </div>The machine frame is made using AISI 304 stainless steel, while the bearings and shaft are
                        manufactured from mild steel.
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The control panel can be supplied in either AISI 304 stainless steel or painted mild steel,
                        depending on customer preference.
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        An overhead bypass system can be added when required.
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The water drainage gutter is built from AISI 304 stainless steel and is equipped with a DN100
                        outlet connection.
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        An automatic product emptying system can be integrated to ensure all produce is removed from the
                        rollers after drying.
                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Automatic bearing installation or lubrication inside the roller dryer can be provided as an
                        optional feature.
                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The supporting sub-frame can be supplied in painted mild steel, stainless steel AISI 304, or
                        galvanized steel based on application needs.
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
                            <th>AV DR 90</th>
                            <th>AV DR 110</th>
                            <th>AV DR 130</th>
                            <th>AV DR 150</th>
                            <th>AV DR 180</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Width of the roller (in cm)</td>
                            <td>90</td>
                            <td>110</td>
                            <td>130</td>
                            <td>150</td>
                            <td>180</td>
                        </tr>
                        <tr>
                            <td>Amount of rollers</td>
                            <td>10, 15, 20</td>
                            <td>10, 15, 20</td>
                            <td>10, 15, 20</td>
                            <td>10, 15, 20</td>
                            <td>10, 15, 20</td>
                        </tr>
                        <tr>
                            <td>Diameter of the rollers (in mm)</td>
                            <td>Ø 121</td>
                            <td>Ø 121</td>
                            <td>Ø 121</td>
                            <td>Ø 121</td>
                            <td>Ø 121</td>
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
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            Frame is made from stainless steel AISI304. The bearings and shaft are from mild steel.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Roller / brush hardness</h3>

                    <div class="material-row">
                        <div class="material-name">Felt</div>
                        <div class="material-desc">
                            (Part of) the rollers are made from stainless steel AISI304 covered with felt.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Gummy</div>
                        <div class="material-desc">
                            (Part of) the rollers are gummy rollers, to protect the roller from wear.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Brush hardness</div>
                        <div class="material-desc">
                            (Part of) the rollers are provided with brushes. The brushes have a hardness of 0.2 mm
                            (black), 0.25 mm (yellow), 0.3 mm (red), 0.35 mm (grey), 0.4 mm (green), 0.45 mm (blue), 0.7
                            mm (black) or 1.2 mm (white).
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

                    <h3 class="section-title">Material and treatment (subframe)*</h3>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            It is made from stainless steel AISI304.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Painted mild steel</div>
                        <div class="material-desc">
                            It is made from painted mild steel.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Galvanized steel</div>
                        <div class="material-desc">
                            It is made from galvanized steel.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Height of subframe*</h3>

                    <div class="material-row">
                        <div class="material-name">Height of subframe</div>
                        <div class="material-desc">
                            0 to 5 meter.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Water gutter*</h3>

                    <div class="material-row">
                        <div class="material-name">Water gutter</div>
                        <div class="material-desc">
                            The water gutter is made from stainless steel AISI304.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Emptying system*</h3>

                    <div class="material-row">
                        <div class="material-name">Automatic</div>
                        <div class="material-desc">
                            The emptying system is made from stainless steel AISI304 and is used to get the last
                            potatoes off the rollers.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Bearing greasing</h3>

                    <div class="material-row">
                        <div class="material-name">Manual</div>
                        <div class="material-desc">
                            The bearings can be greased manually.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Automatic</div>
                        <div class="material-desc">
                            The bearings are greased automatically.
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>



<?php include('related-products.php')  ?>
<?php include('footer.php')  ?>