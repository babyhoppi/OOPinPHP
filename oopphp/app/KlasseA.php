<?php
class KlasseA{
	
	private $objKlasseB = null;
	
	public function setLink(KlasseB $objB) {
		if ($this->objKlasseB === null) {
			$this->objKlasseB = $objB;
		}
	}
	
	public function removeLink() {
		$this->objKlasseB = null;
	}
	
	public function getLink() {
		return $this->objKlasseB;
	}
	
	public function  __toString(){
		return __CLASS__ . "; " . spl_object_hash($this);
	}
}