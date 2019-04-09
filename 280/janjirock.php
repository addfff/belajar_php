<?
//require 'janji.php';
require 'inheritance.php';

include 'header.html';
$nantilah = new JanjiMelayu(2, date(1), "SP", 1);
echo $nantilah->hasBoleh();
include 'footer.html';
?>
