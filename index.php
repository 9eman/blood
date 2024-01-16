<?php
error_reporting(0);
// start session to be able to store and check user login session
session_start();
// include the database to estblish the connection
include("template/db.php");
// here all the logic for website forms
include_once("template/forms.php");
// include the header part to appear on every page
include_once("template/header.php");
// get the page name
$p = htmlspecialchars($_GET['p']);

// defining all the possible routes.
switch ($p) {
    case 'feedback':
        include_once("pages/feedback.php");
    break;
    
    case 'medication':
        include_once("pages/medication.php");
    break;

    case 'physiotherapy':
        include_once("pages/physiotherapy.php");
    break;

    case 'watch':
        include_once("pages/watch.php");
    break;

    case 'hospitals':
        include_once("pages/hospitals.php");
    break;

    case 'blood':
        include_once("pages/blood.php");
    break;

    case 'health':
        include_once("pages/health.php");
    break;

    case 'calculator':
        include_once("pages/calculator.php");
    break;

    case 'login':
        include_once("pages/login.php");
    break;

    case 'thankyou':
        include_once("pages/thankyou.php");
    break;

    case 'admin':
        // check if user is logged in
        if($_SESSION['logged_in']){
            $s = htmlspecialchars($_GET['s']);

            switch($s){
                case 'blood':
                    include_once("admin/blood.php");
                break;

                case 'equipments':
                    include_once("admin/equipments.php");
                break;

                case 'feedback':
                    include_once("admin/feedback.php");
                break;

                case 'physiotherapy':
                    include_once("admin/physiotherapy.php");
                break;

                case 'users':
                    include_once("admin/users.php");
                break;

                case 'new-user':
                    include_once("admin/new-user.php");
                break;

                case 'new-physiotherapy':
                    include_once("admin/new-physiotherapy.php");
                break;

                case 'logout':
                    include_once("admin/logout.php");
                break;

                default:
                    include_once("admin/home.php");
                break;
            }
        } else {
            include_once("pages/login.php");
        }
    break;

    default:
        include_once("pages/home.php");
    break;
}

// include the footer and append it to every page
include_once("template/footer.php");


?>