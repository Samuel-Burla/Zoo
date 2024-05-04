<?php
require_once __DIR__ . "/templates/header.php";
?>

<!-- BIG TITLE-->
<!-- on click on one image it will be a link -->

<section class="section_gallery">
    <h2>Les differents habitats</h2>
    <div class="section_gallery_content">
        <div class="section_gallery_images">
            <div class="section_gallery_images_img">
                <a href="/habitat.php"><img class="gallery_image" src="/assets/images/desert.jpg" alt="desert"></a>
                <div class="section_gallery_images_img_content">
                    <h2>Desert</h2>
                </div>
            </div>
            <div class="section_gallery_images_img">
                <a href="/habitat.php"><img class="gallery_image" src="/assets/images/tropicalForest2.jpg" alt="tropical forest"></a>
                <div class="section_gallery_images_img_content">
                    <h2>forêt tropicale</h2>
                </div>
            </div>
            <div class="section_gallery_images_img">
                <a href="/habitat.php"><img class="gallery_image" src="/assets/images/savannah.jpg" alt="savannah"></a>
                <div class="section_gallery_images_img_content">
                    <h2>Savane</h2>
                </div>
            </div>
            <div class="section_gallery_images_img">
                <a href="/habitat.php"><img class="gallery_image" src="/assets/images/polarZone.jpg" alt="polar zone"></a>
                <div class="section_gallery_images_img_content">
                    <h2>Zone polaire</h2>
                </div>
            </div>
            <div class="section_gallery_images_img mobile">
                <a href="/habitat.php"><img class="gallery_image" src="/assets/images/ocean.jpg" alt="ocean"></a>
                <div class="section_gallery_images_img_content">
                    <h2>Milieu marin</h2>
                </div>
            </div>
            <div class="section_gallery_images_img mobile">
                <a href="/habitat.php"><img class="gallery_image" src="/assets/images/mountain.jpg" alt="mountain"></a>
                <div class="section_gallery_images_img_content">
                    <h2>Montagne</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . "/templates/footer.php";
?>