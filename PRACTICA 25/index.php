<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar PHP</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <form method="POST">
        <button type="submit" name="ver_tablas">IMPRIMIR TABLAS</button>
    </form>

    <div id="TABLAS">
        <?php
        // Solo ejecutamos la función si se presionó el botón
        if (isset($_POST['ver_tablas'])) {
            TABLAS();
        }

        function TABLAS() {
            $tablaHTML = "<table border='2' style='border-collapse: collapse; text-align: center; margin-top: 20px;'>";
            
            for ($i = 0; $i <= 10; $i++) {
                $tablaHTML .= "<tr>";
                for ($j = 0; $j <= 10; $j++) {
                    $dato = $i * $j;
                    $tablaHTML .= "<td>{$i}x{$j}=<br><b>{$dato}</b></td>";
                }
                $tablaHTML .= "</tr>";
            }
            
            $tablaHTML .= "</table>";
            echo $tablaHTML;
        }
        ?>
    </div>

</body>
</html>