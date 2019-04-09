<?

class Janji {
        var $bil;
        var $bila;
        var $katmana;
        var $isBoleh;

	function __construct($a,$b,$c,$d){
				$this->bil = $a;
				$this->bila = $b;
				$this->katmana = $c;
				$this->isBoleh = $d;

	}

}


$d = strtotime("next Sunday");
$ahadni = new Janji(3, date("d-m-Y", $d), "CS", "false");

$d = strtotime("next Tuesday");
$selasani = new Janji(4, date("d-m-Y", $d), "TBA", 0);

//echo $ahadni->isBoleh;
echo $ahadni->bila;

//if ($ahadni->isBoleh == 0)
//	echo "false boleh digunakan";
//else
//	echo '"false" bukan false';


?>
