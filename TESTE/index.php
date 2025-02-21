<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="Formulario1" method = 'POST'>
        <div>
            <label for="valor1">Valor A</label>
            <input type="number" step = "any" name="valor1" id="valor1">
        </div>
        <div>
            <label for="valor2">Valor B</label>
            <input type="number" step = "any" name="valor2" id="valor2">
        </div>
        <div>
            <label for="valor3">Valor C</label>
            <input type="number" step = "any" name="valor3" id="valor3">
        </div>

        <input id ='submit' type="submit" value="Calcular">
    </form>

    <?php

        if (isset($_POST['valor1'])){
            $valor1 = $_POST['valor1'] ?: 0;
            $valor2 = $_POST['valor2'] ?: 0;
            $valor3 = $_POST['valor3'] ?: 0;

            $resultado= $valor1+ $valor2+ $valor3;

                if ($valor1 > 10) {
                    echo "<H1 style = 'color: blue'>$valor1 + $valor2 + $valor3 = $resultado</H1>";
                }
                else if ($valor2 < $valor3){
                    echo "<H1 style = 'color: green'>$valor1 + $valor2 + $valor3 = $resultado</H1>";
                }
                else if ($valor3 < $valor1 and $valor3 < $valor2){
                    echo "<H1 style = 'color: red'>$valor1 + $valor2 + $valor3 = $resultado</H1>";
                }
                else {
                    echo "<H1 style = 'color: orange'>$valor1 + $valor2 + $valor3 = $resultado</H1>";   
                }
        };
    ?>
</body>
</html>