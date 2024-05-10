<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$users = getUsers($pdo);
?>

<div class="container">
    <h1 class="my-4">Les employés</h1>
    <div class="table">
        <div class="table_head table_head_employee">
            <div class="table_head_text">Email</div>
            <div class="table_head_text">Nom</div>
            <div class="table_head_text">Prénom</div>
            <div class="table_head_text">Statut</div>
            <div class="table_head_text">Actions</div>
        </div>
        <?php foreach($users as $key => $user){ ?>
            
            <div class="table_body table_head_employee <?php if ($key % 2 === 0) {echo "striped";} ?>">
                <div class="table_body_text"><?= $user['username'] ?></div>
                <div class="table_body_text"><?= $user['last_name'] ?></div>
                <div class="table_body_text"><?= $user['first_name'] ?></div>
                <div class="table_body_text"><?= $user['label'] ?></div>
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