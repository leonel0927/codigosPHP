<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha con PHP</title>
</head>
<body>
    <label>FECHA ACTUAL: </label> 
    <strong>
        <?php
        $dia = "";
        $mes = "";
        $year = (int)date('Y'); 

        // date('w') da 0-6 (Domingo a Sábado)
        $dia_semana = (int)date('w'); 
        // date('n') da 1-12, restamos 1 para mantener tu lógica de 0-11
        $mes_actual = (int)date('n') - 1; 

        switch ($dia_semana) {
            case 0: $dia = "Domingo"; break;
            case 1: $dia = "Lunes"; break;
            case 2: $dia = "Martes"; break;
            case 3: $dia = "Miercoles"; break;
            case 4: $dia = "Jueves"; break;
            case 5: $dia = "Viernes"; break;
            case 6: $dia = "Sabado"; break;
        }

        switch ($mes_actual) {
            case 0: $mes = "Enero"; break;
            case 1: $mes = "Febrero"; break;
            case 2: $mes = "Marzo"; break;
            case 3: $mes = "Abril"; break;
            case 4: $mes = "Mayo"; break;
            case 5: $mes = "Junio"; break;
            case 6: $mes = "Julio"; break;
            case 7: $mes = "Agosto"; break;
            case 8: $mes = "Septiembre"; break;
            case 9: $mes = "Octubre"; break;
            case 10: $mes = "Noviembre"; break;
            case 11: $mes = "Diciembre"; break;
            default: $mes = "Mes desconocido";
        }

        $diaN = (int)date('j'); 
        $fecha = "Hoy es " . $dia . " " . $diaN . " de " . $mes . " del año " . $year;

        echo $fecha;
        ?>
    </strong>
</body>
</html>