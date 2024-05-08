<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$users = getUsers($pdo);
?>

<div class="m-5">
    <h1 class="mb-3">Les employés</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nom d'utilisateur</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">statut</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $key => $user) {
                if ($users[$key]["role_id"] != 1) {  ?>
                    <tr>
                        <td><?= $user["username"] ?></td>
                        <td><?= $user["last_name"] ?></td>
                        <td><?= $user["first_name"] ?></td>
                        <td><?= $user["label"] ?></td>
                        <td>Modifier|Supprimer</td>
                    </tr>


            <?php }
            }   ?>
        </tbody>
    </table>
</div>
<?php
require_once __DIR__ . "../../templates/footer.php";
?>