<?php
class Rectangle
{
	protected $x;
	protected $y;

	public function getX()
	{
		return $this->x;
	}
	
	public function setX($x)	
	{
		$this->x = $x;
	}
	
	public function getY()
	{
		return $this->y;
	}
	
	public function setY($y)
	{
		$this->y = $y;
	}
	
	public function getArea()
	{	
		return $this->x * $this->y;
	}
} // end of class definition
?>