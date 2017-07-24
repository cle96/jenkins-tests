<?php

class AnotherTest extends PHPUnit_Framework_TestCase
{
	public $number;

	public function setUp()
	{
	 $this->number = 1;
	}

	public function testFace()
	{
	 $this->assertEquals(2, $this->number);
	}


}
