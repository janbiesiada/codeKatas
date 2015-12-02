<?php

class PotterBooks
{
    public function price($books)
    {
    	$series = [];
    	$bookPrices = [8,7.2,6.4,4,4.4];
      	$price = 0;
    	foreach($books as $bookid => $book)
    	{
			$checked = false;
    		foreach($series as &$serie) 
    		{
    			if(!in_array($book, $serie))
    			{
					$price += $bookPrices[count($serie)];
					$serie[]= $book;
					$checked = true;
					break;    				
    			}
    		}
    		if(!$checked)
    		{
				$series[]= [$book];
				$price += 8;
    		}
      	}
        return $price;
    }
}
