<?php

namespace Polygon\Controller;

use Polygon\Model\Polygon;
use Polygon\Model\Point;

class PolygonController
{
	public $model;
	
	function __construct()
	{
		$this->model = new Polygon();
	}
	
	function action_index()
	{
		error_log("PolygonController: action_index");
		return array("points" => $this->model->getPoints(), "perimeter" => $this->model->getPerimeter());
	}
	
	function action_check()
	{
		error_log("PolygonController: action_check");
		$res = array();
		if (isset($_POST['x']) && isset($_POST['y'])) {
			$ret = $this->model->checkPt($_POST['x'], $_POST['y']);
			if (count($ret) > 0) {
				$res = json_encode(array('in' => 1, 'x' => strval($ret[0]), 'y' => strval($ret[1])));
			}
			else {
				$res = json_encode(array('out' => 1));
			}
		}
		echo ('['.$res.']');
	}
	
	function action_calculate()
	{
		error_log("PolygonController: action_calculate");
		$res = array();
		if (isset($_POST['x1']) && isset($_POST['y1']) && isset($_POST['x2']) && isset($_POST['y1'])) {
			$pt1 = new Point($_POST['x1'], $_POST['y1']);
			$pt2 = new Point($_POST['x2'], $_POST['y2']);
			$d = $this->model->distance($pt1, $pt2);
			error_log(sprintf("distance = %d", $d));
			$res = json_encode(array('distance' => $d));
		}
		echo ('['.$res.']');
	}
	
}	

?>