<?php 

// Общие служебные константы
// echo $_SERVER['DOCUMENT_ROOT'];
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
// define("ROOT", $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']);
// define("ROOT", "/opt/lampp/htdocs/kamil");
// echo ROOT;

define("MODEL_PATH", ROOT. "/models/");
define("VIEW_PATH", ROOT. "/views/");
define("CONTROLLER_PATH", ROOT. "/controllers/");


require_once("db.php");
require_once("route.php");

require_once MODEL_PATH. 'Model.php';
require_once VIEW_PATH. 'View.php';
require_once CONTROLLER_PATH. 'Controller.php';

Routing::buildRoute();