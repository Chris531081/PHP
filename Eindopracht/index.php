<?php
//echo ('Ik haat php🦄 <br>');

require_once ('figuur.class.php');
require_once ('cilinder.class.php');
require_once ('vierkant.class.php');
require_once ('pringles.class.php');
require_once ('floppy.class.php');

//echo 'hallo';



$mijn_figuur = new Cilinder(10, 5);
$vierkantje = new Vierkant(5);

// ik wist niet of de zelf gemaakte dingen in een eigen bestand moesten of in het cilinder en vierkant bestand dus ik heb het maar allebei gedaan 🍬
$pringle = new Cilinder(235, 70);
$floppydisc = new Vierkant(13);
$pringle2 = new Pringle(235, 70);
$floppydisc2 = new Floppy(13);




echo $mijn_figuur->berekenOppervlakte(3), "is de oppervlakte van de cilinder <br>";
echo $vierkantje->berekenOppervlakte(5), " is de oppervlakte van het vierkant <br>";
echo $pringle->berekenOppervlakte(3), "is de oppervlakte van de Pringles cilinder <br>";
echo $floppydisc->berekenOppervlakte(13), " is de oppervlakte van de floppydisc <br>";
echo $pringle2->berekenOppervlakte(3), "is de oppervlakte van de Pringles cilinder <br>";
echo $floppydisc2->berekenOppervlakte(13), " is de oppervlakte van de floppydisc <br>";


?>