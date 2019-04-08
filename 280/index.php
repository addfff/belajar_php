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

//echo $harini->isBoleh;

$d = strtotime("tomorrow");
$esok = new Janji;
$esok->bil = 2;
$esok->bila = date("d-m-Y", $d);
$esok->katmana = "Tempat Biasa";
$esok->isBoleh = "insyaAllah";

echo $esok->bila;




?>
