<?php
error_reporting(E_ALL);

define("SSL", false);

$absoluteLink = ((SSL) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
define("DIR_ROOT", dirname(__FILE__) . "/");
$documentRoot = (substr(str_replace("\\", "/", $_SERVER['DOCUMENT_ROOT']), -1) == "/") ? substr($_SERVER['DOCUMENT_ROOT'], 0, strlen($_SERVER['DOCUMENT_ROOT']) - 1) : $_SERVER['DOCUMENT_ROOT'];
$urlRoot = ((SSL) ? 'https' : 'http') . "://" .
    ((array_key_exists('SERVER_NAME', $_SERVER)) ? $_SERVER['SERVER_NAME'] : "localhost") .
    str_replace(str_replace("\\", "/", $documentRoot), "", str_replace("\\", "/", DIR_ROOT));

define("URL_ROOT", $urlRoot . ((substr($urlRoot, -1) != "/") ? "/" : ""));
define("DIR_IMG", 'localhost:8080/assets/img/');
define("DIR_HAIKEI", 'localhost:8080/img/haikei/');
define("DIR_ICON", 'localhost:8080/img/icon/');
define("DIR_LOGOS", 'localhost:8080/assets/img/logos/');
define("DIR_LOGOX", 'localhost:8080/assets/img/logo-ex/');
define("DIR_PORTRAIT", 'localhost:8080/assets/img/portrait/');
define("DIR_POINTS", 'localhost:8080/assets/img/points/');
define("DIR_POSTER", 'localhost:8080/assets/img/poster/');
define("DIR_TESTEMONIAL", 'localhost:8080/assets/img/testemonials/');
define("HEADER", URL_ROOT . "header.php");

function load_css(){
    global $absoluteLink;
    echo '<link rel="stylesheet" href="'. $absoluteLink .'style.css">';
}

function get($variable){
    echo $variable;
}