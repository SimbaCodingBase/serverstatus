<?php

/*
 * page manager
 */
$resources = BASE_PATH.'resources/';
$sites = $resources.'sites/';
$auth = $resources.'auth/';
$customer = $resources.'customer/';
$team = $resources.'team/';
$services = $resources.'services/';
$page = $helper->protect($_GET['page']);

if(isset($_GET['page'])) {
    switch ($page) {

        default: include($sites . "404.php");  break;

        //auth
        case "auth_login": include($auth . "login.php");  break;
        case "auth_register": include($auth . "register.php");  break;
        case "auth_logout": setcookie('session_token', null, time(),'/'); header('Location: '.$helper->url().'login'); break;


        //debug
        case "DEBUG": include(BASE_PATH . "DEBUG/index.php");  break;

        //
        case "index": include($sites."index.php");  break;
        case "dashboard": include($customer."dashboard.php");  break;
        case "pricing": include($sites."pricing.php");  break;
        case "service": include($sites."service.php");  break;

        case "issue": include($services."issue.php");  break;
        case "issues": include($services."issues.php");  break;

        case "wartung": include($services."wartung.php");  break;
        case "wartungen": include($services."wartungen.php");  break;

        //team
        case "team_services": include($team."admin/services.php");  break;
        case "team_servicemanager": include($team."admin/servicemanager.php");  break;
        case "team_createservice": include($team."admin/createservice.php");  break;

        case "team_createissue": include($team."admin/createissue.php");  break;
        case "team_editissue": include($team."admin/editissue.php");  break;

        case "team_createteamler": include($team."admin/createteamler.php");  break;
        case "team_editteamler": include($team."admin/editteamler.php");  break;
        case "team_teamler": include($team."admin/teamler.php");  break;

        case "team_createwartung": include($team."admin/createwartung.php");  break;
        case "team_editwartung": include($team."admin/editwartung.php");  break;
        case "team_settings": include($team."admin/settings.php");  break;

    }

    if(strpos($currPage,'system_') !== false) {} else {
        include BASE_PATH.'/resources/additional/footer.php';
    }

} else {
    die('please enable .htaccess on your server');
}