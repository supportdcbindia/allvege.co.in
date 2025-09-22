<?php include('header.php')  ?>
<div class="banner-breadcrumb">
    <span class="background-banner"><img src="assets/img/innerPage/breadcums/gallery.webp" alt="" class="img-fluid"></span>
    <div class="banner-tit">
        <h2><span>Gallery</span></h2>
    </div>
</div>

<div class="gallerySec">
    <div class="container">
        <div class="galleryGrid">
            <?php
            $nb_elem_per_page = 100;
            $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
            $data = glob("./assets/img/innerPage/gallery/*.*");
            $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
            ?>
            <?php
            foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
            ?>
                <div class="galleryItem">
                    <a href="<?php echo $p; ?>" data-fancybox="gallery">
                        <img src="<?php echo $p; ?>" alt="">
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include('footer.php')  ?>