<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$service_id = $_GET['service_id'];
$service = getService($pdo, $service_id);

// $serviceName = $_POST['name'];
// $serviceDescription = $_POST['description'];

$errors = [];

if (array_key_exists("updateService", $_POST)) {
    $serviceName = $_POST['name'];
    $serviceDescription = $_POST['description'];
    updateService($pdo, $serviceName, $serviceDescription, $service_id);
} else {
    $errors["updateServiceError"] = "Modification échouée !";
}

if (array_key_exists("deleteService", $_POST)) {
    deleteService($pdo, $service_id);
} else {
    $errors["deleteServiceError"] = "Suppression échouée !";
}

?>

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="my-4">Les services</h1>
    </div>
    <form class="section_form m-2" method="POST">
        <div class="section_form_input my-2">
            <label for="name">Nom du service</label>
            <input type="text" class="form-control" id="name" name="name" />
        </div>
        <div class="section_form_input">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" />
        </div>
        <div class="section_form_button mt-2">
            <button class="button" type="submit" name="updateService">Modifier</button>
            <button class="button deleteButton" type="submit" name="deleteService">Supprimer</button>
        </div>
    </form>
</div>

<?php
require_once __DIR__ . "../../templates/footer.php";
?>