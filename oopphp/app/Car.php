<?php
class Car implements Vehicle{
	
	private $milage;
	private $engineStatus;
	
	
	public function __construct() {
		$this->milage = 0;
		$this->engineStatus = "stopped";
		 
	}
	
	public function getMilage() {
		return $this->milage;
	}
	
	public function  moveForward() {
		$this->milage += $miles;
	}
	
	public function startEngine() {
		$this->engineStatus = "started";
	}
	
	public function stopEngine() {
		$this->engineStatus = "stopped";
	}
	
	
	public function __toString() {
		return __CLASS__. ":" . spl_object_hash($this). " meldet sich!";
	}
	
	
}