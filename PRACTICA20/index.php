<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones PHP</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="num1" placeholder="Número 1">
        <div><input type="text" name="num2" placeholder="Número 2"></div>
        <button type="submit" name="calcular">CALCULAR VALORES</button>
    </form>
    <?php
    if (isset($_POST['calcular'])) {
        
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];

        echo "<div><label>SUMA: </label> " . ($num1 + $num2) . "</div>";
        echo "<div><label>RESTA: </label> " . ($num1 - $num2) . "</div>";
        echo "<div><label>DIVISIÓN: </label> " . ($num2 != 0 ? ($num1 / $num2) : "Error (div entre 0)") . "</div>";
        echo "<div><label>MULTIPLICACIÓN: </label> " . ($num1 * $num2) . "</div>";
        echo "<div><label>EXPONENTE NUMERO 1: </label> " . ($num1 ** 2) . "</div>";
        echo "<div><label>EXPONENTE NUMERO 2: </label> " . ($num2 ** 2) . "</div>";
    }
    ?>
</body>
</html>