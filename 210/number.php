<?
  $title = "Bismillah";
  $mula="Dengan Nama Allah Yang Maha Pemurah Lagi Maha Mengasihani";

  define("AUTHOR", "Shahadan Bin Saad");

?>

<html>
	<head>
		<title>
			<?=$title?>
		</title>
	</head>
	<body>
<?
  $count = 0;
?>
    <div align="center">
<?
  $count++;
  echo "<br> Hit terkini :" . $count . "<br><br>";
?>
    </div>

<?
  $count--;
  echo "<br> Sejarah(history) :" . $count . "<br><br>";
?>
	</body>
</html>
