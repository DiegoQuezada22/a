<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$contador = 0;
do {
    $peso = rand(40, 120);
    $altura = rand(130, 190) / 100;
    $imc = $peso / ($altura * $altura);

    echo "Peso: $peso kg<br>";
    echo "Altura: " . number_format($altura, 2) . "m<br>";

    if ($imc < 18.5) {
        echo "Clasificación: Peso bajo<br>";
    } elseif ($imc < 25) {
        echo "Clasificación: Peso normal<br>";
    } elseif ($imc < 30) {
        echo "Clasificación: Sobrepeso<br>";
    } else {
        echo "Clasificación: Obesidad<br>";
    }

    echo "IMC: " . number_format($imc, 2) . "<br><hr>";

    $contador++;
} while ($contador < 5);
?>
</body>
</html>