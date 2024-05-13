<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$users = getUsers($pdo);
?>

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="my-4">Les employés</h1>
        <a href="#" class="button p-2 me-2 h-50 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un utilisateur </a>
    </div>
    <div class="table">
        <div class="table_head table_head_employee">
            <div class="table_head_text">Email</div>
            <div class="table_head_text">Nom</div>
            <div class="table_head_text">Prénom</div>
            <div class="table_head_text">Statut</div>
            <div class="table_head_text">Actions</div>
        </div>
        <?php foreach ($users as $key => $user) { ?>
            <?php if ($user["role_label"] != "admin") { ?>
                <div class="table_body table_head_employee <?php if ($key % 2 === 0) {
                                                                echo "striped";
                                                            } ?>">
                    <div class="table_body_text"><?= $user['username'] ?></div>
                    <div class="table_body_text"><?= $user['last_name'] ?></div>
                    <div class="table_body_text"><?= $user['first_name'] ?></div>
                    <div class="table_body_text"><?= $user['role_label'] ?></div>
                    <a href="#" class="table_head_text actionButton">Supprimer</a>
                </div>
        <?php }
        } ?>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <button class="button" type="submit" name="addService">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . "../../templates/footer.php";
?>