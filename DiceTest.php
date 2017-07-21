<?php
require 'Dice.php';

class DiceTest extends PHPUnit_Framework_TestCase
{
	public $dice;
	
	public function setUp(){
		$this->dice = new Dice();
	}
	
	public function testDiceFace(){
		$this->assertEquals(6, $this->dice->getFace());	
	}	
}
