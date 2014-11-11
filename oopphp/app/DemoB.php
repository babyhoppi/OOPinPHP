<?php

class DemoB extends DemoA {
	
	/**
	 * 
	 * @var String
	 */
	private $name = "";
	
	public function __construct() {
		
		// wir **müssen** in PHP die Konstruktoren der Basisklassen **immer**
		// manuell aufrufen
		parent::__construct();
		
		echo "Ich bin die DemoB-Klasse" . PHP_EOL;
	
		$this-> name = "Klaus";
	}
	
	public function sayMyName() {
		echo $this->name;
	}
}