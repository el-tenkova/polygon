<?php

namespace Polygon;

use Polygon\Controller\PolygonController;

class PolygonApp {
  
  	public $points;
    public function __construct()
    {
    	error_log("constructor of PolygonApp");
    	
    }
    
    public function start()
    {
    	error_log("start of PolygonApp");
		$controller = new PolygonController();
		$this->points = $controller->action_index()['points'];
		include dirname(__DIR__)."/polygon/view/layout.phtml";
    }
	
};

?>