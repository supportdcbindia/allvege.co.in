<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span>Elevator Conveyor</span></h2>
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
                                $data = glob("assets/img/products/details/elevators/*.*");
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
                    <!-- <div class="productImg">
                        <img src="assets/img/image-available-soon.webp" alt="Washer">
                    </div> -->
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="productContent">
                        <div class="title-area mb-0">
                            <span class="sub-title">AllVege
                                <span class="shape right">
                                    <span class="dots"></span>
                                </span>
                            </span>
                            <h2 class="sec-title mb-0">Elevator Conveyor</h2>
                        </div>
                        <div class="desc">
                            <P>When minimizing product drop is critical, the Swan Neck Elevator (ELK Type) provides the
                                ideal solution. This elevator is designed to transfer material at a controlled height
                                while keeping drop distance to a minimum, helping protect delicate produce during
                                handling.</p>

                            <P>The standard model is supplied with a painted mild steel frame and panels, while the
                                bearings and drive / idle rollers are manufactured from mild steel. If required, the
                                frame and panels can be supplied in stainless steel, while the rollers and bearings
                                remain mild steel. </P>

                            <P>The conveyor belt is available in PVC, PU, or rubber, with cleat heights of 40 mm, 60 mm,
                                or 80 mm to suit different product types. For added safety and cleanliness, the top and
                                bottom sections of the elevator can be enclosed using zinc-plated steel or stainless
                                steel covers as an optional feature. </P>
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
                        </div> The elevator is available in belt widths of 40, 60, 80, 90, 100, 120, 140, 150, 170, and
                        230 cm.
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>A backstop mechanism is provided to prevent product from rolling backward.
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>The straight conveyor section can be supplied in lengths from 150 mm up to 1500 mm, in 25
                        cm increments.
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The inclined section is available from 75 mm to 1000 mm, also in 25 cm step sizes.
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The conveyor is fitted with THW 75 type cleats.
                    </li>



                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The elevator belt can be supplied in PVC, PU, or rubber, depending on application needs.
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
                            <th>Width of the machine<br>(in cm)</th>
                            <th>Length of the straight part</th>
                            <th>Length of the incline part</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>AV ELK 40</th>
                            <td>40</td>
                            <td rowspan="10">150 t/m 1500, steps of 25 cm</td>
                            <td rowspan="10">75 t/m 1000, steps of 25 cm</td>
                        </tr>
                        <tr>
                            <th>AV ELK 60</th>
                            <td>60</td>
                        </tr>
                        <tr>
                            <th>AV ELK 80</th>
                            <td>80</td>
                        </tr>
                        <tr>
                            <th>AV ELK 90</th>
                            <td>90</td>
                        </tr>
                        <tr>
                            <th>AV ELK 100</th>
                            <td>100</td>
                        </tr>
                        <tr>
                            <th>AV ELK 120</th>
                            <td>120</td>
                        </tr>
                        <tr>
                            <th>AV ELK 140</th>
                            <td>140</td>
                        </tr>
                        <tr>
                            <th>AV ELK 150</th>
                            <td>150</td>
                        </tr>
                        <tr>
                            <th>AV ELK 170</th>
                            <td>170</td>
                        </tr>
                        <tr>
                            <th>AV ELK 230</th>
                            <td>230</td>
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
                            steel. Plating is from painted mild steel.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            Frame is made from stainless steel. The bearings and drive/idle rollers are from mild steel.
                            Plating is from stainless steel.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Belt</h3>

                    <div class="material-row">
                        <div class="material-name">PVC</div>
                        <div class="material-desc">
                            The belt is made of PVC.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">PU</div>
                        <div class="material-desc">
                            The belt is made of PU.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Cleats*</h3>

                    <div class="material-row">
                        <div class="material-name">Straight</div>
                        <div class="material-desc">
                            The type of cleats is straight.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Staggered</div>
                        <div class="material-desc">
                            The type of cleats is staggered.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Cleats height*</h3>

                    <div class="material-row">
                        <div class="material-name">60 mm</div>
                        <div class="material-desc">
                            The height of the cleats is 60 mm.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">80 mm</div>
                        <div class="material-desc">
                            The height of the cleats is 80 mm.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Cleats shape*</h3>

                    <div class="material-row">
                        <div class="material-name">THW 75</div>
                        <div class="material-desc">
                            The cleats are THW 75.
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

                    <h3 class="section-title">Frequency inverter*</h3>

                    <div class="material-row">
                        <div class="material-name">Speed adjustment</div>
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
                            The electrical panel is made from stainless steel.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Material and treatment (bottomside cover)*</h3>

                    <div class="material-row">
                        <div class="material-name">Zinc plated steel</div>
                        <div class="material-desc">
                            A cover is mounted on the bottom of the machine, made from zinc plated steel. The length of
                            the bottomside cover is 0 t/m 2500, steps of 25 cm.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            A cover is mounted on the bottom of the machine, made from stainless steel. The length of
                            the bottomside cover is 0 t/m 2500, steps of 25 cm.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Material and treatment (topside cover)*</h3>

                    <div class="material-row">
                        <div class="material-name">Zinc plated steel</div>
                        <div class="material-desc">
                            A cover is mounted on top of the machine, made from zinc plated steel. The length of the
                            topside cover is 0 t/m 2500, steps of 25 cm.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            A cover is mounted on top of the machine, made from stainless steel. The length of the
                            topside cover is 0 t/m 2500, steps of 25 cm.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Material and treatment (legs)*</h3>

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

                    <h3 class="section-title">Length of legs*</h3>

                    <div class="material-row">
                        <div class="material-name">Length of legs</div>
                        <div class="material-desc">
                            0 – 7 meter.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Support – wheels*</h3>

                    <div class="material-row">
                        <div class="material-name">Wheels</div>
                        <div class="material-desc">
                            The machine is fitted with wheels.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
<?php include('related-products.php')  ?>
<?php include('footer.php')  ?>