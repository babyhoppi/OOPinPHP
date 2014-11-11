<?php
class KlasseD{

	private $objKlasseC = null;

	public function setLink(KlasseC $objC) {
		if ($this->objKlasseC != null && $this->objKlasseC != $objC) {
			// wird das alte ObjektB aufgefordert, den Link auf das ObjektA (this) zu löschen
			$this->objKlasseC->removeLink($this);
		}
		// jetzt verlinke ich das neue ObjektB
		$this->objKlasseC = $objC;
		// ... und lasse mich rückverlinken, muss dabei aber prüfen,
		// dass ich nicht wechselseitig und endlos setLink() aufrufe
		if ($objC->getLink() != $this) {
			$objC->setLink($this);
		}
	}

	public function removeLink() {
		$this->objKlasseC = null;
	}

	public function getLink() {
		return $this->objKlasseC;
	}

	public function  __toString(){
		return __CLASS__ . "; " . spl_object_hash($this);
	}
}