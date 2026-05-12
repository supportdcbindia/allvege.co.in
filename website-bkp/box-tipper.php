<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt="" class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span> Box Tipper</span></h2>
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
                                $data = glob("assets/img/products/details/box-tipper/*.*");
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
                                <span class="shape right"><span class="dots"></span></span>
                            </span>
                            <h2 class="sec-title mb-0"> Box Tipper</h2>
                        </div>
                        <div class="desc">
                            <p>The Box Tipper is built to unload filled produce boxes into a hopper or onto a conveyor as part of a processing or packing line. Depending on the system layout, it can be positioned to feed either wet or dry handling equipment. For added convenience and safety, a wireless remote-control option is available, allowing operators to run the machine from a distance.</p>

                            <p>Boxes loaded with produce are placed into the tipper using a forklift. Once activated, the unit rotates the box up to 140 degrees, allowing all contents to slide smoothly into the next stage of the line. After the discharge is completed, the box automatically returns to its starting position. The tipping cycle can be paused or stopped whenever required.</p>

                            <p>To improve operational safety, the Box Tipper can be fitted with protective fencing, audible alarms, and visual warning lights. These features help create a safer working area around the tipping zone, especially in high-capacity processing environments.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Characteristics -->
    <div class="feacture">
        <div class="container">
            <div class="col-12">
                <div class="title-area mb-0">
                    <h2 class="sec-title mb-0">Characteristics</h2>
                </div>
                <div class="feature-list mt-5">
                    <ul class="column-count">
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Models available for 1600 mm and 1800 mm wide boxes
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Heavy-duty hydraulic cylinder for high load capacity
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Robust construction for forklift and heavy load operation
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>140° tipping rotation for complete product discharge
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Maximum box weight of 1250 kg or 2500 kg depending on model
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Optional subframe for height adjustment
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Optional wireless remote control
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Optional shake function to empty remaining produce
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Optional safety fences, sirens and warning lights
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Specifications -->
    <div class="tableData bgGrey">
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
                                <th>AV Z 160</th>
                                <th>AV Z 180</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rotation angle (max) in deg</td>
                                <td>140</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>Width of the box (min–max) in cm</td>
                                <td>100 – 160</td>
                                <td>162 – 180</td>
                            </tr>
                            <tr>
                                <td>Height of the box (min–max) in cm</td>
                                <td>90 – 140</td>
                                <td>90 – 140</td>
                            </tr>
                            <tr>
                                <td>Depth of the box (min–max) in cm</td>
                                <td>80 – 120</td>
                                <td>80 – 120</td>
                            </tr>
                            <tr>
                                <td>Weight of the box (max) in kg</td>
                                <td>1250</td>
                                <td>2500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Options -->
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
                            <div class="material-desc">Frame and plating made from painted mild steel. Bearings and drive/idle rollers are mild steel</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Hot dipped galvanized</div>
                            <div class="material-desc">Frame in hot dipped galvanized steel. Bearings and rollers in mild steel, plating in stainless steel</div>
                        </div>

                        <h3 class="section-title">Electrical control</h3>
                        <div class="material-row">
                            <div class="material-name">Stand-alone</div>
                            <div class="material-desc">Motors, sensors and control panel. Cable length: 5, 10, 15 or 20 meters</div>
                        </div>

                        <h3 class="section-title">Material and treatment (electrical panel)</h3>
                        <div class="material-row">
                            <div class="material-name">Painted mild steel</div>
                            <div class="material-desc">Electrical panel made from painted mild steel</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Stainless steel</div>
                            <div class="material-desc">Electrical panel made from stainless steel</div>
                        </div>

                        <h3 class="section-title">Remote control</h3>
                        <div class="material-row">
                            <div class="material-name">Wireless</div>
                            <div class="material-desc">Wireless remote allows operation from a distance</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Pulling cord</div>
                            <div class="material-desc">Ceiling-mounted pulling cord for machine control</div>
                        </div>

                        <h3 class="section-title">Machine guarding system</h3>
                        <div class="material-row">
                            <div class="material-name">Safety</div>
                            <div class="material-desc">Fencing and light curtain protect operators and prevent access to hazardous areas</div>
                        </div>

                        <h3 class="section-title">Emptying function</h3>
                        <div class="material-row">
                            <div class="material-name">Shake function</div>
                            <div class="material-desc">Shakes the box to release remaining produce</div>
                        </div>

                        <h3 class="section-title">Dosing function</h3>
                        <div class="material-row">
                            <div class="material-name">Dosing sensor</div>
                            <div class="material-desc">Detects product buildup and controls lifting or stopping</div>
                        </div>

                        <h3 class="section-title">Material and treatment (subframe)</h3>
                        <div class="material-row">
                            <div class="material-name">Painted mild steel</div>
                            <div class="material-desc">Subframe made from painted mild steel</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Stainless steel</div>
                            <div class="material-desc">Subframe made from stainless steel AISI304</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Galvanized steel</div>
                            <div class="material-desc">Subframe made from galvanized steel</div>
                        </div>

                        <h3 class="section-title">Height of subframe</h3>
                        <div class="material-row">
                            <div class="material-name">Height of subframe</div>
                            <div class="material-desc">0 to 7 meters</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include('footer.php')  ?>