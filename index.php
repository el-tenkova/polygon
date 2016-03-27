<?php

require_once "PolygonApp.php";
require_once "controller/PolygonController.php";
require_once "model/Polygon.php";
require_once "model/Point.php";

use Polygon\PolygonApp;
use Polygon\Controller\PolygonController;

if (isset($_POST['action'])) {
	error_log("PolygonApp - action");
	$ctrl = new PolygonController();
	$ctrl->$_POST['action']();
}
else {
	(new PolygonApp())->start();
}

?>