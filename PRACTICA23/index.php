<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <form method="POST" action="">
        <label>INGRESE SU PESO EN KG: </label> 
        <input type="text" name="peso" required> <div>
            <label>INGRESE SU ESTATURA EN METROS: </label> 
            <input type="text" name="estatura" required>
        </div>
        
        <button type="submit" name="btn_calcular">CALCULAR IMC</button>
    </form>

    <hr>

    <div>
        <label>ESTADO DEL PESO: </label> 
        <strong>
        <?php
        // Verificamos si se envió el formulario
        if (isset($_POST['btn_calcular'])) {
            $kg = (float)$_POST['peso'];
            $estatura = (float)$_POST['estatura'];

            // Evitar división por cero si el campo estatura está vacío o es 0
            if ($estatura > 0) {
                $imc = $kg / ($estatura ** 2);
                $estado = "";

                if ($imc < 18.5) {
                    $estado = "Bajo Peso";
                } elseif ($imc >= 18.5 && $imc <= 24.9) {
                    $estado = "Normal";
                } elseif ($imc >= 25 && $imc <= 29.9) {
                    $estado = "Sobrepreso"; 
                } elseif ($imc >= 30 && $imc <= 34.9) {
                    $estado = "Obesidad I";
                } elseif ($imc >= 35 && $imc <= 39.9) {
                    $estado = "Obesidad II";
                } elseif ($imc >= 40 && $imc <= 49.9) {
                    $estado = "Obesidad III";
                } else {
                    $estado = "Obesidad IV";
                }

                echo $estado . " (IMC: " . round($imc, 2) . ")";
            } else {
                echo "Por favor, ingrese una estatura válida.";
            }
        }
        ?>
        </strong>
    </div>
</body>
</html>