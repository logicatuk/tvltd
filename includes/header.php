<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

session_start();
include_once "includes/functions.php";
$checkLicense = "";
$bar = "/";
$XCStreamHostUrl = isset($XCStreamHostUrl) ? $XCStreamHostUrl : "";
$XClicenseIsval = isset($XClicenseIsval) ? $XClicenseIsval : "";
$XClocalKey = isset($XClocalKey) ? $XClocalKey : "";
$SessioStoredUsername = !empty($_SESSION["webTvplayer"]["username"]) ? $_SESSION["webTvplayer"]["username"] : "";
if (substr($XCStreamHostUrl, -1) == "/") {
    $bar = "";
}
if ($configFileCheck["result"] == "success") {
    if ($configFileCheck["permission"] == "0777" || $configFileCheck["permission"] == "0755") {
        require "configuration.php";
    } else {
        require "configuration.php";
    }
} else {
    if (!file_exists("configuration.php")) {
        $my_file = "configuration.php";
        $handle = fopen($my_file, "w") or exit("Cannot open file:  " . $my_file);
    }
}
if (!isset($_SESSION["webTvplayer"]) && empty($_SESSION["webTvplayer"]) && $activePage !== "index") {
    echo "<script>window.location.href = 'index.php';</script>";
    exit;
}
if (isset($_SESSION["webTvplayer"])) {
    $username = $_SESSION["webTvplayer"]["username"];
    $password = $_SESSION["webTvplayer"]["password"];
    $hostURL = $XCStreamHostUrl;
}
$ShiftedTimeEPG = 0;
$headerparentcondition = "";
$GlobalTimeFormat = "12";
if (isset($_COOKIE["settings_array"])) {
    $SettingArray = json_decode($_COOKIE["settings_array"]);
    if (isset($SettingArray->{$SessioStoredUsername}) && !empty($SettingArray->{$SessioStoredUsername})) {
        $ShiftedTimeEPG = $SettingArray->{$SessioStoredUsername}->epgtimeshift;
        $GlobalTimeFormat = $SettingArray->{$SessioStoredUsername}->timeformat;
        $headerparentcondition = $SettingArray->{$SessioStoredUsername}->parentpassword;
    }
}
echo "<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n<meta charset=\"utf-8\">\r\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n<title>";
echo isset($XCsitetitleval) ? $XCsitetitleval : "";
echo "</title>\r\n\r\n<!-- Bootstrap -->\r\n<style>\r\n:root {\r\n  --primary-color: #fff;\r\n  --dark-gray: #222;\r\n  --almost-black: #111;\r\n  --semi-white: #ccc;\r\n  --blue: #3498db;\r\n  --red: #e74c3c;\r\n  \r\n  --standard: 1.25rem;\r\n  --big: 2rem;\r\n  --small: 0.7rem;\r\n  \r\n  --serif: Georgia, serif;\r\n}\r\n</style>\r\n<link href=\"css/bootstrap.css\" rel=\"stylesheet\">\r\n<link href=\"css/style.css\" rel=\"stylesheet\">\r\n<link href=\"css/owl.carousel.css\" rel=\"stylesheet\">\r\n<link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">\r\n<link href=\"css/scrollbar.css\" rel=\"stylesheet\">\r\n\r\n<script src=\"js/jquery-1.11.3.min.js\"></script> \r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"css/rippler.css\" />\r\n\r\n<!-- Favicon -->\r\n<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"https://www.iptvltd.com/wp-content/uploads/2023/02/fin.png\">\r\n\r\n<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->\r\n<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->\r\n<!--[if lt IE 9]>\r\n      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>\r\n      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>\r\n    <![endif]-->\r\n    <style>\r\n    #cbp-spmenu-s1\r\n    {\r\n      padding-bottom: 80px;\r\n    }\r\n  </style>\r\n</head>\r\n<body>\r\n\r\n\t<div class=\"body-content\">\r\n  \t<div class=\"overlay\"></div>\r\n    \r\n  \t";

echo "<script src=\"//code.tidio.co/9v7xqx9fgnxs6mqqra8d42wuthdisolh.js\" async=\"\"></script>\n";

?>