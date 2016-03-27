<?php

namespace Polygon\Model;

use Polygon\Model\Point;

class Polygon
{
	protected $points = array();

	function __construct()
	{
		// initialize polygon
		$this->points[1] = new Point(70, 80);
		$this->points[2] = new Point(150, 40);
		$this->points[3] = new Point(230, 70);
		$this->points[4] = new Point(300, 30);
		$this->points[5] = new Point(320, 200);
		$this->points[6] = new Point(220, 300);
		$this->points[7] = new Point(70, 300);
		
	}

	public function getPoints()
	{
		$res = array();
		foreach ($this->points as $key => $point) {
			$res[] = json_encode(array('id' => strval($key), 'x' => $point->getX(), 'y' => $point->getY()));
		}
		//print_r(json_encode($res));
		return ('['.implode(',', $res).']');
	}

	public function checkPt($x, $y)
	{
		$pt = new Point($x, $y);
		foreach ($this->points as $index => $point) {
			if ($pt->distance($point) < 10)
				return array($point->getX(), $point->getY());
		}
		return array();
	}
	
	public function distance($pt1, $pt2)
	{
		return $pt1->distance($pt2);
	}

}

?>