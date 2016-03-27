<?php

namespace Polygon\Model;

class Point
{
	protected $x;
	protected $y;
	function __construct($pX, $pY)	
	{
		$this->x = $pX;
		$this->y = $pY;
	}
	
	public function getX()
	{
		return $this->x;
	}

	public function getY()
	{
		return $this->y;
	}

	public function distance($ppt)
	{
		return (sqrt(($ppt->getX() - $this->x)*($ppt->getX() - $this->x) + ($ppt->getY() - $this->y)*($ppt->getY() - $this->y)));
	}
}

?>