<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Matrices</title>
</head>
<body>
 <h2>Matrices</h2>
 <form method="POST" action="">
 <?php

$matriza = array();
$matrizb = array();
$matrizc = array();

$a = 100;
$b = 500;

for ($i=0;$i<3;$i++) {

	for ($j=0;$j<3;$j++) {
		$matriza[$i][$j] = $a;
		$a += 10;

		$matrizb[$i][$j] = $b;
		$b += 20;

		$matrizc[$i][$j] = $matriza[$i][$j]+$matrizb[$i][$j];
	}
}

echo "<h3>MatrizA</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
for ($i = 0; $i<3;$i++) {
	echo "<tr>";
	for ($j = 0; $j<3; $j++) {
		echo "<td>" . $matriza[$i][$j] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";

echo "<h3>MatrizB</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
for ($i = 0; $i<3;$i++) {
	echo "<tr>";
	for ($j = 0; $j<3; $j++) {
		echo "<td>" . $matrizb[$i][$j] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";

echo "<h3>MatrizC</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
for ($i = 0; $i<3;$i++) {
	echo "<tr>";
	for ($j = 0; $j<3; $j++) {
		echo "<td>" . $matrizc[$i][$j] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
</form>
</body>
</html>