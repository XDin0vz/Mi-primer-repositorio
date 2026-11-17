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
?>

<!-- Avances, no acabado no cap -->