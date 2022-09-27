<!DOCTYPE html>
<html>

<head>
    <title>Aula 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <pre>
    <?php
    require_once 'Caneta.php';
    $c1 = new Caneta;
    $c1->modelo = 'Bic';
    $c1->cor = 'Preta';
    $c1->ponta = 1.1;
    $c1->carga = 100;
    $c1->tampada = true;
    var_dump($c1);
    ?>
    </pre>
</body>

</html>