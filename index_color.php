<?php
$i=1;
$fh = fopen('subs.txt','r');
while ($line = fgets($fh)) {
  // <... Do your work with the line ...>
  //echo $line ."<br>";
	$pos = strpos($line, "-->");

	// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
	// porque la posición de 'a' está en el 1° (primer) caracter.
	if ($pos === false) {
		if (strlen(trim($line))>3) {
			echo '&lt;font color="#FFFF80"&gt;' . trim($line) ."&lt;/font&gt;<br>";
		} else {
			//echo $i . " -> " . trim($line) ."<br>";
			echo trim($line) ."<br>";
		}
	} else {
		echo trim($line) ."<br>";
	}
	$i++;
}
fclose($fh);
?>