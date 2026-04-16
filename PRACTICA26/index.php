<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas Dinámicas</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form method="POST" action="">
        <label>INTRODUZCA EL NUMERO LIMITE DE LA TABLA DE MULTIPLICAR</label> 
        <input type="text" name="inputU" id="inputU" required>
        
        <div> 
            <button type="submit" name="btn_imprimir">IMPRIMIR</button>
        </div>
    </form>

    <div id="TABLAS">
        <?php
        // 4. Verificamos si se presionó el botón para ejecutar la función
        if (isset($_POST['btn_imprimir'])) {
            TABLAS();
        }

        function TABLAS() {
            // Obtenemos el número del POST
            $num = (int)$_POST['inputU'];
            $tablaHTML = "<table border='2' style='border-collapse: collapse; text-align: center; margin-top: 20px;'>";
            
            for ($i = 0; $i <= $num; $i++) {
                $tablaHTML .= "<tr>";
                for ($j = 0; $j <= 10 ; $j++) {
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