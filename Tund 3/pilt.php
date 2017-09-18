<?php
	//muutujad
	$myName = "Egert";
	$myFamilyName = "Klaamas";
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
	
	//var_dump($monthNamesEt);
	
	//echo $monthNamesEt [3];
	$monthNow = $monthNamesEt [date("n") - 1];
	
	$hourNow = date("H");
	
	
	
	//echo $hourNow;
	//võrdlen kellaaega ja annan hinngu, mis päeva osaga on tegemist (<   >   ==   >=  <=  !=  )
	$partOfDay = "";
	if ( $hourNow < 8 ){
		$partOfDay = "varajane hommik";
	}
	//echo $partOfDay;
	if ( $hourNow >= 8 and $hourNow < 16 ) {
		$partOfDay = "koolipäev";
	}
	if ( $hourNow >= 16 ) {
		$partOfDay = "vaba aeg";
	}
	
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Andrus Rinde veebiprogemise asjad
	</title>
</head>
<body>
	<h1>
	<?php
		echo $myName ." " .$myFamilyName;
	?>
	</h1>
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<h2>Mõned lingid</h2>
	<p>Õpime <a href="http://www.tlu.ee">Tallinna ülikoolis</a>.</p>
	<p>Minu esimene php-leht on <a href="../Esimene.php">siin</a>.</p>
	<P>Minu sõbra Joonase leht on <a href="../../../~masijoon/veebiprogrammeerimine">siin</a>.</p>
	<h2>pilt ülikoolist</h2>
	<img src="../../pics/tlu_37.jpg" alt="Tallinna Ülikool">
	<img src="../../pics/tlu_27.jpg" alt="Tallinna Ülikool">
	
</body>
</html>