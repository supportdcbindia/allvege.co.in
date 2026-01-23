<?php include('header.php') ?>

<div class="banner-breadcrumb">
    <span class="background-banner">
        <img src="assets/img/innerPage/breadcums/product.webp" alt="" class="img-fluid">
    </span>
    <div class="banner-tit">
        <h2><span>Storage Hopper Tipping</span></h2>
    </div>
</div>

<div class="productSec">

    <!-- Product Details -->
    <div class="innerProductDetails">
        <div class="container">
            <div class="row">

                <!-- Images -->
                <div class="col-sm-12 col-md-6">
                    <div class="productImg">
                        <div class="swiper productSwiper">
                            <div class="swiper-wrapper">
                                <?php
                                $nb_elem_per_page = 100;
                                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                                $data = glob("assets/img/products/details/storage-hopper/*.*");
                                foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                                ?>
                                    <div class="swiper-slide"><img src="<?php echo $p; ?>" alt=""></div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="col-sm-12 col-md-6">
                    <div class="productContent">
                        <span class="sub-title">AllVege <span class="shape right"><span class="dots"></span></span></span>
                        <h2 class="sec-title mb-0">Storage Hopper Tipping</h2>
                        <div class="desc">
                            <p>
                                The Storage Hopper Tipping system is built to act as a buffering unit while also allowing
                                boxes filled with produce to be emptied in a controlled way. A box is positioned in the
                                tipper, which lifts and tilts it so the product is released into the fall breaker inside
                                the hopper. A conveyor installed at the bottom then moves the produce further along the
                                line.
                            </p>

                            <p>
                                This system is mainly used to feed packing lines with a stable and continuous flow of
                                product. It can also be used for supplying processing lines where a lower capacity is
                                required.
                            </p>

                            <p>
                                A dust cover can be added on top of the unit to keep dust and loose particles inside the
                                machine during tipping. The system can also be operated from a distance using an
                                optional wireless remote control.
                            </p>
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
                <h2 class="sec-title mb-0">Characteristics</h2>
            </div>
            <div class="feature-list mt-5">
                <ul class="column-count">
                    <li>
                        <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Models available for 160 cm, 180 cm and 240 cm wide boxes
                    </li>
                    <li>
                        <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Storage volumes available: 1.5, 3, 3.5 and 7 m³
                    </li>
                    <li>
                        <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Integrated box tipper mounted above the hopper
                    </li>
                    <li>
                        <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Designed for feeding packing and processing lines
                    </li>
                    <li>
                        <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Soft loading system for gentle product handling
                    </li>
                    <li>
                        <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Optional dust cover for enclosed operation
                    </li>
                    <li>
                        <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Optional wireless remote operation
                    </li>
                    <li>
                        <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Optional ventilator for air circulation
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Specifications -->
    <div class="tableData bgGrey">
        <div class="container">
            <h2 class="sec-title mb-0">Specifications</h2>
            <div class="table-responsive pt-5">
                <table class="machine-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Maximum width of the box (cm)</th>
                            <th>Content (m³)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="3">AV SHB 160</th>
                            <td>160</td>
                            <td>1.5</td>
                        </tr>
                        <tr class="alt">
                            <td>160</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>160</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <th rowspan="2">AV SHB 180</th>
                            <td>180</td>
                            <td>3.5</td>
                        </tr>
                        <tr class="alt">
                            <td>180</td>
                            <td>7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Options -->
    <div class="tableData">
        <div class="container">
            <h2 class="sec-title mb-0">Options</h2>
            <div class="material-section pt-5">

                <h3 class="section-title">Material and treatment (frame)</h3>
                <div class="material-row">
                    <div class="material-name">Painted mild steel</div>
                    <div class="material-desc">Steel frame with industrial protective coating</div>
                </div>
                <div class="material-row">
                    <div class="material-name">Stainless steel</div>
                    <div class="material-desc">Full stainless steel construction for hygienic environments</div>
                </div>
                <div class="material-row">
                    <div class="material-name">Foodgrade painted</div>
                    <div class="material-desc">Painted steel with food-safe certified coating</div>
                </div>

                <h3 class="section-title">Electrical control</h3>
                <div class="material-row">
                    <div class="material-name">Stand-alone</div>
                    <div class="material-desc">Motors, sensors and control panel (cable length 5, 10, 15 or 20 m)</div>
                </div>
                <div class="material-row">
                    <div class="material-name">No electric</div>
                    <div class="material-desc">Motors and sensors only</div>
                </div>

                <h3 class="section-title">Frequency inverter</h3>
                <div class="material-row">
                    <div class="material-name">Speed adjustment</div>
                    <div class="material-desc">Inverter included to control operating speed</div>
                </div>

                <h3 class="section-title">Material and treatment (electrical panel)</h3>
                <div class="material-row">
                    <div class="material-name">Painted mild steel</div>
                    <div class="material-desc">Electrical panel made from painted steel</div>
                </div>
                <div class="material-row">
                    <div class="material-name">Stainless steel</div>
                    <div class="material-desc">Electrical panel made from stainless steel AISI304</div>
                </div>

                <h3 class="section-title">Remote control</h3>
                <div class="material-row">
                    <div class="material-name">Wireless</div>
                    <div class="material-desc">Machine can be operated remotely</div>
                </div>
                <div class="material-row">
                    <div class="material-name">Pulling cord</div>
                    <div class="material-desc">Ceiling-mounted control cord</div>
                </div>

                <h3 class="section-title">Cover</h3>
                <div class="material-row">
                    <div class="material-name">Dust cover</div>
                    <div class="material-desc">Enclosed top to keep dust inside the machine</div>
                </div>

                <h3 class="section-title">Automatic box clamping</h3>
                <div class="material-row">
                    <div class="material-name">Automatic</div>
                    <div class="material-desc">Clamping system adjusts to box height</div>
                </div>

                <h3 class="section-title">Tipping</h3>
                <div class="material-row">
                    <div class="material-name">Big bag tipping</div>
                    <div class="material-desc">Supports tipping of big bags up to approx. 140–150 cm</div>
                </div>

                <h3 class="section-title">Hatch</h3>
                <div class="material-row">
                    <div class="material-name">Hatch</div>
                    <div class="material-desc">Side hatch for inspection and product removal</div>
                </div>

                <h3 class="section-title">Ventilator</h3>
                <div class="material-row">
                    <div class="material-name">Ventilator</div>
                    <div class="material-desc">Provides airflow inside the hopper</div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php include('footer.php') ?>