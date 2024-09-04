<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'home';

include 'navbar.php';
?>
    <div class='container-fluid'>
        <h1>Home</h1>
            <h2><a class="link-offset-1" href="recebe_numeros_subtracao.php"> Calculadora de Subtração</a></h2>
            <h2><a class="link-offset-1" href="recebe_numeros_soma.php">Calculadora de Soma</a></h2>
            <h2><a class="link-offset-1" href="recebe_numeros_divisao.php">Calculadora de Divisão</a></h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>