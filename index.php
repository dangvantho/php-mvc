<?php
include_once "./core/Database.php";
include_once "./models/BaseModel.php";
include_once "./controllers/BaseController.php";
$controllerName = ucfirst((strtolower($_REQUEST['controller'] ?? "Product")) . "Controller");
$actionName = $_REQUEST["action"] ?? "index";
include_once "./controllers/${controllerName}.php";
$controller = new $controllerName;
$controller->$actionName();