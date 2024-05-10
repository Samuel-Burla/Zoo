<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$services = getServices($pdo);
?>

<div class="container">
    <h1 class="my-4">Les services</h1>
    <div class="table">
        <div class="table_head table_head_services">
            <div class="table_head_text">N°</div>
            <div class="table_head_text">Nom</div>
            <div class="table_head_text">Description</div>
            <div class="table_head_text">Actions</div>
        </div>
        <?php foreach($services as $key => $service){ ?>
            
            <div class="table_body table_body_services <?php if ($key % 2 === 0) {echo "striped";} ?>">
                <div class="table_body_text"><?= $service['service_id'] ?></div>
                <div class="table_body_text"><?= $service['name'] ?></div>
                <div class="table_body_text"><?= $service['description'] ?></div>
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