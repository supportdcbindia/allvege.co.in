<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/product.webp" alt=""
            class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span>Big Bag Filler</span></h2>
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
                                $data = glob("assets/img/products/details/bag-filler/*.*");
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
                            <h2 class="sec-title mb-0">Big Bag Filler</h2>
                        </div>
                        <div class="desc">
                            <P>The vertical big bag filler from Allvege Process Technologies is used to fill big bags or
                                boxes. Vertical belts are mounted on the frame to fill the big bags, along with a
                                transport belt that allows a change in conveying direction. As the machine can hold two
                                big bags or boxes, filling can continue without interruption. When hooks are installed,
                                big bags can be filled; when the hooks are removed, boxes can be filled.</P>
                            <P>The vertical big bag filler lowers and stops just before reaching the bottom of the box
                                or bag. A product sensor inside the filler detects the product and moves upward as the
                                box or bag is filled. </P>

                            <P>Fingers or cleats on the vertical big bag filler gently convey the produce into the box
                                or bag. Once a box or bag is full, the product feed stops until an empty box or bag is
                                detected. The feed conveyor then reverses direction and fills the second box or bag,
                                allowing continuous filling. </P>
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
                        </div> Depending on product size, the conveyor is available with 11 cm or 16 cm openings
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div> Available with different cleat options such as fingers, THW, and interrupted THW
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div> Weighing units can be integrated into the machine on request
                    </li>


                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Soft rubber fingers on the vertical belt gently support and convey produce into the box with
                        minimal drop height
                    </li>

                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Reversible conveyor (available on dual-head configuration only) enables continuous filling by
                        automatically directing produce to the empty box when the other box is full
                    </li>



                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Standard support frame allows easy integration into the processing line and accommodates most
                        common box sizes; customization is available for bags or extra-tall boxes and bags
                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Box locating bars ensure accurate box positioning and prevent damage to the support frame and
                        machine
                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Box detection sensor system prevents product loss on the floor; the box filler starts only when
                        the box is correctly positioned under the vertical belt
                    </li>
                    <li>
                        <div class="al-step-icon p-relative">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        Produce level sensor provides signals for adjusting the vertical belt height and indicates when
                        a box is full

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
                            <th>Model</th>
                            <th>AV VBBF 275</th>
                            <th>AV VBBF 350</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Length of the horizontal belt (cm)</td>
                            <td>275</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Height of the vertical belt (cm)</td>
                            <td>300</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>Width of the belt (cm)</td>
                            <td>60</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td>Opening size of the vertical belt (cm)</td>
                            <td>11 or 16</td>
                            <td>11 or 16</td>
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

                    <!-- Material and treatment (frame) -->
                    <h3 class="section-title">Material and treatment (frame)</h3>

                    <div class="material-row">
                        <div class="material-name">Painted mild steel</div>
                        <div class="material-desc">
                            Frame is made from painted mild steel
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Galvanized steel</div>
                        <div class="material-desc">
                            Frame is made from galvanized steel
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stainless steel</div>
                        <div class="material-desc">
                            Frame is made from stainless steel AISI304
                        </div>
                    </div>

                    <!-- Cleats -->
                    <h3 class="section-title">Cleats</h3>

                    <div class="material-row">
                        <div class="material-name">Fingers</div>
                        <div class="material-desc">
                            Finger cleats are added to carry the produce
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">THW</div>
                        <div class="material-desc">
                            The THW cleats are reinforced and therefore have a high wear resistance
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">THW interrupted</div>
                        <div class="material-desc">
                            The THW interrupted cleats are reinforced and therefore have a high wear resistance
                        </div>
                    </div>

                    <!-- Electrical control -->
                    <h3 class="section-title">Electrical control</h3>

                    <div class="material-row">
                        <div class="material-name">No electric</div>
                        <div class="material-desc">
                            Motors and necessary sensors
                        </div>
                    </div>

                    <div class="material-row">
                        <div class="material-name">Stand-alone</div>
                        <div class="material-desc">
                            Motors, necessary sensors and control panel with HMI.
                            The length of the cable is 5, 10, 15 or 20 meter
                        </div>
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

                    <!-- Weighing -->
                    <h3 class="section-title">Weighing</h3>

                    <div class="material-row">
                        <div class="material-name">Weighing unit</div>
                        <div class="material-desc">
                            The weighing unit is to weigh the big bags and to stop filling the big bag
                            when the desired weight is reached. The maximum weight of the big bags is
                            2000 kg
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<?php include('related-products.php')  ?>
<?php include('footer.php')  ?>