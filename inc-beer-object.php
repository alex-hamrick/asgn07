<?php
class Beer
{
	private $name;
	private $color;
	private $count;

	public function getName()
	{
		return $this->name;
	}
	
	public function getColor()
	{
		return $this->color;
	}
	
	public function getCount()
	{
		return $this->count;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function setColor($color)
	{
		$this->color = $color;
	}
	
	public function setCount($count)
	{
		$this->count = $count;
	}
	}
	?>