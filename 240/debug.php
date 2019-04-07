<?
	$debug = true;
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

	echo "There are " . callDebug($total,"21",$debug);
	echo " students learn PHP. ";
	thanksGod("<br>OK ");

?>

</div>
