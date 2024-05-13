<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/functions.php";

$habitats = getHabitats($pdo);
?>

<section class="section_bigTitle">
    <img src="/assets/images/bigTitleHomeElephant.jpg" alt="Our Zoo">
    <div class="section_bigTitle_content">
        <h1>Découvrez notre magnifique Zoo</h1>
    </div>
</section>


<section class="section_description">
    <div class="section_content_textImage">
        <h2>Notre Merveilleux Zoo</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia
            amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore
            , optio officia error.Illum quas ut molestiae labore
            , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit.
            Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia
            amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore
            , optio officia error.Illum quas ut molestiae labore
            , optio officia error</p>
    </div>
    <img src="/assets/images/flamingo.jpg" alt="flamingo">
</section>
<section class="section_description reverse">
    <div class="section_content_textImage">
        <h2>Notre engagement écologique</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia
            amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore
            , optio officia error.Illum quas ut molestiae labore
            , optio officia errorLorem ipsum dolor sit amet consectetur adipisicing elit.
            Fugiat reprehenderit asperiores rerum dolorem facilis ipsam mollitia
            amet minima, fugit labore reiciendis sit? Illum quas ut molestiae labore
            , optio officia error.Illum quas ut molestiae labore
            , optio officia error</p>
    </div>
    <img src="/assets/images/ecology.jpg" alt="Ecology Image">
</section>


<section class="section_gallery">
    <h2>Les differents habitats</h2>
    <div class="section_gallery_content">
        <div class="section_gallery_images">
            <?php foreach ($habitats as $key => $habitat) { ?>
                <div class="section_gallery_images_img">
                <a href="/pages/habitat.php?id=<?= $key + 1?>"><!-- image --><img class="gallery_image" src="/assets/images/desert.jpg" alt="desert"></a>
                    <div class="section_gallery_images_img_content">
                        <h2><?= $habitat["name"] ?></h2>
                    </div>
                </div>
            <?php } ?>
            <!--<img class="gallery_image" src="/assets/images/tropicalForest2.jpg" alt="tropical forest">-->
            <!--<img class="gallery_image" src="/assets/images/savannah.jpg" alt="savannah">-->
            <!--<img class="gallery_image" src="/assets/images/polarZone.jpg" alt="polar zone">-->
            <!--<img class="gallery_image" src="/assets/images/ocean.jpg" alt="ocean">-->
            <!--<img class="gallery_image" src="/assets/images/mountain.jpg" alt="mountain">-->
        </div>
    </div>
    <div class="services_button">
    <a class="button" href="/pages/habitats.php">Voir les habitats</a>
</div>
</section>

<section class="section_image">
    <img src="/assets/images/guide.jpg" alt="guide">
    <div class="section_image_content">
        <h2>Visite guidée</h2>
        <p class="section_image_content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
            at alias quam, incidunt veritatis corrupti adipisci? Possimus
            assumenda ipsam voluptatem nostrum tempora magni natus hic id
            . Odiot.</p>
    </div>
</section>
<section class="section_image">
    <img src="/assets/images/train.jpg" alt="train">
    <div class="section_image_content">
        <h2>Petit tour en train</h2>
        <p class="section_image_content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
            at alias quam, incidunt veritatis corrupti adipisci? Possimus
            assumenda ipsam voluptatem nostrum tempora magni natus hic id
            . Odiot.</p>
    </div>
</section>
<div class="services_button">
    <a class="button" href="/services.php">Voir les services</a>
</div>

