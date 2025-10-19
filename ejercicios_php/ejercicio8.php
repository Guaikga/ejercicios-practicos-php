<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
</head>
<body>
    <div>
        <h1>Sistema de Inventario</h1>
        
        <?php
        // Array asociativo $inventario con productos y cantidades
        $inventario = [
            "Leche" => 15,
            "Pan" => 30,
            "Arroz" => 8,
            "Azúcar" => 25,
            "Aceite" => 5,
            "Harina" => 12,
            "Café" => 3,
            "Pasta" => 20,
            "Sal" => 7,
            "Mantequilla" => 18
        ];
        
        echo "<div>";
        echo "<h2>Estado del Inventario</h2>";
        
        // Recorrer el array con foreach
        foreach ($inventario as $producto => $cantidad) {
            if ($cantidad <= 10) {
                // Stock bajo - mostrar alerta
                echo "<div style='border: 1px solid red;'>";
                echo "<span><strong> $producto </strong></span>";
                echo "<span >Stock: $cantidad unidades</span>";
                echo "<p style='color: #dc3545; font-weight: bold;'>!!ALERTA!!: Stock bajo</p>";

                echo "</div>";

                
            } else {
                // Stock normal
                echo "<div>";
                echo "<span><strong> $producto: </strong></span>";
                echo "<span> $cantidad unidades</span>";
                echo "</div>";
            }
        }
        
        echo "</div>";
        ?>
        
        <div>
            <p><strong>By:</strong> <?php echo "Eduardo y compañia"; ?></p>
        </div>
    </div>
</body>
</html>