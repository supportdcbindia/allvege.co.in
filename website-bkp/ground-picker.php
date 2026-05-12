<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span>Pick Up Scooter</span></h2>
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
                                $data = glob("assets/img/products/details/ground-picker/*.*");
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
                            <h2 class="sec-title mb-0">Pick Up Scooter</h2>
                        </div>
                        <div class="desc">
                            <P>
                                The Pick Up Scooter APS 250 is built for fast and efficient unloading of bulk storage
                                areas. This wheeled machine is designed to be operated by one person, offering easy
                                handling and smooth control. As it moves forward, it collects produce directly from the
                                floor and feeds it onto a conveyor for onward transport. Its specially designed pickup
                                system makes it ideal for handling round produce, allowing bulk stores to be emptied
                                quickly and smoothly.
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
                        </div>The total machine length ranges from 690 cm to 910 cm depending on the configuration.
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The discharge (outfeed) height is 67 cm.
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The machine frame is available in painted mild steel or AISI 304 stainless steel, while the
                        bearings and drive / idle rollers are manufactured from mild steel.
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        The unit is specially designed for handling round-shaped produce efficiently.
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
                            <th colspan="2">AV APS 250</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Length of the machine (in cm)</td>
                            <td>690 – 910</td>
                        </tr>
                        <tr>
                            <td>Outfeed height (in cm)</td>
                            <td>67</td>
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
                            steel.
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            Frame is made from stainless steel AISI304. The bearings and drive/idle rollers are from
                            mild steel.
                        </div>
                    </div>

                </div>


                <div class="material-section">

                    <h3 class="section-title">Electrical control</h3>

                    <div class="material-row">
                        <div class="material-name">Stand-alone</div>
                        <div class="material-desc">
                            Motors, necessary sensors and control panel. The length of the cable is 5, 10, 15 or 20
                            meter.
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

                </div>

            </div>
        </div>
    </div>
</div>



<?php include('related-products.php')  ?>
<?php include('footer.php')  ?>