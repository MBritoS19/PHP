<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'resultado';

include 'navbar.php';
?>
    <div class='container-fluid'>
        <h1>Resultado:</h1>
<?php

$n1 = $_GET['num1'];
$n2 = $_GET['num2'];

function soma($primeiro, $segundo,) // vírgula permitida em PHP 8
{
    echo "$primeiro + $segundo = ", $primeiro + $segundo;
}
function subtracao($primeiro, $segundo,) // vírgula permitida em PHP 8
{
    echo "$primeiro - $segundo = ", $primeiro - $segundo;
}
function divisao(&$primeiro, $segundo,) // vírgula permitida em PHP 8
{
    echo "$primeiro / $segundo = ";
    $primeiro = ($primeiro / $segundo);
}
function multiplicacao($vetor) // vírgula permitida em PHP 8
{
    echo "$vetor[0] * $vetor[1] * $vetor[2] = ", $vetor[0] * $vetor[1] * $vetor[2];
}

if(isset($_GET["divisao"]))
{
    $resultado = divisao($n1, $n2);
    echo $n1;
}
if(isset($_GET["soma"]))
{
    $resultado = soma($n1, $n2);
}
if(isset($_GET["subtracao"]))
{
    $resultado = subtracao($n1, $n2);
}
if(isset($_GET["multiplicacao"]))
{
    $vetor = [$_GET['num1'],$_GET['num2'],$_GET['num3']];
    $resultado = multiplicacao($vetor);
}

echo $resultado;
?>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
