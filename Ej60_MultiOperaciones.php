<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>MultiOperaciones</title>
</head>
<body>
 <h2>MultiOperaciones</h2>
 <!-- Formulario de captura -->
 <form method="POST" action="">
 <?php

echo "Número ①: 51 al 99*";echo"<br>";echo "Número ②: -50 al -1*";echo"<br><br>";

 // Ciclo para mostrar tres renglones de captura
 for ($i = 0; $i < 3; $i++) {
 echo "Numero 1:";
 echo "<input type='number' name='n1[]'>" . " ";

 echo "Numero 2:";
 echo "<input type='number' name='n2[]'>" . " ";

 echo "<br><br>";
 }
 ?>
 <!-- Botón para guardar y calcular -->
 <button type="submit" name="guardar" value="guardar">
 Guardar y calcular </button>

 <?php
 echo "<br><br>";
 // Verificar si se presionó el botón Guardar
 if (isset($_POST['guardar'])) {
 // Guardar los datos en dos arreglos
 $n1 = $_POST['n1'];
 $n2 = $_POST['n2'];

$gg = true;

for ($i=0;$i<3;$i++) {
	if ($n1[$i]<51) {
		$gg = false;
	}
}

for ($i=0;$i<3;$i++) {
	if ($n2[$i]>-1) {
		$gg = false;
	}
}

if ($gg == true) {

 $suma = array();
 $resta = array();
 $mult = array();
 $divi = array();

	for ($i = 0; $i < 3; $i++) {
	// Calcular suma
	$suma[$i] = $n1[$i] + $n2[$i];
	// Calcular resta
	$resta[$i] = $n1[$i] - $n2[$i];
	// Calcular multiplicación
	$mult[$i] = $n1[$i] * $n2[$i];
	// Calcular división
	$divi[$i] = $n1[$i] / $n2[$i];
 	}

 	echo "<table border='1' cellpadding='10' cellspacing='0'>";

 	echo "<tr>";
 	echo "<th>Numero 1</th>";
 	echo "<th>Numero 2</th>";
 	echo "<th>Suma</th>";
 	echo "<th>Resta</th>";
 	echo "<th>Multiplicación</th>";
 	echo "<th>División</th>";
 	echo "</tr>";

 	for ($i=0;$i<3;$i++) {

 		echo "<tr>";

 		echo "<td>" . $n1[$i] . "</td>";
 		echo "<td>" . $n2[$i] . "</td>";
 		echo "<td>" . $suma[$i] . "</td>";
 		echo "<td>" . $resta[$i] . "</td>";
 		echo "<td>" . $mult[$i] . "</td>";
 		echo "<td>" . number_format($divi[$i],2) . "</td>";

	}
	echo "</tr>";
}
else {
	echo "Error: un valor no coincide con las condiciones";
	}
}
 ?>
</body>
</html>