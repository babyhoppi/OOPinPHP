<?php
class KlasseF{
	private $identKey;
	private static $id =0;
	
	
	/**
	 * Der Konstruktor markiert jedes neue Objekt mit einer eindeutigen Nummer
	 */
	public function __construct() {
		$this->identKey = KlasseF::$id;
		KlasseF::$id++;
	}
	
	
	/**
	 * liefert eindeutige Schlüsselnummer des Objektes
	 * 
	 * @return Integer
	 */
	public function getIdentKey(){
		return  $this->identKey;
	}

	public function  __toString(){
		return __CLASS__ . "; " . spl_object_hash($this);
	}
}