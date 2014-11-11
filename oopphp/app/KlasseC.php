<?php
class KlasseC{
	
	private $objKlasseD = null;
	
	public function setLink(KlasseD $objD) {
	 	if ($this->objKlasseD != null && $this->objKlasseD != $objD) {
			// wird das alte ObjektD aufgefordert, den Link auf das ObjektE (this) zu löschen
			$this->objKlasseD->removeLink($this);
		}
		// jetzt verlinke ich das neue ObjektD
		$this->objKlasseD = $objD;
		// ... und lasse mich rückverlinken, muss dabei aber prüfen,
		// dass ich nicht wechselseitig und endlos setLink() aufrufe
		if ($objD->getLink() != $this) {
			$objD->setLink($this);
		}
	}
	
	public function removeLink() {
		$this->objKlasseD = null;
	}
	
	public function getLink() {
		return $this->objKlasseD;
	}
	
	public function  __toString(){
		return __CLASS__ . "; " . spl_object_hash($this);
	}
}