<section class="section_gallery">
    <h2>Les differents animaux</h2>
    <div class="section_gallery_content">
        <div class="section_gallery_images">
            <div class="section_gallery_images_img">
                <a href="#"><img class="gallery_image" src="/assets/images/andreas-rasmussen-NNe6epzHGm8-unsplash (1).jpg" alt="s"></a>
                <div class="section_gallery_images_img_content">
                    <h2>petit tour en train</h2>
                </div>
            </div>
            <div class="section_gallery_images_img">
                <a href="#"><img class="gallery_image" src="/assets/images/andreas-rasmussen-NNe6epzHGm8-unsplash (1).jpg" alt="s"></a>
                <div class="section_gallery_images_img_content">
                    <h2>petit tour en train</h2>
                </div>
            </div>
            <div class="section_gallery_images_img">
                <a href="#"><img class="gallery_image" src="/assets/images/andreas-rasmussen-NNe6epzHGm8-unsplash (1).jpg" alt="s"></a>
                <div class="section_gallery_images_img_content">
                    <h2>petit tour en train</h2>
                </div>
            </div>
            <div class="section_gallery_images_img">
                <a href="#"><img class="gallery_image" src="/assets/images/andreas-rasmussen-NNe6epzHGm8-unsplash (1).jpg" alt="s"></a>
                <div class="section_gallery_images_img_content">
                    <h2>petit tour en train</h2>
                </div>
            </div>
            <div class="section_gallery_images_img mobile">
                <a href="#"><img class="gallery_image" src="/assets/images/andreas-rasmussen-NNe6epzHGm8-unsplash (1).jpg" alt="s"></a>
                <div class="section_gallery_images_img_content">
                    <h2>petit tour en train</h2>
                </div>
            </div>
            <div class="section_gallery_images_img mobile">
                <a href="#"><img class="gallery_image" src="/assets/images/andreas-rasmussen-NNe6epzHGm8-unsplash (1).jpg" alt="s"></a>
                <div class="section_gallery_images_img_content">
                    <h2>petit tour en train</h2>
                </div>
            </div>
        </div>
        <a class="button" href="/habitats.php">Voir les habitats</a>
    </div>
</section>

<section class="section_comment">
    <h2>L'avis de nos visiteurs</h2>
    <div class="section_comment_card">
        <div class="section_comment_cards">
            <div class="section_comment_card_content">
                <img src="/assets/images/profile.jpg" alt="profile">
                <div class="section_comment_card_name ">
                    <h2>Samuel B.</h2>
                    <!--<div class="section_comment_card_stars">
                        <?php for ($i = 1; $i <= 5 /*$numberOfStartFromBdd*/; $i++) { ?>
                            <i class="bi bi-star-fill"></i>
                        <?php } ?>
                    </div>-->
                </div>
                <div class="section_comment_card_text">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta voluptates
                        aperiam omnis consectetur earum in iure! Sit amet animi sapiente praesentium
                        laudantium ullam nobis optio quibusdam similique fugiat. </p>
                </div>
            </div>

            <div class="section_comment_card_content mobile">
                <img src="/assets/images/profile.jpg" alt="profile">
                <div class="section_comment_card_name ">
                    <h2>Samuel B.</h2>
                    <div class="section_comment_card_stars">
                        <?php for ($i = 1; $i <= 5 /*$numberOfStartFromBdd*/; $i++) { ?>
                            <i class="bi bi-star-fill"></i>
                        <?php } ?>
                    </div>
                </div>
                <div class="section_comment_card_text">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta voluptates
                        aperiam omnis consectetur earum in iure! Sit amet animi sapiente praesentium
                        laudantium ullam nobis optio quibusdam similique fugiat. </p>
                </div>
            </div>

            <div class="section_comment_card_content mobile tablet">
                <img src="/assets/images/profile.jpg" alt="profile">
                <div class="section_comment_card_name ">
                    <h2>Samuel B.</h2>
                    <div class="section_comment_card_stars">
                        <?php for ($i = 1; $i <= 5 /*$numberOfStartFromBdd*/; $i++) { ?>
                            <i class="bi bi-star-fill"></i>
                        <?php } ?>
                    </div>
                </div>
                <div class="section_comment_card_text">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta voluptates
                        aperiam omnis consectetur earum in iure! Sit amet animi sapiente praesentium
                        laudantium ullam nobis optio quibusdam similique fugiat. </p>
                </div>
            </div>
        </div>
        <a href="#" class="button">Ecrire un commentaire</a>
    </div>
</section>

<?php
require_once __DIR__ . "/templates/footer.php";
?>