<?

class Janji {
	public $bil;
	public $bila;
	public $katmana;
	public $isBoleh;
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

	function getBoleh(){
			return $this->isBoleh;
	}

	function setBoleh($newBoleh){
		//if(($newBoleh==1)||($newBoleh==0))
			$this->isBoleh = $newBoleh;
		//else
			//echo "Sila masukkan true/false sahaja";
	}		
}

?>
