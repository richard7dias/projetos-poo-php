<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teclado</title>
</head>

<body>
    <h1>Objeto de teclado</h1>
    <?php
    require_once 'Teclado.php';
    $t1 = new Teclado;
    $t1->cor = 'Preto';
    $t1->carga = 100;
    $t1->marca = 'Paraguai';

    $t1->desligar();
    $t1->teclar();
    echo '<br>';
    print_r($t1);
    ?>
</body>

</html>