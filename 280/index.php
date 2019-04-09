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

	function hasBoleh(){
		if($this->isBoleh)
			return "InsyaAllah";
		else
			return "Innalillah";
	}

	function setBoleh($newBoleh){
		if($newBoleh)
			$this->isBoleh = $newBoleh;
		else if(!$newBoleh)
			$this->isBoleh = $newBoleh;
		else
			echo "Sila masukkan true/false sahaja";
	}
	
	function getBoleh(){
		return $this->isBoleh;
	}	
}


$d = strtotime("+3 Months");
$e = "Kat mana-mana pun takpa";
$nantilah = new Janji(5, date("d-m-Y", $d), $e, 1);

//echo $nantilah->bila;
//echo $nantilah->katmana;
//$nantilah->setBoleh(0);

echo $nantilah->hasBoleh();

//echo $nantilah->getBoleh();

?>
