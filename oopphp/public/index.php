<?php 
	require '../app/bootstrap.php';
	require '../app/Singleton.php';
	
	//anschubsen der Konfiguration
	config("../app/config.ini");
	
	print_r(get_defined_constants(true));
?>
<html>
	<head>
		<title>OOP PHP</title>
		<link rel="stylesheet" href="css/main.css" type="text/css" />
	</head>	
	
	<body>
		<h2>Hallo Welt!</h2>
		
		<?php 
		
		
		
		
		//____________________________________________________________
		/**
		 * die Klasse DemoA() kann noch nicht instanziiert werden,
		 * da deren Quelltext dem PHP-Stack unbekannt ist.
		 * 
		 * Abhilfe: _ _autoload()
		 */
		
		//	$d = new DemoA();
// 		echo dirname(__FILE__);
		//Nicht sinnvoll da es zu Problemen kommen könnte
// 		include '../app/DemoA.php';
// 		$d = new DemoA();
		//____________________________________________________________
		
		/**
		 * die magische Methode lädt automaitsch den Wuelltext einer Klasse
		 * nach, sobald er benötigt wird
		 * 
		 * @param type $klasse Name der Klasse OHNE Extension
		 */
		
		
		$dA = new DemoA();
		$dB = new DemoB();
		$dB->sayMyName();
		
		echo "Singelton-Test" . PHP_EOL;
		
		$iA = Singelton::getInstance();
		$iB = Singelton::getInstance();
		
		$test = Singelton::getInstance();
		$test->hello();
		?>
	</body>
</html>