<?php include('header.php') ?>

<div class="banner-breadcrumb">
    <span class="background-banner">
        <img src="assets/img/innerPage/breadcums/product.webp" alt="" class="img-fluid">
    </span>
    <div class="banner-tit">
        <h2><span>Weighing Machine</span></h2>
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
                                $data = glob("assets/img/products/details/weighing-machine/*.*");
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
                        <h2 class="sec-title mb-0">Weighing Machine</h2>
                        <div class="desc">
                            <p>
                                The Weighing Machine is designed to accurately measure produce before packing or
                                transfer. Products are transported upward on an inclined belt and collected in a
                                weighing bin. Once the selected weight is reached, the bottom of the bin opens using
                                a foot pedal, allowing the produce to fall into a box, bag, or onto a conveyor.
                            </p>
                            <p>
                                The unit is mounted on wheels so it can easily be positioned wherever it is needed
                                in the processing or packing area.
                            </p>
                            <p>
                                Single-belt versions are generally used for root vegetables, while two-belt models
                                are ideal for round produce. As the target weight is approached, one belt pauses
                                while the other continues to ensure accurate final weighing.
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
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Suitable for weights from 5 kg to 50 kg</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Works with both round and root type produce</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Single belt model for root vegetables</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Two belt model for round produce</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Available in 250 cm or 350 cm belt length</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>50 mm cleat height for secure product movement</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Painted mild steel frame</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Painted mild steel electrical cabinet</li>
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
                            <th>AV AW 50-01-250</th>
                            <th>AV AW 50-01-350</th>
                            <th>AV AW 50-02-250</th>
                            <th>AV AW 50-02-350</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Number of belts</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Belt length (cm)</td>
                            <td>250</td>
                            <td>350</td>
                            <td>250</td>
                            <td>350</td>
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
                    <div class="material-desc">Steel frame with protective industrial coating</div>
                </div>

                <h3 class="section-title">Cleats height</h3>
                <div class="material-row">
                    <div class="material-name">Cleats height</div>
                    <div class="material-desc">50 mm high cleats for stable transport</div>
                </div>

                <h3 class="section-title">Electrical control</h3>
                <div class="material-row">
                    <div class="material-name">Stand-alone</div>
                    <div class="material-desc">Motors, sensors and control panel included (5, 10, 15 or 20 m cable)</div>
                </div>

                <h3 class="section-title">Material and treatment (electrical panel)</h3>
                <div class="material-row">
                    <div class="material-name">Painted mild steel</div>
                    <div class="material-desc">Electrical cabinet built from painted steel</div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php include('footer.php') ?>
