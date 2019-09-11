<?php
	$userName = "Dmitri Grudin";
	$fullTimeNow = date("d.m.Y H:i:s");
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>
  <?php
	echo $userName;
  ?>
   programmerib veeb</title>
</head>
<body>
	<?php
	echo "<h1>" .$userName .", veebiprogrammeerimine 2019</h1>";
	?>
  <p>See veebileht on valminud õppetöö käigus ning ei sisalda mingisugust tõsiseltvõetavat sisu!</p>
<?php
	echo "<p>See on minu esimene PHP!</p>";
	echo "<p>Lehe avamise hetkel oli " .$fullTimeNow .".<?p>"; 
?>
</body>
</html>