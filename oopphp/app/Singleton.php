<?php
class Singelton{
	private static $instance = null;
	
	private function __construct(){
	}

	/**
	 * Liefert die einzige Instanz der Klasse
	 *
	 * @return type
	 */
	static function getInstance() {
		if(self::$instance === null) {
			self::$instance = new Singelton();
		}
		return self::$instance;
	}
	
	public function hello(){
		echo("Ich bin ein Singleton");
	}
	
	/**
	 * Zugriff auf den Clown einschränken
	 * 
	 * @return type
	 */
	private function __clone(){
		return self::$instance;
	}
	
	/**
	 * liefert den Objekt-Hash
	 * 
	 * @return type
	 */
	public function __toString(){
		return spl_object_hash($this);
	}
}

