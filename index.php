<?php
require ('./Controllers/BaseController.php');
$controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? 'Welcome')) . 'Controller';

$actionName = strtolower($_REQUEST['action']??'index');

require("./Controllers/"."{$controllerName}".".php");

// require("./Controllers/CategoryController.php");

// echo $controllerName;
$controllerObject = new $controllerName;


$controllerObject -> $actionName();