<?
	$debug = 0;
	require 'index.php';

	function callDebug($ori, $sepatutnya, $test){

                if ($test){
			echo '<div style="color:red">Real: ';
                	echo $ori;
                	echo '</div><div style="color:green"> Target: ';
                	echo $sepatutnya;
                	echo '</div>';	
		}
		else
                        return $sepatutnya;

	}

?>
<div align="center">
<h1>9 + 10</h1>


<?
	$total = 9 + 10;
  if($debug){
	callDebug($total,"21",$debug);
  }
  else {

	echo "There are " . $total;
	echo " students learn PHP. ";
	thanksGod("<br>OK ");
  }
?>

</div>
