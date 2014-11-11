<?php
class KlasseC{
	
	private $objKlasseD = null;
	
	public function setLink(KlasseD $objD) {
	 	if ($this->objKlasseD != null && $this->objKlasseD != $objD) {
			// wird das alte ObjektB aufgefordert, den Link auf das ObjektA (this) zu l�schen
			$this->objKlasseD->removeLink($this);
		}
		// jetzt verlinke ich das neue ObjektB
		$this->objKlasseD = $objD;
		// ... und lasse mich r�ckverlinken, muss dabei aber pr�fen,
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