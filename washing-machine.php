<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span>Washing Machine</span></h2>
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
                                $data = glob("assets/img/products/details/washing-machine/*.*");
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
                            <h2 class="sec-title mb-0">Washing Machine</h2>
                        </div>
                        <div class="desc">
                            <P>The vegetable washing machine from Allvege Process Technologies is designed to clean
                                produce by removing dirt and soil. </P>

                            <P>In the U-type washing machine, produce can be partially or fully submerged in water
                                during the washing process. Produce enters the machine through an infeed chute equipped
                                with a water inlet to prevent clay and soil from sticking. As the drum rotates, the
                                produce gently rubs against the drum and against other produce, providing an effective
                                yet gentle cleaning action. Cleats inside the drum enhance the washing performance.</P>

                            <P>The drum is a key component in the cleaning process, and its selection depends on the
                                type of crop and soil conditions. The U-type washing machine is available with various
                                drum configurations. Different cleat options inside the drum are also available to
                                ensure appropriate agitation and movement of the produce. </P>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="desc">

                        <P>In U-type washing machines, product flow is regulated by a valve that can be operated either
                            manually or automatically. </P>

                        <P>Soil and debris collect in the basin beneath the rotating drum and can be removed by
                            regularly opening the drain valves. Spray tubes can be installed to rinse the interior of
                            the drum. </P>

                        <P>The outfeed conveyor discharges the cleaned produce at an appropriate height while ensuring
                            gentle handling. The subframe height can be adjusted between 0 and 3 meters. </P>
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
                        </div>Side panels can be removed for easy access to internal components
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>Drum speed is variable and can be adjusted to control the washing intensity
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>Equipped with a drum stabilizer and alignment rollers
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Drums are available in round or octagonal designs
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Drum construction options include U-profile or perforated versions
                    </li>



                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Straight or curved agitation cleats inside the drum provide effective agitation and controlled
                        product movement
                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Inspection hatches allow quick and easy cleaning and maintenance
                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Water management can be configured with manual or automatic valves, including valves and level
                        indicators
                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Spray tube mounted on the outfeed conveyor applies fresh water to the produce

                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Drive system is easily accessible and positioned outside the water zone

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
                            <th>U</th>
                            <th>UK</th>
                            <th>PD</th>
                            <th>PDK</th>
                            <th>PDV</th>
                            <th>PDVL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Destoner</td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                        </tr>
                        <tr>
                            <td>Waste chain conveyor</td>
                            <td><span class="check"></span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                        </tr>
                        <tr>
                            <td>Jackscrew</td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                        </tr>
                        <tr>
                            <td>Leaf separator</td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check checked">✓</span></td>
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
                            steel
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            Frame is made from stainless steel AISI304. The bearings and drive/idle rollers are from
                            mild steel
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Zinc sprayed painted mild steel</div>
                        <div class="material-desc">
                            Frame is made from sandblasted, zinc sprayed and painted mild steel.
                            The bearings and drive/idle rollers are from mild steel
                        </div>
                    </div>

                    <h3 class="section-title">Material and treatment (plating)</h3>
                    <div class="material-row">
                        <div class="material-name">Zinc plated steel</div>
                        <div class="material-desc">
                            The plating is made from zinc plated steel
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            The plating is made from stainless steel AISI304
                        </div>
                    </div>

                    <h3 class="section-title">Drum shape</h3>
                    <div class="material-row">
                        <div class="material-name">Round</div>
                        <div class="material-desc">
                            The drum is round shaped
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Octagon</div>
                        <div class="material-desc">
                            The drum is octagon shaped
                        </div>
                    </div>

                    <h3 class="section-title">Drum</h3>
                    <div class="material-row">
                        <div class="material-name">U-profile gap 10 mm</div>
                        <div class="material-desc">
                            The drum is made from stainless steel AISI304, u-profile with gaps 10 mm
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Perforated plate round 12 mm</div>
                        <div class="material-desc">
                            The drum is made from stainless steel AISI304, perforated plate with rounds 12 mm
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Perforated plate slot 12 × 40 mm</div>
                        <div class="material-desc">
                            The drum is made from stainless steel AISI304, perforated plate with slots 12 × 40 mm
                        </div>
                    </div>

                    <h3 class="section-title">Material (cleats)</h3>
                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            The cleats are made of stainless steel AISI304
                        </div>
                    </div>

                    <h3 class="section-title">Cleats shape</h3>
                    <div class="material-row">
                        <div class="material-name">Straight</div>
                        <div class="material-desc">
                            The cleats are straight shaped
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Turned</div>
                        <div class="material-desc">
                            The cleats are shaped turned
                        </div>
                    </div>

                    <h3 class="section-title">Material (product conveyor)</h3>
                    <div class="material-row">
                        <div class="material-name">Mild steel</div>
                        <div class="material-desc">
                            The product conveyor is made from mild steel, covered with rubber.
                            The cleats height is 50 mm. The gap size is 5 mm
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            The product conveyor is made from stainless steel AISI304, covered with rubber.
                            The cleats height is 50 mm. The gap size is 5 mm
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">PVC</div>
                        <div class="material-desc">
                            The product conveyor is made from PVC. The cleats height is 60 mm
                        </div>
                    </div>

                    <h3 class="section-title">Destoner*</h3>
                    <div class="material-row">
                        <div class="material-name">Drum</div>
                        <div class="material-desc">
                            While the produce floats, stones and dirt sink to a stone conveyor at the back of the
                            machine
                        </div>
                    </div>

                    <h3 class="section-title">Material and treatment (stone conveyor)*</h3>
                    <div class="material-row">
                        <div class="material-name">Mild steel</div>
                        <div class="material-desc">
                            The stone conveyor is made from mild steel.<br>
                            The cleats height is 40 mm.<br>
                            The gap size is 10 mm
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            The stone conveyor is made from stainless steel AISI304.<br>
                            The cleats height is 40 mm.<br>
                            The gap size is 10 mm
                        </div>
                    </div>

                    <h3 class="section-title">Jackscrew*</h3>
                    <div class="material-row">
                        <div class="material-name">Jackscrew</div>
                        <div class="material-desc">
                            Dirt sinks down and is taken out by a jackscrew at the bottom of the machine
                        </div>
                    </div>

                    <h3 class="section-title">Leaf separator*</h3>
                    <div class="material-row">
                        <div class="material-name">Leaf separator</div>
                        <div class="material-desc">
                            At the end of the machine a leaf separator takes out all floating debris
                        </div>
                    </div>

                    <h3 class="section-title">Electrical control</h3>
                    <div class="material-row">
                        <div class="material-name">No electric</div>
                        <div class="material-desc">Motors and necessary sensors</div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Stand-alone</div>
                        <div class="material-desc">
                            Motors, necessary sensors and control panel.
                            The length of the cable is 5, 10, 15 or 20 meter
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Central control in line</div>
                        <div class="material-desc">Motors and necessary sensors</div>
                    </div>

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

                    <h3 class="section-title">Water management</h3>
                    <div class="material-row">
                        <div class="material-name">Manual</div>
                        <div class="material-desc">
                            The valves can be operated manually. The water level must be regulated manually
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Automatic</div>
                        <div class="material-desc">
                            The valves are operated automatically. The water level is regulated automatically
                        </div>
                    </div>

                    <h3 class="section-title">Cleaning*</h3>
                    <div class="material-row">
                        <div class="material-name">Spray tube product conveyor</div>
                        <div class="material-desc">
                            A spray tube is included to clean the produce
                        </div>
                    </div>

                    <h3 class="section-title">Adjustment drum valve</h3>
                    <div class="material-row">
                        <div class="material-name">Manual</div>
                        <div class="material-desc">
                            The outlet valve can be adjusted manually
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Automatic</div>
                        <div class="material-desc">
                            The outlet valve can be adjusted automatically
                        </div>
                    </div>

                    <h3 class="section-title">Material and treatment (subframe)*</h3>
                    <div class="material-row">
                        <div class="material-name">Painted mild steel</div>
                        <div class="material-desc">
                            It is made from painted mild steel
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            It is made from stainless steel AISI304
                        </div>
                    </div>
                    <div class="material-row">
                        <div class="material-name">Galvanized steel</div>
                        <div class="material-desc">
                            It is made from galvanized steel
                        </div>
                    </div>

                    <h3 class="section-title">Height of subframe*</h3>
                    <div class="material-row">
                        <div class="material-name">Height of subframe</div>
                        <div class="material-desc">
                            0 to 3 meter
                        </div>
                    </div>

                </div>
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
                <table>
                    <thead>
                        <tr>
                            <th>
                                Length of the drum –<br>
                                Diameter of the drum<br>
                                (in cm)
                            </th>
                            <th>U</th>
                            <th>UK</th>
                            <th>PD</th>
                            <th>PDK</th>
                            <th>PDV</th>
                            <th>PDVL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>170 – 80</td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                        </tr>
                        <tr>
                            <td>300 – 100</td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                        </tr>
                        <tr>
                            <td>300 – 120</td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                        </tr>
                        <tr>
                            <td>450 – 120</td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                        </tr>
                        <tr>
                            <td>500 – 130</td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                        </tr>
                        <tr>
                            <td>500 – 160</td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                        </tr>
                        <tr>
                            <td>600 – 190</td>
                            <td><span class="check checked">✓</span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                            <td><span class="check"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php include('related-products.php')  ?>
<?php include('footer.php')  ?>