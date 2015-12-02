<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FibonacciGeneratorSpec extends ObjectBehavior
{
    function it_returns_first_elemen()
    {
    	$this->generate(1)->shouldBe(1);
    }
    function it_returns_second_element()
    {
    	$this->generate(2)->shouldBe(1);
    }
    function it_returns_third_element()
    {
    	$this->generate(3)->shouldBe(2);
    }
    function it_returns_fourth_element()
    {
    	$this->generate(4)->shouldBe(3);
    }
    function it_returns_fifth_element()
    {
    	$this->generate(5)->shouldBe(5);
    }
    function it_returns_sixth_element()
    {
    	$this->generate(6)->shouldBe(8);
    }
    function it_returns_next_elements()
    {
    	$this->generate(7)->shouldBe(13);
    	$this->generate(8)->shouldBe(21);
    	$this->generate(9)->shouldBe(34);
    	$this->generate(10)->shouldBe(55);
    	$this->generate(11)->shouldBe(89);
    	$this->generate(12)->shouldBe(144);
    }
}
