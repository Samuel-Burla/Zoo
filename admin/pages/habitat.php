<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$habitat_id = $_GET['habitat_id'];
$habitat = getHabitat($pdo, $habitat_id);

$errors = [];

if (array_key_exists("updateHabitat", $_POST)) {
    $habitat_name = $_POST['habitat_name'];
    $description = $_POST['description'];
    
    updateHabitat($pdo, $habitat_name, $description, $habitat_id);
} else {
    $errors["updateHabitatError"] = "Modification échouée !";
}

if (array_key_exists("deleteHabitat", $_POST)) {
    deleteHabitat($pdo, $habitat_id);
} else {
    $errors["deleteHabitatError"] = "Suppression échouée !";
}

?>

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="my-4"><?=$habitat['habitat_name']?></h1>
    </div>
    <form class="section_form m-2" method="POST">
        <div class="section_form_input my-2">
            <label for="habitat_name">Nom de l'habitat</label>
            <input type="text" class="form-control" id="habitat_name" name="habitat_name" value="<?=$habitat['habitat_name']?>" />
        </div>
        <div class="section_form_input">
            <label for="description">Decription</label>
            <input type="text" class="form-control" id="description" name="description" value="<?=$habitat['description']?>" />
        </div>
        <div class="section_form_button mt-2">
            <button class="button" type="submit" name="updateHabitat">Modifier l'habitat</button>
            <button class="button deleteButton" type="submit" name="deleteHabitat">Supprimer l'habitat</button>
        </div>
    </form>
</div>

<?php
require_once __DIR__ . "../../templates/footer.php";
?>