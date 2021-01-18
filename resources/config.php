<?php

ob_start(); //Create buffer

session_start();
//session_destroy();

//Define directory separator, DS is going to be \ or / depending on OS
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

//__DIR__ returns directory of the file
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

//Database information
defined("DB_HOST") ? null : define("DB_HOST","localhost");
defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS","");
defined("DB_NAME") ? null : define("DB_NAME","ecom_db");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); //Conect to sqlite
//mysqli_connect($db_server_name, $db_user_name, $db_password,$db_name);

require_once("functions.php"); //require_once keyword is used to embed PHP code from another file.
require_once("cart.php");
?>
