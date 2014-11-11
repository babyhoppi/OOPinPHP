<?php
class KlasseE{
	private $max = 4;
	private $array = null;
	private $objKlasseF = array();
	
	public function __construct() {
		$this->array[] = "";
	}
	
	public function setLink(KlasseF $objF) {
		
		//Ansatz Steinhagen
		$key = spl_object_hash($objF);
		if(array_key_exists($key, $this->objKlasseF)){
			return;
		}
		
		//... sonst wird verlinkt
		$this->objKlasseF[$key] = $objF;
	}
	
	public function setLinkAlaHoppe(KlasseF $objF) {
		$key = $objF->getIdentKey();
		
		if(array_key_exists($key, $this->objKlasseF)){
			return;
		}
		
		//... sonst wird verlinkt
		$this->objKlasseF[$key] = $objF;
	}
	
	public function removeLink(KlasseF $objF) {
		//Ansatz Steinhagen
		$key = spl_object_hash($objF);
		if(array_key_exists($key, $this->objKlasseF)){
			unset($this->objKlasseF[$key]);
		}
	}
	
	public function removeLinkAlaHoppe(KlasseF $objF) {
		$key = $objF->getIdentKey();
		
		if(array_key_exists($key, $this->objKlasseF)){
			unset($this->objKlasseF[$key]);
		}
	}
	
	public function getLinkAll() {
		return $this->objKlasseF;
	}
	
	public function  __toString(){
		$string = "";
		
		//alle Referenzen in einer Zeichenkette aneinander hängen....
		foreach ($this->objKlasseF as $key => $value){
			$string .= $key. ": " .spl_object_hash($value).PHP_EOL;
		}
		// ... und als Ergebnis zurückliefern
		return $string;
	}
}