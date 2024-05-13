<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$services = getServices($pdo);

// $serviceName = $_POST['name'];
// $serviceDescription = $_POST['description'];

$errors = [];

if (array_key_exists("setService", $_POST)) {
    $serviceName = $_POST['name'];
    $serviceDescription = $_POST['description'];
    if (iconv_strlen($serviceName) > 0 && iconv_strlen($serviceDescription) > 0) { //smaller than TEXT(1000)
        setService($pdo, $serviceName, $serviceDescription);
    } else {
        $errors["addServiceError"] = "Nom ou descritption incorrects";
    }
}

?>

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="my-4">Les services</h1>
        <a href="#" class="button p-2 me-2 h-50 text-decoration-none" data-bs-toggle="modal" data-bs-target="#setServiceModal">Ajouter un service</a>
    </div>
    <div class="table">
        <div class="table_head table_head_services">
            <div class="table_head_text">N°</div>
            <div class="table_head_text">Nom</div>
            <div class="table_head_text">Description</div>
            <div class="table_head_text">Actions</div>
        </div>
        <?php foreach ($services as $key => $service) { ?>

            <div class="table_body table_body_services <?php if ($key % 2 === 0) {
                                                            echo "striped";
                                                        } ?>">
                <div class="table_body_text"><?= $service['service_id'] ?></div>
                <div class="table_body_text"><?= $service['name'] ?></div>
                <div class="table_body_text"><?= $service['description'] ?></div>
                <div>
                    <a href="/admin/pages/service.php?service_id=<?= $service['service_id'] ?>" class="table_head_text actionButton">Modifier</a>
                    <a href="/admin/pages/service.php?service_id=<?= $service['service_id'] ?>" class="table_head_text actionButton deleteButton">Supprimer</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- Modal setService -->
<div class="modal fade" id="setServiceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <h2 class="m-2">Ajouter un service</h2>
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
                    <button class="button" type="submit" name="setService">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . "../../templates/footer.php";
?>