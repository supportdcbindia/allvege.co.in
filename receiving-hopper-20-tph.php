<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span> Receiving Hopper (20 TPH)</span></h2>
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
                                $data = glob("assets/img/products/details/receiving-hopper-20/*.*");
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
                            <h2 class="sec-title mb-0"> Receiving Hopper (20 TPH)</h2>
                        </div>
                        <div class="desc">
                            <p>The Receiving Hopper (20 TPH) from Allvege Process Technologies is designed for high-volume produce intake, acting as a robust buffer system for continuous feeding of washing, grading, and storage lines.</p>

                            <p>The hopper accepts produce from trailers, boxes, bins, and big bags. A heavy-duty moving floor transports the product diagonally upward while the inclined hopper design ensures smooth, uniform and damage-free product flow.</p>

                            <p>A frequency inverter allows accurate adjustment of the discharge rate to match downstream processing capacity. Mounted on industrial wheels, the hopper can be repositioned easily within the facility.</p>
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
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>High-capacity intake up to 20 tons per hour
                        </li>
                        <li>
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Available in multiple widths and hopper lengths
                        </li>
                        <li>
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Ideal for feeding washers, graders, and cold storage lines
                        </li>
                        <li>
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Can be loaded by trailers, bins, boxes, and big bags
                        </li>
                        <li>
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Heavy-duty conveyor belts for long service life
                        </li>
                        <li>
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Variable-speed floor with frequency inverter
                        </li>
                        <li>
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Inclined floor design for consistent product flow
                        </li>
                        <li>
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Optional dosing sensor for automatic capacity control
                        </li>
                        <li>
                            <div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Mounted on wheels for easy relocation
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
                            <tr>
                                <th></th>
                                <th>Width of the machine (cm)</th>
                                <th>Length of the incline part (cm)</th>
                                <th>Length of the straight part (cm)</th>
                                <th>Total content (m³)</th>
                                <th>Effective content (m³)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3" class="model">AV ARH 200</td>
                                <td>200</td>
                                <td>600</td>
                                <td>0</td>
                                <td>15.5</td>
                                <td>9.3</td>
                            </tr>
                            <tr class="alt">
                                <td>200</td>
                                <td>700</td>
                                <td>0</td>
                                <td>18.0</td>
                                <td>10.8</td>
                            </tr>
                            <tr>
                                <td>200</td>
                                <td>800</td>
                                <td>0</td>
                                <td>20.5</td>
                                <td>12.3</td>
                            </tr>

                            <tr>
                                <td rowspan="3" class="model">AV ARH 240</td>
                                <td>240</td>
                                <td>700</td>
                                <td>0</td>
                                <td>21.0</td>
                                <td>12.6</td>
                            </tr>
                            <tr class="alt">
                                <td>240</td>
                                <td>800</td>
                                <td>0</td>
                                <td>24.0</td>
                                <td>14.4</td>
                            </tr>
                            <tr>
                                <td>240</td>
                                <td>900</td>
                                <td>0</td>
                                <td>27.5</td>
                                <td>16.5</td>
                            </tr>

                            <tr>
                                <td rowspan="3" class="model">AV ARH 300</td>
                                <td>300</td>
                                <td>800</td>
                                <td>0</td>
                                <td>28.5</td>
                                <td>17.1</td>
                            </tr>
                            <tr class="alt">
                                <td>300</td>
                                <td>900</td>
                                <td>0</td>
                                <td>32.0</td>
                                <td>19.2</td>
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>1000</td>
                                <td>0</td>
                                <td>36.0</td>
                                <td>21.6</td>
                            </tr>
                        </tbody>
                    </table>
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
                            <div class="material-name">Painted mild steel</div>
                            <div class="material-desc">Frame is made from painted mild steel. Bearings and drive/idle rollers are mild steel</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Stainless steel</div>
                            <div class="material-desc">Frame is made from stainless steel AISI304. Bearings and rollers are mild steel</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Galvanized steel</div>
                            <div class="material-desc">Frame is made from galvanized steel. Bearings and rollers are mild steel</div>
                        </div>

                        <h3 class="section-title">Material and treatment (plating)</h3>
                        <div class="material-row">
                            <div class="material-name">Painted mild steel</div>
                            <div class="material-desc">The plating is made from painted mild steel</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Stainless steel</div>
                            <div class="material-desc">The plating is made from stainless steel AISI304</div>
                        </div>

                        <h3 class="section-title">Electrical control</h3>
                        <div class="material-row">
                            <div class="material-name">Stand-alone</div>
                            <div class="material-desc">Motors, sensors and control panel. Cable length: 5, 10, 15 or 20 meters</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">No electric</div>
                            <div class="material-desc">Motors and necessary sensors</div>
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

                        <h3 class="section-title">Dosing Sensor</h3>
                        <div class="material-row">
                            <div class="material-name">Dosing Sensor</div>
                            <div class="material-desc">Automatically regulates output based on product load</div>
                        </div>

                        <h3 class="section-title">Dosing mill</h3>
                        <div class="material-row">
                            <div class="material-name">Dosing mill</div>
                            <div class="material-desc">Prevents product clumping and irregular discharge</div>
                        </div>

                        <h3 class="section-title">Subframe – wheels</h3>
                        <div class="material-row">
                            <div class="material-name">Wheels</div>
                            <div class="material-desc">Allows easy transportation inside the facility</div>
                        </div>

                        <h3 class="section-title">Subframe – first part</h3>
                        <div class="material-row">
                            <div class="material-name">Roller set</div>
                            <div class="material-desc">Designed for roller set mounting</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Product belt</div>
                            <div class="material-desc">Support frame prepared for product belt</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Acceleration belt</div>
                            <div class="material-desc">Support frame prepared for acceleration belt</div>
                        </div>

                        <h3 class="section-title">Subframe – second part</h3>
                        <div class="material-row">
                            <div class="material-name">Roller set</div>
                            <div class="material-desc">Second part designed for roller set</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Product belt</div>
                            <div class="material-desc">Second part designed for product belt</div>
                        </div>

                        <h3 class="section-title">Subframe – third part</h3>
                        <div class="material-row">
                            <div class="material-name">Roller set</div>
                            <div class="material-desc">Third part designed for roller set</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Product belt</div>
                            <div class="material-desc">Third part designed for product belt</div>
                        </div>

                        <h3 class="section-title">Subframe – fourth part</h3>
                        <div class="material-row">
                            <div class="material-name">Product belt</div>
                            <div class="material-desc">Fourth part designed for product belt</div>
                        </div>

                        <h3 class="section-title">Waste belt</h3>
                        <div class="material-row">
                            <div class="material-name">1</div>
                            <div class="material-desc">One waste belt included</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">2</div>
                            <div class="material-desc">Two waste belts included</div>
                        </div>

                        <h3 class="section-title">Chain greasing</h3>
                        <div class="material-row">
                            <div class="material-name">Automatic</div>
                            <div class="material-desc">Automatic chain grease system included</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include('footer.php')  ?>