<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/functions.php";

$habitatId = $_GET["id"];
$habitat = getHabitat($pdo, $habitatId);
var_dump($habitat);

?>
<!-- on click on one image it will be a link -->

<!-- button in evry cards of animals -->
<section class="section_bigTitle">
    <img src="/assets/images/bigTitleHomeElephant.jpg" alt="Our Zoo">
    <div class="section_bigTitle_content">
        <h1><?= $habitat["name"] ?></h1>
    </div>
</section>


<section class="section_description">
    <div class="section_content_textImage">
        <h2>A la découverte de ce milieu</h2>
        <p><?= $habitat["description"] ?></p>
    </div>
    <img src="/assets/images/flamingo.jpg" alt="flamingo"><!-- image -->
</section>

<section class="section_animals">
    <h2>Les differents animaux</h2>
    <div class="section_animals_card">
        <div class="section_animals_cards">
            <div class="section_animals_card_content">
                <img src="/assets/images/profile.jpg" alt="profile">
                <div class="section_animals_card_name ">
                    <h2>crocodile</h2>
                </div>
                <div class="section_animals_card_text">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta voluptates
                        aperiam omnis consectetur earum in iure! Sit amet animi sapiente praesentium
                        laudantium ullam nobis optio quibusdam similique fugiat. </p>
                </div>
                <a class="button animal_card_button" href="#">Voir l'animal</a>
            </div>
            <div class="section_animals_card_content">
                <img src="/assets/images/profile.jpg" alt="profile">
                <div class="section_animals_card_name ">
                    <h2>crocodile</h2>
                </div>
                <div class="section_animals_card_text">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta voluptates
                        aperiam omnis consectetur earum in iure! Sit amet animi sapiente praesentium
                        laudantium ullam nobis optio quibusdam similique fugiat. </p>
                </div>
                <a class="button animal_card_button" href="#">Voir l'animal</a>
            </div>
            <div class="section_animals_card_content">
                <img src="/assets/images/profile.jpg" alt="profile">
                <div class="section_animals_card_name ">
                    <h2>crocodile</h2>
                </div>
                <div class="section_animals_card_text">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta voluptates
                        aperiam omnis consectetur earum in iure! Sit amet animi sapiente praesentium
                        laudantium ullam nobis optio quibusdam similique fugiat. </p>
                </div>
                <a class="button animal_card_button" href="#">Voir l'animal</a>
            </div>
            
        </div>
    </div>
</section>


<?php
require_once __DIR__."../../templates/footer.php";?>