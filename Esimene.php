<?php
	//muutujad
	$myName = "Egert";
	$myFamilyName = "Klaamas";
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
	
	//var_dump($monthNamesEt);
	
	//echo $monthNamesEt [3];
	$monthNow = $monthNamesEt [date("n") - 1];
	
	$hourNow = date("H");
	
	$schoolDayStart = date("d.m.Y") ." " ."8.15";
	//echo $schoolDayStart;
	$schoolBegin = strtotime($schoolDayStart);
	//echo $schoolBegin;
	$timeNow = strtotime("now");
	//echo ($timeNow - $schoolBegin);
	
	$minutesPassed = round(($timeNow - $schoolBegin) / 60);
	//echo $minutesPassed;
	
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
	
	//vanusega seotud muutujad
	$myAge = 0;
	$ageNote = "";
	$myBirthYear;
	$yearsOfMyLife = "";
	
	//echo $_POST;
	//VAR_dump($_POST);
	//echo $_POST  ["birthYear"];
	//arutame vanuse
	if ( isset($_POST["birthYear"]) and $_POST ["birthYear"]!=0){
		$myBirthYear = $_POST["birthYear"];
	$myAge = date("Y") - $_POST ["birthYear"];
	//echo $myAge;
	$ageNote =  "<p>Te olete umbes " .$myAge ."aastat vana. </p>";
	
	$yearsOfMyLife = "<ol> \n";
	$yearNow = date("Y");
	for ($i = $myBirthYear; $i <= $yearNow; $i ++) {
		$yearsOfMyLife .= "<li>" .$i ."</li> \n";
	} 
	$yearsOfMyLife .= "</ol> \n";
	
	}
	
	//lihtne tsükkel
	/*for ($i = 0; $i <5; $i ++) {
		echo "ha";
	}*/
	
	
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
	<?php
		echo "<p>Kõige esimene PHP abil väljastatud sõnum.</p>";
		echo "<p>Täna on ";
		echo date("d.") .$monthNow .date(" Y") .", käes on " .$partOfDay;
		echo ".</p>";
		echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .".</p>";
	
	?>
	<h2>Räägime vanusest</h2>
	<p>Sisesta oma sünniaasta, arvutame vanuse!</p>
	<form method="POST">
	<label>Teie sünniaasta: </label>
	<input name="birthYear" id="birthYear" type="number" max="2017" min="1900" value="<?php echo $myBirthYear;?>">
	
	<input id="submitBirthYear" type="submit" value="kinnita">
	
	</form>
	<?php
	if ( $ageNote != "") {
		echo $ageNote;
	}
	
	if ( $yearsOfMyLife !="") {
		echo "\n <h3>Olete elanud järgmistel aastatel</h3> \n" . $yearsOfMyLife;
	}	
	?>
</body>
</html>