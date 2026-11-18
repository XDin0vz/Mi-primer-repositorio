<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tienda CP</title>
</head>
<body>
<h2>Tienda CP</h2>
<form method="POST" action="">
<?php

$prod = array("Cebolla","Higado","Maracuya","Pera","Chocolate","Analgesico");
$prec = array(12,67,8,15,22,35);
$cant = array(4,2,8,3,10,20);
$subtotal = 0;

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>";
echo "<th>Productos</th>";
echo "<th>Precio</th>";
echo "<th>Cantidad</th>";
echo "<th>Total</th>";
echo "</tr>";

$total = 0;

for ($i=0;$i<6;$i++) {

	$subtotal = ($prec[$i]*1.16) * $cant[$i];
	$total += $subtotal;

	echo "<tr>";
	echo "<td>" . $prod[$i] . "</td>";
	echo "<td> $" . $prec[$i] . "</td>";
	echo "<td>" . $cant[$i] . "</td>";
	echo "<td> $" . number_format($subtotal,2) . "</td>";
	echo "</tr>";
}

echo "</table>";
echo "<br>";
echo "Total general: $" . $total;