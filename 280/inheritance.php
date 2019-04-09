<?
require 'janji.php';

class JanjiMelayu extends Janji {

	function hasInheritance(){
		echo "<br>Yes";
	}
}

$d = strtotime("first day of -1 month");
$e = "RNR";

$nantilah = new JanjiMelayu(1, date("d-m-Y", $d), $e, 1);

$nantilah->hasInheritance();
echo "<br>$nantilah->bil, $nantilah->bila, $nantilah->katmana, $nantilah->isBoleh";  
$nantilah->setBoleh("palsu");
$r = $nantilah->getBoleh();
$s = $nantilah->hasBoleh();
echo "<br>$s ($r)";
?>

