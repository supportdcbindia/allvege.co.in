<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span> Receiving Hopper (10 TPH)</span></h2>
    </div>
</div>

<div class="productSec">
    <div class="innerProductDetails">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <!-- <div class="productImg">
                        <img src="assets/img/products/details/receiving-hopper/receiving-hopper.webp" alt="Washer">
                    </div> -->
                    <div class="productImg">
                        <div class="swiper productSwiper">
                            <div class="swiper-wrapper">
                                <?php
                                $nb_elem_per_page = 100;
                                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                                $data = glob("assets/img/products/details/receiving-hopper-10/*.*");
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
                            <h2 class="sec-title mb-0"> Receiving Hopper (10 TPH)</h2>
                        </div>
                        <div class="desc">
                            <p>The receiving hopper from Allvege Process Technologies is engineered to function as an
                                efficient buffer unit within produce handling operations. It can be used to supply
                                processing lines as well as loading and unloading systems in storage environments.</p>

                            <p>The hopper is designed to accept produce from a wide range of sources, including various
                                trailer types, boxes, and big bags. Once loaded, an integrated moving floor transports
                                the product diagonally upward toward the discharge point. The inclined floor design
                                promotes a consistent and even product flow. </p>


                            <p>For optimal control, the system is equipped with a frequency inverter that allows the
                                operator to adjust the discharge rate according to process requirements. The hopper is
                                mounted on wheels, enabling easy relocation over short distances within the facility.
                            </p>
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
                            </div>
                            Available in multiple widths and lengths
                        </li>
                        <li>
                            <div class="al-step-icon p-relative">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>
                            Suitable for feeding processing lines or cold storage rooms
                        </li>


                        <li>
                            <div class="al-step-icon p-relative">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>
                            Can be loaded using various trailer types, boxes, or big bags
                        </li>

                        <li>
                            <div class="al-step-icon p-relative">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>
                            Equipped with heavy-duty belts for durability and long service life

                        </li>

                        <li>
                            <div class="al-step-icon p-relative">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>
                            Variable-speed conveyor with dosing sensor
                        </li>
                        <li>
                            <div class="al-step-icon p-relative">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>
                            Easy access design for straightforward cleaning and maintenance
                        </li>
                        <li>
                            <div class="al-step-icon p-relative">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>
                            Mounted on wheels for simple relocation over short distances
                        </li>
                        <li>
                            <div class="al-step-icon p-relative">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>
                            Floor speed can be adjusted using a frequency inverter to control product flow

                        </li>
                        <li>
                            <div class="al-step-icon p-relative">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>
                            Optional sensor available to detect and regulate produce output

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
                    <h2 class="sec-title mb-0"> Capacity Of Receiving Hopper (10 TPH)</h2>
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
                            <!-- ARH 160 -->
                            <tr>
                                <td rowspan="4" class="model">ARH 160</td>
                                <td>160</td>
                                <td>400</td>
                                <td>0</td>
                                <td>9.0</td>
                                <td>5.4</td>
                            </tr>
                            <tr class="alt">
                                <td>160</td>
                                <td>400</td>
                                <td>100</td>
                                <td>9.7</td>
                                <td>5.8</td>
                            </tr>
                            <tr>
                                <td>160</td>
                                <td>400</td>
                                <td>200</td>
                                <td>12.2</td>
                                <td>7.3</td>
                            </tr>
                            <tr class="alt">
                                <td>160</td>
                                <td>400</td>
                                <td>300</td>
                                <td>14.8</td>
                                <td>8.8</td>
                            </tr>

                            <!-- ARH 200 -->
                            <tr>
                                <td rowspan="3" class="model">ARH 200</td>
                                <td>200</td>
                                <td>400</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="alt">
                                <td>200</td>
                                <td>500</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>200</td>
                                <td>600</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <!-- ARH 240 -->
                            <tr>
                                <td rowspan="4" class="model">ARH 240</td>
                                <td>240</td>
                                <td>600</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="alt">
                                <td>240</td>
                                <td>700</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>240</td>
                                <td>800</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="alt">
                                <td>240</td>
                                <td>900</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <!-- ARH 300 -->
                            <tr>
                                <td rowspan="3" class="model">ARH 300</td>
                                <td>300</td>
                                <td>700</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="alt">
                                <td>300</td>
                                <td>800</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>900</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
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
                                Frame is made from painted mild steel. The bearings and drive/idle
                                rollers are from mild steel
                            </div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">Stainless steel</div>
                            <div class="material-desc">
                                Frame is made from stainless steel AISI304. The bearings and drive/idle
                                rollers are from mild steel
                            </div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">Galvanized steel</div>
                            <div class="material-desc">
                                Frame is made from galvanized steel. The bearings and drive/idle
                                rollers are from mild steel
                            </div>
                        </div>

                        <!-- Material and treatment (plating) -->
                        <h3 class="section-title">Material and treatment (plating)</h3>

                        <div class="material-row">
                            <div class="material-name">Painted mild steel</div>
                            <div class="material-desc">The plating is made from painted mild steel</div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">Stainless steel</div>
                            <div class="material-desc">The plating is made from stainless steel AISI304</div>
                        </div>

                        <!-- Electrical control -->
                        <h3 class="section-title">Electrical control</h3>

                        <div class="material-row">
                            <div class="material-name">Stand-alone</div>
                            <div class="material-desc">
                                Motors, necessary sensors and control panel. The length of the cable is
                                5, 10, 15 or 20 meter
                            </div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">No electric</div>
                            <div class="material-desc">Motors and necessary sensors</div>
                        </div>

                        <!-- Material and treatment (electrical panel) -->
                        <h3 class="section-title">Material and treatment (electrical panel)</h3>

                        <div class="material-row">
                            <div class="material-name">Painted mild steel</div>
                            <div class="material-desc">
                                The electrical panel is made from painted mild steel
                            </div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">Stainless steel</div>
                            <div class="material-desc">
                                The electrical panel is made from stainless steel AISI304
                            </div>
                        </div>

                        <!-- Dosing Sensor -->
                        <h3 class="section-title">Dosing Sensor</h3>

                        <div class="material-row">
                            <div class="material-name">Dosing Sensor</div>
                            <div class="material-desc">
                                A dosing sensor detects how much product is on the belt and adjusts the
                                output rate of the hopper accordingly (automatic capacity control)
                            </div>
                        </div>

                        <!-- Dosing mill -->
                        <h3 class="section-title">Dosing mill</h3>

                        <div class="material-row">
                            <div class="material-name">Dosing mill</div>
                            <div class="material-desc">
                                A dosing mill seperates the sticking product and prevents the product from
                                coming out in large numbers or not coming out of the machine at all
                            </div>
                        </div>

                        <!-- Subframe – wheels -->
                        <h3 class="section-title">Subframe – wheels</h3>

                        <div class="material-row">
                            <div class="material-name">Wheels</div>
                            <div class="material-desc">
                                The support frame is fitted with wheels, to make transportation of the
                                machine easier
                            </div>
                        </div>

                        <!-- Subframe – first part -->
                        <h3 class="section-title">Subframe – first part</h3>

                        <div class="material-row">
                            <div class="material-name">Roller set</div>
                            <div class="material-desc">
                                The (first part of the) support frame is made for a roller set
                            </div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">Product belt</div>
                            <div class="material-desc">
                                The (first part of the) support frame is made for a product belt
                            </div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">Acceleration belt</div>
                            <div class="material-desc">
                                The (first part of the) support frame is made for a acceleration belt
                            </div>
                        </div>

                        <!-- Subframe – second part -->
                        <h3 class="section-title">Subframe – second part</h3>

                        <div class="material-row">
                            <div class="material-name">Roller set</div>
                            <div class="material-desc">
                                The second part of the support frame is made for a roller set
                            </div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">Product belt</div>
                            <div class="material-desc">
                                The second part of the support frame is made for a product belt
                            </div>
                        </div>

                        <!-- Subframe – third part -->
                        <h3 class="section-title">Subframe – third part</h3>

                        <div class="material-row">
                            <div class="material-name">Roller set</div>
                            <div class="material-desc">
                                The third part of the support frame is made for a roller set
                            </div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">Product belt</div>
                            <div class="material-desc">
                                The third part of the support frame is made for a product belt
                            </div>
                        </div>

                        <!-- Subframe – fourth part -->
                        <h3 class="section-title">Subframe – fourth part</h3>

                        <div class="material-row">
                            <div class="material-name">Product belt</div>
                            <div class="material-desc">
                                The fourth part of the support frame is made for a product belt
                            </div>
                        </div>

                        <!-- Waste belt -->
                        <h3 class="section-title">Waste belt</h3>

                        <div class="material-row">
                            <div class="material-name">1</div>
                            <div class="material-desc">There is one waste belt included</div>
                        </div>

                        <div class="material-row">
                            <div class="material-name">2</div>
                            <div class="material-desc">There are two waste belts included</div>
                        </div>

                        <!-- Chain greasing -->
                        <h3 class="section-title">Chain greasing</h3>

                        <div class="material-row">
                            <div class="material-name">Automatic</div>
                            <div class="material-desc">
                                An automatic grease system is included
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php')  ?>