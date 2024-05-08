<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../../lib/pdo.php";
require_once __DIR__ . "../../lib/functions.php";

$services = getServices($pdo);
?>

<div class="m-5">
    <h1 class="my-4">Les services</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom du service</th>
                <th scope="col">description</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody class="aaa">
            <?php
            foreach ($services as $key => $service) { ?>
                <tr>
                    <td><?= $service["service_id"] ?></td>
                    <td><?= $service["name"] ?></td>
                    <td><?= $service["description"] ?></td>
                    <td>Modifier|Supprimer</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
require_once __DIR__ . "../../templates/footer.php";
?>