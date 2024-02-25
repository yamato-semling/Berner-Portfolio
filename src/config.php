<?php
error_reporting(E_ALL);

define("SSL", false);

$absoluteLink = ((SSL) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
define("DIR_ROOT", dirname(__FILE__) . "/");
$documentRoot = (substr(str_replace("\\", "/", $_SERVER['DOCUMENT_ROOT']), -1) == "/") ? substr($_SERVER['DOCUMENT_ROOT'], 0, strlen($_SERVER['DOCUMENT_ROOT']) - 1) : $_SERVER['DOCUMENT_ROOT'];
$urlRoot = ((SSL) ? 'https' : 'http') . "://" .
    ((array_key_exists('SERVER_NAME', $_SERVER)) ? $_SERVER['SERVER_NAME'] : "localhost") .
    str_replace(str_replace("\\", "/", $documentRoot), "", str_replace("\\", "/", DIR_ROOT));

define("URL_ROOT", "http://localhost:8080/");
define("DIR_IMG", URL_ROOT . 'assets/img/');
define("DIR_HAIKEI", URL_ROOT . 'assets/img/haikei/');
define("DIR_ICON", URL_ROOT . 'assets/img/icon/');
define("DIR_LOGOS", URL_ROOT . 'assets/img/logos/');
define("DIR_LOGOX", URL_ROOT . 'assets/img/logo-ex/');
define("DIR_PORTRAIT", URL_ROOT . 'assets/img/portrait/');
define("DIR_POINTS", URL_ROOT . 'assets/img/points/');
define("DIR_POSTER", URL_ROOT . 'assets/img/poster/');
define("DIR_TESTEMONIAL", URL_ROOT . 'assets/img/testemonials/');
define("HEADER", URL_ROOT . "header.php");

function load_css(){
    global $absoluteLink;
    echo '<link rel="stylesheet" href="'. $absoluteLink .'style.css">';
}

function get($variable){
    echo $variable;
}