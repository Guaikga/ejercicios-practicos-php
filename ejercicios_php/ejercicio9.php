<?php
echo "=== Serie de Fibonacci ===\n";

$num1 = 0;
$num2 = 1;
$num = 0;
if ($_POST){
$num = $_POST["num"];
echo "</br>" . $num1  . "</br>" . "" . $num2 . "</br>";
if ($num > 2){
for ($i = 3; $i <= $num; $i++) {
    $siguiente = $num1 + $num2;
    
    echo "" . $siguiente . "</br>";
    
    $num1 = $num2;
    $num2 = $siguiente;
}

}
}
echo "\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
    <input type="number" name="num">
    <input type="submit" value="cargar">
    </form>
</body>
</html>