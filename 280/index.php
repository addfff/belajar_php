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

	$tadi = new Janji(100,date("d-m-Y H:i",strtotime("- 6 hours")),"kat mana mana ler",true);

	echo $tadi->bila;
?>
