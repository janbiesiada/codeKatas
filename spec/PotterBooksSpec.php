<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PotterBooksSpec extends ObjectBehavior
{
    function it_costs_0_for_no_books()
    {
    	$this->price([])->shouldBe(0);
    }
    function it_costs_8_for_first_book()
    {
    	$this->price([0])->shouldBe(8);
    }
    function it_costs_8_for_second_book()
    {
    	$this->price([1])->shouldBe(8);
    }
    function it_costs_8_for_third_book()
    {
    	$this->price([2])->shouldBe(8);
    }
    function it_costs_8_for_fourth_book()
    {
    	$this->price([3])->shouldBe(8);
    }
    function it_costs_8_for_fifth_book()
    {
    	$this->price([4])->shouldBe(8);
    }
    function it_costs_16_for_2_same_books()
    {
    	$this->price([0,0])->shouldBe(16);
	}
    function it_costs_28_for_3_same_books()
    {
    	$this->price([0,0,0])->shouldBe(24);
    }
    function it_has_5_percent_discount_for_two_difrent_books()
    {
    	$this->price([0,1])->shouldBe(8*2*0.95);
    }
    function it_has_10_percent_discount_for_three_difrent_books()
    {
    	$this->price([0,1,2])->shouldBe(8*3*0.9);
    }
    function it_has_20_percent_discount_for_four_difrent_books()
    {
    	$this->price([0,1,2,3])->shouldBe(8*4*0.8);
    }
    function it_has_25_percent_discount_for_five_difrent_books()
    {
    	$this->price([0,1,2,3,4])->shouldBe(8*5*0.75);
    }
    function it_has_discount_for_difrent_books_and_full_price_for_1_same_book()
    {
    	$this->price([0,0,1])->shouldBe(8*2*0.95+8);    	
    }
    function it_has_discount_for_2_sets_of_books()
    {
    	$this->price([0,0,1,1])->shouldBe(2*(8*2*0.95));    	
    }
    function it_counts_advanced_discounts()
    {
    	$this->price([0, 0, 1, 1, 2, 2, 3, 4])
	     	 ->shouldBeEquals(51.6);    	
    	$this->price([0, 0, 0, 0, 0, 1, 1, 1, 1, 1,	2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4])
    		 ->shouldBeEquals(5 * (8 * 5 * 0.75));
		$this->price([0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 4 ])
    		 ->shouldBeEquals(4 * (8 * 5 * 0.75)+3*8*0.9);   	

    }
    public function getMatchers()
    {
        return [
            'beEquals' => function ($subject, $key) {
                return abs($subject - $key) <0.00000001;
            }
        ];
    }
}
