<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fórmula General PHP</title>
</head>
<body>
    <form method="POST" action="">
        <label>Ingrese el valor de a:</label> 
        <input type="text" name="A" required>
        
        <div>
            <label>Ingrese el valor de b:</label> 
            <input type="text" name="B" required>
        </div>
        
        <div>
            <label>Ingrese el valor de c:</label> 
            <input type="text" name="C" required>
        </div>
        
        <button type="submit" name="calcular">OBTENER VALORES</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['calcular'])) {
        $A_op = (float)$_POST['A'];
        $B_op = (float)$_POST['B'];
        $C_op = (float)$_POST['C'];
        if ($A_op == 0) {
            echo "El valor de 'a' no puede ser 0.";
        } else {
            $discriminante = $B_op**2 - (4 * $A_op * $C_op);

            if ($discriminante < 0) {
                echo "Las soluciones son imaginarias (discriminante negativo).";
            } else {
                $x1 = (-$B_op - sqrt($discriminante)) / (2 * $A_op);
                $x2 = (-$B_op + sqrt($discriminante)) / (2 * $A_op);

                echo "<div>X1 = <b>$x1</b></div>";
                echo "<div>X2 = <b>$x2</b></div>";
            }
        }
    }
    ?>
</body>
</html>