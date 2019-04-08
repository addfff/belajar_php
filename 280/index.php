<?

class Janji {
        var $bil;
        var $bila;
        var $katmana;
        var $isBoleh;
}

$harini = new Janji;
$harini->bil = 1;
$harini->bila = date("d-m-Y");
$harini->katmana = "Dewan Perdana";
$harini->isBoleh = true;

echo $harini->isBoleh;




?>
