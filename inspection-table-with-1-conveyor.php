<?php include('header.php') ?>

<div class="banner-breadcrumb">
    <span class="background-banner">
        <img src="assets/img/innerPage/breadcums/product.webp" alt="" class="img-fluid">
    </span>
    <div class="banner-tit">
        <h2><span>Inspection Unit</span></h2>
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
                                $data = glob("assets/img/products/details/inspection-table/*.*");
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
                        <h2 class="sec-title mb-0">Inspection Unit</h2>
                        <div class="desc">
                            <p>
                                The Inspection Unit is designed for manual quality checking and removal of unwanted material from produce.
                                Products are carried over rotating rollers, allowing operators to easily see and remove foreign objects,
                                damaged items, or unwanted material.
                            </p>
                            <p>
                                Waste and rejected produce drop through the rollers into a collection bin, while the good product continues
                                towards the outfeed. The roller speed can be adjusted to match the type of produce being handled.
                            </p>
                            <p>
                                A side chute is included to guide waste away from the main flow. The unit is intended for standing operators
                                and can optionally be supplied with a protective cabin to reduce dust and noise from surrounding equipment.
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
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Rollers available in stainless steel or PVC</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Electrical panel available in painted or stainless steel</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Side chute to guide waste to bin or conveyor</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Central aisle with separate waste passage</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Integrated LED lighting for better visibility</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Emergency safety cord to stop the line</li>
                    <li><div class="al-step-icon"><span><i class="fa-solid fa-check"></i></span></div>Speed control via frequency inverter</li>
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
                            <th>AV RIZ 60</th>
                            <th>AV RIZ 80</th>
                            <th>AV RIZ 100</th>
                            <th>AV RIZ 120</th>
                            <th>AV RIZ 140</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Roller width (cm)</td>
                            <td>60</td>
                            <td>80</td>
                            <td>100</td>
                            <td>120</td>
                            <td>140</td>
                        </tr>
                        <tr>
                            <td>Machine length (cm)</td>
                            <td>125 – 650</td>
                            <td>125 – 650</td>
                            <td>125 – 650</td>
                            <td>125 – 650</td>
                            <td>125 – 650</td>
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
                <div class="material-row"><div class="material-name">Painted mild steel</div><div class="material-desc">Painted steel frame for industrial environments</div></div>
                <div class="material-row"><div class="material-name">Stainless steel</div><div class="material-desc">Stainless steel frame for hygienic operation</div></div>

                <h3 class="section-title">Rollers</h3>
                <div class="material-row"><div class="material-name">Stainless steel Ø30 mm</div><div class="material-desc">High durability stainless steel rollers</div></div>
                <div class="material-row"><div class="material-name">PVC Ø32 mm</div><div class="material-desc">Food-safe PVC rollers</div></div>
                <div class="material-row"><div class="material-name">PVC Ø56 mm</div><div class="material-desc">Heavy-duty PVC rollers</div></div>

                <h3 class="section-title">Electrical control</h3>
                <div class="material-row"><div class="material-name">No electric</div><div class="material-desc">Motors and sensors only</div></div>
                <div class="material-row"><div class="material-name">Stand-alone</div><div class="material-desc">Control panel with cable length 5–20 m</div></div>
                <div class="material-row"><div class="material-name">Central control</div><div class="material-desc">Integrated into processing line</div></div>

                <h3 class="section-title">Frequency inverter</h3>
                <div class="material-row"><div class="material-name">Speed control</div><div class="material-desc">Adjustable roller speed</div></div>

                <h3 class="section-title">Electrical panel material</h3>
                <div class="material-row"><div class="material-name">Painted mild steel</div><div class="material-desc">Standard electrical enclosure</div></div>
                <div class="material-row"><div class="material-name">Stainless steel</div><div class="material-desc">Hygienic stainless steel enclosure</div></div>

                <h3 class="section-title">Waste handling</h3>
                <div class="material-row"><div class="material-name">Side chute</div><div class="material-desc">Directs waste to conveyor or bin</div></div>
                <div class="material-row"><div class="material-name">Central aisle</div><div class="material-desc">Separate waste flow path</div></div>

                <h3 class="section-title">Lighting & Safety</h3>
                <div class="material-row"><div class="material-name">Light strip</div><div class="material-desc">Improves visibility on inspection area</div></div>
                <div class="material-row"><div class="material-name">Safety cord</div><div class="material-desc">Emergency stop along the machine</div></div>

                <h3 class="section-title">Roller speed</h3>
                <div class="material-row"><div class="material-name">Fixed</div><div class="material-desc">Constant roller speed</div></div>
                <div class="material-row"><div class="material-name">Adjustable</div><div class="material-desc">Speed adjustable via inverter</div></div>

            </div>
        </div>
    </div>

</div>

<?php include('footer.php') ?>
