<?php
require_once __DIR__ . "../../templates/header.php";
require_once __DIR__ . "../../lib/functions.php";

$errors = [];

if (array_key_exists("submitButton", $_POST)) {
    $usernameForm = $_POST["username"];
    $user = getUser($pdo, $usernameForm);
    if ($user) {
        if ($user["role_id"] === 1) {
            header('Location: /admin/index.php'); //proteger les pages aussi
        } else if ($user["role_id"] === 2) {
            header('Location: /veterinary/index.php'); //proteger les pages aussi
        } else if ($user["role_id"] === 3) {
            header('Location: /employee/index.php'); //proteger les pages aussi
        } else {
            header('Location: /index.php');
        }
    } else {
        $errors["userLoginError"] = "Identifiant ou mot de passe incorrects!";
    }
}


// if(usernameExist){
// session_start()

// if(admin){
//     ...
// }
// }else{
//     header('Location: ')
// }

?>
<section class="section_bigTitle">
    <img src="/assets/images/bigTitleHomeElephant.jpg" alt="Our Zoo">
    <div class="section_bigTitle_content">
        <h1>Page de connection</h1>
    </div>
</section>

<section class="section_form_content">
    <h2>Connectez vous!</h2>
    <form class="section_form" method="POST">
        <?php if (array_key_exists("userLoginError", $errors)) { ?>
            <div class="section_form_error">
                <p><?= $errors["userLoginError"] ?></p>
            </div>
        <?php } ?>
        <div class="section_form_input">
            <label for="username">Adresse email</label>
            <input type="text" id="username" name="username" />
        </div>
        <div class="section_form_input">
            <label for="password">Mot de passe</label>
            <input type="text" id="password" name="password" />
        </div>
        <div class="section_form_button">
            <button class="button" type="submit" name="submitButton">Connexion</button>
        </div>
    </form>
</section>

<?php
require_once __DIR__ . "../../templates/footer.php";
?>