<form action="" method="post" style="text-align: center;margin: auto;">
<p>Decimalne brojeve deliti sa tačkom ( primer 1.85 )</p>
<p>Početni ulog</p>
<input type="text" name="ulog"  required><br>
<p>Množioc povećanja uloga</p>
<input type="text" name="mnozioc" required><br>
<p>Kvota koja se prati</p>
<input type="text"  name="kvota" required><br><br>
<input type="submit" value="Show">

</form>
<br>
<br>


<?php

$ulog =isset($_POST['ulog']) ? $_POST['ulog'] : "";
$mnozioc = isset($_POST['mnozioc']) ? $_POST['mnozioc']: "";
$kvota = isset($_POST['kvota']) ? $_POST['kvota'] : "";
if($ulog == null && $mnozioc == null && $kvota == null){
    die;
}
if(!is_numeric($ulog) || !is_numeric($mnozioc) || !is_numeric($kvota)){
    die("<h2 style='margin:auto;text-align:center'>Niste uneli pravilno broj !!!</h2>");
}
	$pukli=$ulog;
	$doplata=$ulog;
	echo "<div style='border:3px solid black;margin:auto;width:500px;padding:2px;text-align:center;'>";
		echo "<p>POČETNI ULOG JE : <strong> $ulog </strong></p>";
		echo "<p>MNOŽIOC ZA UVEĆANJE ULOGA : <strong>$mnozioc</strong></p>";
		echo "<p>KVOTA KLADIONICE JE : <strong>$kvota</strong></p>";
		echo "<p>IZNOS POČETNE ZARADE JE : <strong>".(($ulog*$kvota)-$ulog)."</strong></p>";
	echo "</div><br>";
	for($i=2;$i<=50;$i++){
		$doplata=$doplata*$mnozioc;
		$pukli=$pukli+$doplata;
		$dobitak=$doplata * $kvota;
		$razlika=$dobitak-$pukli;
		echo "<div style='border:1px solid black;margin:auto;width:500px;padding:2px;text-align:center;'>";
		echo "<p style=color:red;>".$i." krug</p>";
		echo "<p>Trenutna uplata je : ". round($doplata)."</p>";
		echo "<p>Mogući dobitak je : ". round($dobitak)."</p>";
		echo "<p>Ukupno uplaćenog novca je : ". round($pukli)."</p>";
		echo "<p>Iznos tačne zarade u ovom krugu je : ". round($razlika)."</p>";
		echo "</div><br>";
	}


