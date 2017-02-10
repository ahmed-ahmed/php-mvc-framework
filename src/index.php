<?php 
require('config.php');
require('classes/Bootstrap.php');
require('classes/BaseController.php');
require('classes/Model.php');
require('controllers/home.php');
require ('models/HomeModel.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller) {
    $controller->executeAction();
}

 ?>