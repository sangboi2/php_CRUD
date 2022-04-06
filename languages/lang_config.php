<?php
session_start();
//Check whether the language is set in session or not
if (!isset($_SESSION['lang'])) {
    //If Language is not set in session then set default language as Danish
    $_SESSION['lang'] = 'den';
} else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == 'den') {
        $_SESSION['lang'] = 'den';
    } else if ($_GET['lang'] == 'en') {
        $_SESSION['lang'] = 'en';
    }
}
require_once $_SESSION['lang'] . '.php';
