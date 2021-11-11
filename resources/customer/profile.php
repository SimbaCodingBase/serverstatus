<?php
$currPage = 'back_Mein Profil';
include BASE_PATH.'app/controller/PageController.php';

$firstname = $user->getDataById($userid,'firstname');
$lastname = $user->getDataById($userid,'lastname');
$street = $user->getDataById($userid,'street');
$number = $user->getDataById($userid,'number');
$postcode = $user->getDataById($userid,'postcode');
$city = $user->getDataById($userid,'city');
$country = $user->getDataById($userid,'country');

if(isset($_POST['changeProfile'])){

    $SQL = $db->prepare("UPDATE `users` SET `firstname` = :firstname, `lastname` = :lastname, `street` = :street, `number` = :number, `postcode` = :postcode, `city` = :city, `country` = :country WHERE `id` = :id");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $street = $_POST['street'];
    $number = $_POST['number'];
    $postcode = $_POST['postcode'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $SQL->execute(array(":firstname" => $firstname, ":lastname" => $lastname, ":street" => $street, ":number" => $number, ":postcode" => $postcode, ":city" => $city, ":country" => $country, ":id" => $userid));

    echo sendSuccess('Daten wurden gespeichert');
}

if(isset($_POST['changePassword'])) {
    $error = null;

    if (empty($_POST['current_password'])) {
        $error = 'Bitte gebe dein aktuelles Passwort an';
    }
    if (empty($_POST['new_password'])) {
        $error = 'Bitte gebe dein neues Passwort an';
    }
    if (empty($_POST['new_password_repeat'])) {
        $error = 'Bitte wiederhole dein neues Passwort';
    }

    if (!$user->verifyLogin($mail, $_POST['current_password'])) {
        $error = 'Dein aktuelles Passwort stimmt nicht';
    }

    if ($_POST['new_password'] != $_POST['new_password_repeat']) {
        $error = 'Die neuen Passwörter müssen übereinstimmen';
    }

    if (empty($error)) {

        $cost = 10;
        $hash = password_hash($_POST['new_password'], PASSWORD_BCRYPT, ['cost' => $cost]);

        $SQL = $db->prepare("UPDATE `users` SET `password` = :password WHERE `id` = :id");
        $SQL->execute(array(":password" => $hash, ":id" => $userid));

        echo sendSuccess('Dein Passwort wurde geändert');

    } else {
        echo sendError($error);
    }
}

?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Passwort ändern</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">

                    <label>Aktuelles Passwort</label>
                    <input name="current_password" type="password" class="form-control">

                    <br>

                    <label>Neues Passwort</label>
                    <input name="new_password" type="password" class="form-control">

                    <br>

                    <label>Neues Passwort wiederholen</label>
                    <input name="new_password_repeat" type="password" class="form-control">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Abbrechen</button>
                    <button type="submit" name="changePassword" class="btn btn-success">Passwort ändern</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <div class="card shadow mb-5">
            <div class="card-header">
                <h3>Persönliche Angaben</h3>
            </div>
            <div class="card-body">
                <form method="post">

                    <div class="row">
                        <div class="col-md-6">
                            <label>Vorname</label>
                            <input name="firstname" class="form-control" value="<?= $firstname; ?>">
                        </div>

                        <div class="col-md-6">
                            <label>Nachname</label>
                            <input name="lastname" class="form-control" value="<?= $lastname; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Straße</label>
                            <input name="street" class="form-control" value="<?= $street; ?>">
                        </div>

                        <div class="col-md-2">
                            <label>Haus Nr.</label>
                            <input name="number" class="form-control" value="<?= $number; ?>">
                        </div>

                        <div class="col-md-5">
                            <label>Postleitzahl</label>
                            <input name="postcode" class="form-control" value="<?= $postcode; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Stadt</label>
                            <input name="city" class="form-control" value="<?= $city; ?>">
                        </div>

                        <div class="col-md-6">
                            <label>Land</label>
                            <input name="country" class="form-control" value="<?= $country; ?>">
                        </div>
                    </div>

                    <br>
                    <button type="submit" name="changeProfile" class="btn btn-primary">Speichern</button>
                    &nbsp;
                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning">Passwort ändern</button>
                </form>
            </div>
        </div>
    </div>

</div>
