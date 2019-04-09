<?
require 'janji.php';

class JanjiMelayu extends Janji {

	public $masa;
	private $tambahan;

	function setMasa($newMasa){
		$this->tambahan = time($newMasa) + (10 * 60 * 60);
		echo "<br> $this->tambahan";
		$this->masa = date($newMasa, strtotime("+1 hour"));
	}

	function hasInheritance(){
		echo "<br>Yes";
	}
}
/*
$d = strtotime("3pm first day of -1 month");
$e = "RNR";

$nantilah = new JanjiMelayu(1, date("d-m-Y", $d), $e, 1);
$nantilah->setMasa(date("H:i",$d));
echo "<br>$nantilah->masa";

$nantilah->hasInheritance();
echo "<br>$nantilah->bil, $nantilah->bila, $nantilah->katmana, $nantilah->isBoleh";  
$nantilah->setBoleh("palsu");
$r = $nantilah->getBoleh();
$s = $nantilah->hasBoleh();
echo "<br>$s ($r)";
*/
?>

