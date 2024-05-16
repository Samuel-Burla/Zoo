<?php
require_once __DIR__ . "../../templates/header.php";

$animal_id = $_GET["id"];
$animal = getAnimalsByHabitat($pdo, $animal_id);
?>

<section class="section_bigTitle">
    <img src="/assets/images/bigTitleHomeElephant.jpg" alt="Our Zoo">
    <div class="section_bigTitle_content">
        <h1><?= $animal["animal_name"] ?></h1>
    </div>
</section>


<section class="section_description">
    <div class="section_content_textImage">
        <h2>Notre <?= $animal["animal_name"] ?> </h2>
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
        <h2>Avis du vétérinaire</h2>
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


<?php
require_once __DIR__ . "../../templates/footer.php";
?>