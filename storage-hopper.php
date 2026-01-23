<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span> Storage Hopper</span></h2>
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
                                $data = glob("assets/img/products/details/storage-hopper/*.*");
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
                            <h2 class="sec-title mb-0"> Storage Hopper</h2>
                        </div>
                        <div class="desc">
                            <p>The Allround Storage Hopper is designed to act as a buffer between processing and packaging lines, allowing produce to be temporarily stored and released in a controlled and continuous manner.</p>

                            <p>The hopper is filled gradually from the bottom to the top. An unloading conveyor located at the base transports produce out of the hopper, while a roof above the conveyor reduces product pressure for smoother discharge.</p>

                            <p>A soft-landing system is installed at the bottom of the hopper to minimize impact when produce enters from a zig-zag fall breaker or a vertical filling belt. A frequency inverter controls the operating speed, and a side hatch allows easy inspection and cleaning.</p>

                            <p>Filling can be done through either a zig-zag fall breaker or a vertical filling belt. The vertical belt is ideal for sensitive produce, as it gently fills the hopper from bottom to top to avoid damage.</p>
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
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>FIFO (First In, First Out) product flow
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Available in mild steel or stainless steel
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Real-time product tracking inside the hopper
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Variable-speed conveyors for controlled output
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Soft landing to reduce product damage
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Inspection hatch for easy checking and cleaning
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Centralized control system
                        </li>
                        <li>
                            <div class="al-step-icon p-relative"><span><i class="fa-solid fa-check"></i></span></div>Ventilators ensure fresh air circulation
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
                                <th>Length of the machine (cm)</th>
                                <th>Width of the machine (cm)</th>
                                <th>Content available (m³)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="3">AV SH 250</td>
                                <td>250</td>
                                <td>250</td>
                                <td>4</td>
                            </tr>
                            <tr class="alt">
                                <td>250</td>
                                <td>250</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>250</td>
                                <td>250</td>
                                <td>16</td>
                            </tr>

                            <tr>
                                <th rowspan="5">AV SH 300</td>
                                <td>300</td>
                                <td>250</td>
                                <td>5</td>
                            </tr>
                            <tr class="alt">
                                <td>300</td>
                                <td>250</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>250</td>
                                <td>17</td>
                            </tr>
                            <tr class="alt">
                                <td>300</td>
                                <td>300</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>300</td>
                                <td>32</td>
                            </tr>

                            <tr>
                                <th rowspan="6">AV SH 500</td>
                                <td>500</td>
                                <td>250</td>
                                <td>8</td>
                            </tr>
                            <tr class="alt">
                                <td>500</td>
                                <td>250</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>500</td>
                                <td>250</td>
                                <td>32</td>
                            </tr>
                            <tr class="alt">
                                <td>500</td>
                                <td>300</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>500</td>
                                <td>300</td>
                                <td>24</td>
                            </tr>
                            <tr class="alt">
                                <td>500</td>
                                <td>300</td>
                                <td>40</td>
                            </tr>

                            <tr>
                                <th rowspan="6">AV SH 600</td>
                                <td>600</td>
                                <td>250</td>
                                <td>11</td>
                            </tr>
                            <tr class="alt">
                                <td>600</td>
                                <td>250</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>600</td>
                                <td>250</td>
                                <td>40</td>
                            </tr>
                            <tr class="alt">
                                <td>600</td>
                                <td>300</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>600</td>
                                <td>300</td>
                                <td>28</td>
                            </tr>
                            <tr class="alt">
                                <td>600</td>
                                <td>300</td>
                                <td>46</td>
                            </tr>

                            <tr>
                                <th rowspan="2">AV SH 700</td>
                                <td>700</td>
                                <td>300</td>
                                <td>52</td>
                            </tr>
                            <tr class="alt">
                                <td>700</td>
                                <td>300</td>
                                <td>—</td>
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
                            <div class="material-desc">Frame is made from painted mild steel</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Stainless steel</div>
                            <div class="material-desc">Frame is made from stainless steel</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Foodgrade painted</div>
                            <div class="material-desc">Painted mild steel with food grade certificate</div>
                        </div>

                        <h3 class="section-title">Soft landing</h3>
                        <div class="material-row">
                            <div class="material-name">Partial</div>
                            <div class="material-desc">Mounted under zig-zag fall breaker or vertical filling conveyor</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Fully</div>
                            <div class="material-desc">Soft landing at the bottom of the storage hopper</div>
                        </div>

                        <h3 class="section-title">Outfeed height</h3>
                        <div class="material-row">
                            <div class="material-name">0 – 1 meter</div>
                            <div class="material-desc">Outfeed height 0 to 1 meter</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">1 – 2 meter</div>
                            <div class="material-desc">Outfeed height 1 to 2 meter</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">2 – 3 meter</div>
                            <div class="material-desc">Outfeed height 2 to 3 meter</div>
                        </div>

                        <h3 class="section-title">Electrical control</h3>
                        <div class="material-row">
                            <div class="material-name">No electric</div>
                            <div class="material-desc">No electric</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Central control in line</div>
                            <div class="material-desc">Necessary sensors included</div>
                        </div>

                        <h3 class="section-title">Frequency inverter</h3>
                        <div class="material-row">
                            <div class="material-name">Speed adjustment</div>
                            <div class="material-desc">Frequency inverter to control speed</div>
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

                        <h3 class="section-title">Subframe on top</h3>
                        <div class="material-row">
                            <div class="material-name">Zig zag</div>
                            <div class="material-desc">Subframe for zig-zag fall damper</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Vertical filling conveyor</div>
                            <div class="material-desc">Subframe for vertical filling belt</div>
                        </div>
                        <div class="material-row">
                            <div class="material-name">Transport conveyor on wheels</div>
                            <div class="material-desc">Subframe for transport conveyor on wheels</div>
                        </div>

                        <h3 class="section-title">Sensor</h3>
                        <div class="material-row">
                            <div class="material-name">Product sensor</div>
                            <div class="material-desc">Product sensor included</div>
                        </div>

                        <h3 class="section-title">Hatch</h3>
                        <div class="material-row">
                            <div class="material-name">Hatch</div>
                            <div class="material-desc">Hatch for inspection and cleaning</div>
                        </div>

                        <h3 class="section-title">Ventilator</h3>
                        <div class="material-row">
                            <div class="material-name">Ventilator</div>
                            <div class="material-desc">Ventilator mounted on the hopper</div>
                        </div>

                        <h3 class="section-title">Towerlight</h3>
                        <div class="material-row">
                            <div class="material-name">Towerlight</div>
                            <div class="material-desc">Light turns red when the box is full</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include('footer.php')  ?>