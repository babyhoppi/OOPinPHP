<?php
function __autoload($klasse) {
	// für Testausgaben
	//	echo "huhu, ich bin der autoloader".PHP_EOL;
	include "../app/" . $klasse. ".php";
	
}

/**
 * die Funktion config liest eine Datei aus und stellt deren Inhalt
 * als symbolische Konstante bereit
 * 
 * @param unknown $datei
 * @throws Exception
 */
function config($datei){
	
	//falls kein Dateiname angegeben wurde, dann nehmen wir einen
	// Standardnamen
	if($datei == "") {
		$datei = "config.ini";
	}
	
	// falls die Datei nicht exestiert, werfen wir eine Exception
	if(!file_exists($datei)) {
		throw new Exception("config-datei exestiert nicht: " .$datei);
	}
	
	// Konfiguration aus der lesen
	$config = parse_ini_file($datei, true);
	
	// falls das Ergebnis des Auslesens der Konfiguration **kein** Array ergibt;
	// werfen wir eine Exception
	if(!is_array($config)){
		throw new Exception("ungültige Konfiguration");
	}
	
	// für jeden Eintrag der Konfiguration erzeugen wir eine symbolische Konstante
	foreach ($config['mysql'] as $key => $value) {
		// Konstanten per Konetion immer in Grossbuchstaben
		define(strtoupper($key), $value);
		
	}	
}