<?php
require '../app/bootstrap.php';
require '../app/Singleton.php';
// require '../app/Car.php';

// anschubsen der Konfiguration
config ( "../app/config.ini" );

// print_r(get_defined_constants(true));
?>
<html>
<head>
<title>OOP PHP</title>
<link rel="stylesheet" href="css/main.css" type="text/css" />
</head>

<body>
	<h2>Hallo Welt!</h2>
		
		<?php
		
		// ____________________________________________________________
		/**
		 * die Klasse DemoA() kann noch nicht instanziiert werden,
		 * da deren Quelltext dem PHP-Stack unbekannt ist.
		 *
		 * Abhilfe: _ _autoload()
		 */
		
		// $d = new DemoA();
		// echo dirname(__FILE__);
		// Nicht sinnvoll da es zu Problemen kommen könnte
		// include '../app/DemoA.php';
		// $d = new DemoA();
		// ____________________________________________________________
		
		/**
		 * die magische Methode lädt automaitsch den Wuelltext einer Klasse
		 * nach, sobald er benötigt wird
		 *
		 * @param type $klasse
		 *        	Name der Klasse OHNE Extension
		 */
		
		// $dA = new DemoA();
		// $dB = new DemoB();
		// $dB->sayMyName();
		
		// echo "Singelton-Test" . PHP_EOL;
		
		// $iA = Singelton::getInstance();
		// $iB = Singelton::getInstance();
		
		// $test = Singelton::getInstance();
		// $test->hello();
		
		// ________________________________________________________________
		
		// NEUES AUTO
		// $car = new Car();
		// echo $car.PHP_EOL;
		
		?><br>
	<h4>unidirektionale Assoziation mit fester Multiplizitaet 1:1</h4><?php
		
		$ka = new KlasseA ();
		$kb1 = new KlasseB ();
		$kb2 = new KlasseB ();
		
		$ka->setLink ( $kb1 );
		echo $ka . "ist verlinkt mit " . $ka->getLink () . PHP_EOL;
		?><br><?php
		$ka->setLink ( $kb2 );
		echo $ka . "ist verlinkt mit " . $ka->getLink () . PHP_EOL;
		?><br><?php
		$ka->removeLink ();
		echo $ka . "ist verlinkt mit " . $ka->getLink () . PHP_EOL;
		?><br><?php
		$ka->setLink ( $kb2 );
		echo $ka . "ist verlinkt mit " . $ka->getLink () . PHP_EOL;
		?><br>
	<h4>bidirektionale Assoziation mit fester Multiplizitaet 1:1</h4><?php
	
		$kc = new KlasseC ();
		$kd1 = new KlasseD ();
		$kd2 = new KlasseD ();
	
		$kc->setLink ( $kd1 );
		echo $kc . "ist verlinkt mit " . $kc->getLink () . PHP_EOL;
	?><br><?php
		echo $kd1 . "ist verlinkt mit " . $kd1->getLink () . PHP_EOL;
	?><br><?php
		$kc->setLink ( $kd2 );
		echo $kc . "ist verlinkt mit " . $kc->getLink () . PHP_EOL;
	?><br><?php
		echo $kd2 . "ist verlinkt mit " . $kd2->getLink () . PHP_EOL;
	?><br><?php
		$kc->removeLink ();
		echo $kc . "ist verlinkt mit " . $kc->getLink () . PHP_EOL;
	?><br><?php
		echo $kd1 . "ist verlinkt mit " . $kd1->getLink () . PHP_EOL;
	?><br><?php
		echo $kd2 . "ist verlinkt mit " . $kd2->getLink () . PHP_EOL;
	?><br><?php
		$kc->setLink ( $kd2 );
		echo $kc . "ist verlinkt mit " . $kc->getLink () . PHP_EOL;
	?><br><?php
		echo $kd1 . "ist verlinkt mit " . $kd1->getLink () . PHP_EOL;
	?><br><?php
		echo $kd2 . "ist verlinkt mit " . $kd2->getLink () . PHP_EOL;
	?>
	
	<h4>unidirektionale Assoziation mit variabler Multiplizitaet 1:N(1:*)</h4><?php
	
		$ke = new KlasseE ();
		$kf1 = new KlasseF ();
		$kf2 = new KlasseF ();
		$kf3 = new KlasseF ();
		$kf4 = new KlasseF ();
	
		$ke->setLink ( $kf1 );
		$ke->setLink ( $kf2 );
		echo $ke . "ist verlinkt mit " . $ke->getLinkAll() . PHP_EOL;
	
	?>
	</body>
</html>