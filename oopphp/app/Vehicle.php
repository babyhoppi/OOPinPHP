<?php

interface Vehicle {
	
	public function getMilage();
	public function moveForward($miles);
	public function startEngine();
	public function stopEngine();
}