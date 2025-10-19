<?php
$contador = 0;
if ($_POST){
    $texto = $_POST["texto"];
if (strlen($texto) >= 10 ) {
for ($i = 0; $i < strlen($texto); $i++) {    
    switch ($texto[$i]) {
        case "a":
            $contador++;
            break;
        case "e":
            $contador++;
        break;  
        case "i":
            $contador++;
        break;
        case "o":
            $contador++;
        break;
        case "u":
            $contador++;
        break;
    }
}
echo "la catidad de vocales de $texto es : $contador";
}
else{
    echo "la cantidad de caracteres es menor a 10";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <form action="ejercicio7.php" method="post">
        <input type="text" name="texto" >
        <input type="submit" value="contar">
    </form>
</head>
<body>
    
</body>
</html>