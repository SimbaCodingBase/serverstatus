<?php
if(isset($_POST['register'])){
    $error = null;

    if(empty($_POST['username'])){
        $error = 'Bitte gib einen Benutzernamen an';
    }

    if(preg_match("/^[a-zA-Z0-9]+$/", $_POST['username']) == 0){
        $error = 'Der Benutzername enthält unerlaubte Zeichen';
    }

    if(empty($_POST['email'])){
        $error = 'Bitte gebe eine E-Mail an';
    }

    if(empty($_POST['password'])){
        $error = 'Bitte gib ein Passwort an';
    }

    if(empty($_POST['password_repeat'])){
        $error = 'Bitte wiederhole dein Passwort an';
    }

    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) == false){
        $error = 'Bitte gebe eine gültige E-Mail an';
    }

    if($_POST['password'] != $_POST['password_repeat']){
        $error = 'Die Passwörter stimmen nicht überein';
    }

    if($user->exists($_POST['email'])){
        $error = 'Ein Benutzer mit dieser E-Mail existiert bereits';
    }

    if($user->exists($_POST['username'])){
        $error = 'Ein Benutzer mit diesem Benutzernamen existiert bereits';
    }

    if($helper->getSetting('register') == 0){
        $error = 'Das Accounterstellen ist derzeit deaktiviert';
    }

    if(empty($error)){

        $verify_code = $helper->generateRandomString(12);
        $verify_url = $helper->url().'activate/'.$verify_code;

        $username = $helper->xssFix($_POST['username']);
    }

    if(empty($error)){
        $user_id = $user->create($helper->xssFix($_POST['username']), $helper->xssFix($_POST['email']), $_POST['password']);

        $SQL = $db->prepare("UPDATE `users` SET `verify_code` = :verify_code WHERE `id` = :user_id");
        $SQL->execute(array(":verify_code" => $verify_code, ":user_id" => $user_id));

        header('refresh:0;url='.$helper->url().'team/teamler');

        echo sendSuccess('Bitte bestätige nun deine E-Mail!');
    } else {
        echo sendError($error);
    }
}
