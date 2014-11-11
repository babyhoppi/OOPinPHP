<?php
class KlasseB{

	private $objKlasseA = null;

	public function setLink(KlasseA $objA) {
		if ($this->objKlasseA === null) {
			$this->objKlasseA = $objB;
		}
	}

	public function removeLink() {
		$this->objKlasseA = 0;
	}

	public function getLink() {
		return $this->objKlasseA;
	}

	public function  __toString(){
		return __CLASS__ . "; " . spl_object_hash($this);
	}
}