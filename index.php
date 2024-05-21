<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>

<body>
    <!-- Escreva um algoritmo que receba um valor, 
    calcule e mostre para o usuário 5% e 50% deste valor.     -->
    <h1>Cálculo de porcentagem de 5% e 50%</h1>
    <label>
        <form method="POST">
            Digite: <input type="text" name="porcento">
            <input type="submit" value="Calcular">
        </form>
    </label>
</body>
<?php
$num = $_POST['porcento'];
$Valor1 = ($num / 100) * 5;
$Valor2 =($num / 100) * 50;
print_r("<br><br>O valor de 5% de ".$num.  " reais  é: ".$Valor1." reais.");
print_r("<br><br>O valor de 50% de ".$num.  " reais  é: ".$Valor2." reais.");
?>

</html>