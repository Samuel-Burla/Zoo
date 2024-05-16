<?php
require_once __DIR__ . "../../templates/header.php";
$animals = getAnimals($pdo);
$habitats = getHabitats($pdo);

$errors = [];
$messages = [];



if (array_key_exists("addAnimal", $_POST)) {
    $animal_name = $_POST['animal_name'];
    $habitat_id = $_POST['habitat_id'];
    $class_id = $_POST['class_id'];
    if (iconv_strlen($animal_name) > 0 && iconv_strlen($animal_name) <= 255 && $habitat_id > 0 && $habitat_id <= count($habitats) && $class_id > 0 && $class_id <= 5) {
        addAnimal($pdo, $animal_name, $habitat_id, $class_id);
        $messages['addAnimalMessage'] = "Ajout de l'animal réussi !";
    } else {
        $errors["addAnimalError"] = "Echec lors de l'ajout de l'animal !";
    }
}
?>

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="my-4">Les animaux</h1>
    </div>
    <div class="table">
        <div class="table_head table_head_animals">
            <div class="table_head_text">N°</div>
            <div class="table_head_text">Nom</div>
            <div class="table_head_text">Condition</div>
            <div class="table_head_text">Habitat</div>
            <div class="table_head_text">Classe</div>
            <div class="table_head_text">Nourriture</div>
            <div class="table_head_text">Grammage</div>
            <div class="table_head_text">Actions</div>
        </div>
        <?php foreach ($animals as $key => $animal) { ?>

            <div class="table_body table_body_animals <?php if ($key % 2 === 0) {
                                                            echo "striped";
                                                        } ?>">
                <div class="table_body_text"><?= $animal['animal_id'] ?></div>
                <div class="table_body_text"><?= $animal['animal_name'] ?></div>
                <div class="table_body_text"><?= $animal['animal_condition'] ?></div>
                <div class="table_body_text"><?= $animal['habitat_name'] ?></div>
                <div class="table_body_text"><?= $animal['class_label'] ?></div>
                <div class="table_body_text"><?= $animal['food'] ?></div>
                <div class="table_body_text"><?= $animal['food_weight'] ?></div>
                <div>
                    <a href="/veterinarian/pages/animal.php?animal_id=<?= $animal['animal_id'] ?>" class="table_head_text actionButton">Ecrire un avis</a>
                    <a href="/veterinarian/pages/animalOpinion.php?animal_id=<?= $animal['animal_id'] ?>" class="table_head_text actionButton">Voir les avis</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
require_once __DIR__ . "../../templates/footer.php";
?>