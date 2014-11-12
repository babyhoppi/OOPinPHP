### PHP Struktur in Eclipse###


- Projektstruktur: 

		<Projekt>
			|- public							
			|	|_ css							
			|	|_ images						
			|_ library
			|	|_ <Klasse>.php
			|_ conf
				|_ credententials.txt

-PHP-Klasse

		class Demo {
			 ________________
			|				 |
			| Eigenschaften  |
			|	(Attribute)	 |
			|________________| 
			 ________________
			|				 |
			| Verhalten	     |
			|	(Methoden)	 |
			|________________|
			
		}
		

- Klassen automatisch laden mit dem Interzeptor
-
		- _ _ autoload(...)  " magische Methode durch _ _ "

- autoload() wird durch den PHP-Stack automaitisch aufgerufen, sobald der Quelltext
  einer Klasse nachgeladen werden muss
- autoload() bekommt dabei den Namen der zu ladenen Klasse als Parameter übergeben

###Konstruktorenregeln:###

	(1) es gibt nur eine: den Konstruktor der Basisklasse müssen Sie immer 
		manuell aufrufen
			- parent:: _ _construct() // Konstruktor der Basisklasse


###Autoloading:###
	(1) 	_ _autoload()
	(2)		SPL-Autoloader


-projektweite Einstellungen einlesen aus einer "INI"-Datei
	
	[mysql]							-
		host = 192.168.2.112		|
		user = babyhoppi			|
		pass = linux				|
	[...]							|
		--							|-> auslesen über:
		--							|		parse_ini_file($datei, true/false)
		--							|			|
	[...]							|			-> assoziatives Array
		--							|				|-> true: mit Sektionen
		--							|				|-> false: ohne Sektionen
		--							|


- statische Klassenelemente ( gehören zur Klasse nicht zum Objekt)
	- In Java
		- static --> Eigenschaften
		- static --> Verhalten
- Zugriff auf statische Klassenelemente
		- Klassennamen :: ......
		- oder innerhalb der Klasse
			-self:: ......

- statische Elemente am Beispiel **Singelton**
		- (1) nur eine Instanz
		- (2) Erzeugen der Instanz durch die Klasse kontrolliert
				
				class Singelton{
					static private $instance = null;
	
					private function __construct(){
					}

					static function getInstance($instance) {
						if($instance === null) {
							$instance = new Singelton();
						}
						return self::getInstance($instance);
					}
				}

###Referenzen und Klone###

- Objektvariablen **verweisen** auf Objekte
- bei der Wertzuweisung von Objektvariablen wird lediglich eine neue 
  Referenz erstellt

		-$objX = new Auto(); -------  objX-> zeigt auf ein      AUTO
		-$objY = $objX;      -------  objY-> zeigt auch auf das   ^

- die clone-Methode in PHP ist eine magische Methode _ _clone() und wird durch 
  $objY = clone $objX; aufgerufen.

		- NEUES AUTO
			 $car = new Car();
             $car->startEngine();
             $car->moveForward(500);
             $car->getMilage();
			 echo $car->getMilage().PHP_EOL;
        	 //Die clone-Funktion wurde in Car ergänzt und der Kilometerstand auf 0 gesetzt
             $car2 = clone $car;
             echo $car2->getMilage().PHP_EOL;