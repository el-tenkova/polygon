<?php

namespace Polygon;

use Polygon\Controller\PolygonController;

class PolygonApp {
  
  	public $points;
  	public $perimeter;
  	
    public function __construct()
    {
    	error_log("constructor of PolygonApp");
    	
    }
    
    public function start()
    {
    	error_log("start of PolygonApp");
		$controller = new PolygonController();
		$data = $controller->action_index();
		$this->points = $data['points'];
		$this->perimeter = $data['perimeter'];
		error_log(sprintf("perimeter = %d", $this->perimeter));
		include dirname(__DIR__)."/polygon/view/layout.phtml";
    }
	
};

?>