<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$animals = getAnimals($pdo);
?>

<div class="container">
    <h1 class="my-4">Les animaux</h1>
    <div class="table">
        <div class="table_head table_head_animals">
            <div class="table_head_text">N°</div>
            <div class="table_head_text">Nom</div>
            <div class="table_head_text">Condition</div>
            <div class="table_head_text">Opinion du Vetérinaire</div>
            <div class="table_head_text">Habitat</div>
            <div class="table_head_text">Race</div>
            <div class="table_head_text">Actions</div>
        </div>
        <?php foreach($animals as $key => $animal){ ?>
            
            <div class="table_body table_body_animals <?php if ($key % 2 === 0) {echo "striped";} ?>">
                <div class="table_body_text"><?= $animal['animal_id'] ?></div>
                <div class="table_body_text"><?= $animal['name'] ?></div>
                <div class="table_body_text"><?= $animal['animal_condition'] ?></div>
                <div class="table_body_text"><?= $animal['veterinary_opinion_id'] ?></div>
                <div class="table_body_text"><?= $animal['habitat_id'] ?></div>
                <div class="table_body_text"><?= $animal['race_id'] ?></div>
                <a href="#" class="table_head_text actionButton">Supprimer</a>
            </div>


        <?php } ?>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>

<?php
require_once __DIR__ . "../../templates/footer.php";
?>