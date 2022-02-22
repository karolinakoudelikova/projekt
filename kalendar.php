<?php

echo "<table>\n";

$dnyVmesici = [1 => 31, 28, 31, 30, 31, 31, 30, 30, 31, 30, 31, 31];
$dnyVtydnu = [1 => "Po", "Ut", "St", "Ct", "Pa", "So", "Ne"];
$mesic = date("n");
$denvtydnu = date("N", strtotime("first day of this month"));


echo "<tr>\n";
for ($i = 1; $i <= 7; $i++) {
	echo "<td>$dnyVtydnu[$i]</td>\n";
}
echo "</tr>\n";

echo "<tr>\n";
foreach ($dnyVtydnu as $den) {
	echo "<td>$den</td>\n";
}
echo "</tr>\n";

for ($den = 1; $den < $dnyVmesici[$mesic] + $denvtydnu; $den++) {
	if ($den < $denvtydnu) {
		echo "<td></td>\n";
	}
	else {
		$d = $den - $denvtydnu + 1;
		echo "<td>$d</td>\n";
	}

	if (!($den % 7)) {
		echo "</tr>\n";
		echo "<tr>\n";
	}
}

echo "</tr>\n";
echo "</table>\n";