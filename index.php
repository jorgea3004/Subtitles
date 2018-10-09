<?php
$fh = fopen('subs.txt','r');
while ($line = fgets($fh)) {
  // <... Do your work with the line ...>
  //echo $line ."<br>";
	$pos = strpos($line, "-->");

	// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
	// porque la posición de 'a' está en el 1° (primer) caracter.
	if ($pos === false) {
		echo trim($line) ."<br>";
	} else {
		//echo $line ."<br>";
		$times = explode(" --> ", $line);
		//echo $times[0] . " <> " . $times[1] ."<br>";
		$timeD = explode(",", $times[0]);
		$timeE = explode(",", $times[1]);
		$startTime = new DateTime($timeD[0]);
		$endTime = new DateTime($timeE[0]);
		$seconds = 1;
		$startTime->modify('+'.$seconds.' seconds'); // can be seconds, hours.. etc
		$endTime->modify('+'.$seconds.' seconds'); // can be seconds, hours.. etc

		echo $startTime->format('H:i:s') . "," . $timeD[1] . " --> " . $endTime->format('H:i:s') . "," . $timeE[1] ."<br>";

	}
}
fclose($fh);
?>