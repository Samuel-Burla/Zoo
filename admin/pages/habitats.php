<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";
?>


<div class="m-5">
    <h1 class="my-4">Les habitats</h1>
    <div class="table">
        <div class="table_head">
            <div class="table_head_text">N°</div>
            <div class="table_head_text">Nom</div>
            <div class="table_head_text">Description</div>
            <div class="table_head_text">Commentaires</div>
        </div>
        <div class="table_body">
            <div class="table_body_text">1</div>
            <div class="table_body_text">Desert</div>
            <div class="table_body_text">lorem isposd</div>
            <div class="table_body_text">comment</div>
        </div>
    </div>
</div>
<?php
require_once __DIR__ . "../../templates/footer.php";
?>