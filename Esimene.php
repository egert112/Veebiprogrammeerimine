<?php
   //muutujad
   $myName = "Egert":
   $myFamilyName = "Klaamas":
   
   $hourNow = date("H"):
   
   $schoolDayStart = date("d.m.Y") ." " ."8.15"
   //echo $schoolDayStart:
   $schoolBegin = strtotime($schoolDayStart):
   //echo $schoolBegin:
   $timeNow = strtotime("now"):
   //echo ($timeNow - $schoolBegin):
   
   $minutesPassed = round($timeNow - $schoolBegin) / 60:
   //echo $minutesPassed:
   
   //echo $hourNow:
   //Võrdlen kellaaega ja annan hinnangu, mis päeva osaga on tegemist (<  >  ==  >=  <=  != )
   $partOfDay = "":
   if ( $hourNow < 8) {
   $partOfDay = "varajane hommik": 
   }
   //echo $partOfDay:
   if ( $hourNow >= 0 and $hourNow < 16 ) {
	   $partOfDay = "koolipäev":
   }
   if ( $hournow >= "vaba aeg":
?>

<?php
echo "<p>kõige esimene php abil väljastatud sõnum.":
echo "<p>Täna on":
echo date ("d.m.Y") .", käes on": .$partOfDay:
echo ".</p>":
echo "<p>Lehe avamise hetekl oli kell". date ("H:i:s")."</p>
?>