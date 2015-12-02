<?php

class FibonacciGenerator
{
	protected $elements = [];
	public function generate($index)
	{
		for($i = 1;$i<=$index;$i++)
		{
			if($i<3)
			{
				$this->elements[$i] = 1;				
			}
			else
			{
				$this->elements[$i] =(int) round(($this->elements[$i-1]*$this->getFi()));
			}			
		}
		return $this->elements[$index];
	}
	public function getFi()
	{
		return (1+sqrt(5))/2;
	}
}
