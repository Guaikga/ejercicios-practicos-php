<?php

$nota1 = 8.5;
$nota2 = 9.2;
$nota3 = 7.0;

echo "<li>Nota 1: $nota1</li>";
echo "<li>Nota 2: $nota2</li>";
echo "<li>Nota 3: $nota3</li>";
echo "</ul>";

$promedio = ($nota1 + $nota2 + $nota3) / 3;

$promedio_formateado = number_format($promedio, 2);
echo "<h3>Promedio Calculado: *$promedio_formateado*</h3>";

if ($promedio >= 9) {
    echo "Aprobado</p>";
} elseif ($promedio >= 6 && $promedio < 9) {
    echo "Aprobo";
} else {
    echo "Reprobo";
}

?>