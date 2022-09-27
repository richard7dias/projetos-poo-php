<!DOCTYPE html>
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>

<body>
    <?php
    require_once 'Caneta.php';
    $c1 = new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = "0.5";
    $c1->tampada = true;

    $c2 = new Caneta;
    $c2->modelo = 'Bic';
    $c2->cor = 'Preta';
    $c2->ponta = 1.1;
    $c2->carga = 100;

    /*Para visualizar a classe de duas formas:
    var_dump($c1);
    echo '<br>';
    print_r($c1);    //Para true aparece 1, e para false aparece nada
*/

    $c1->destampar();
    $c1->rabiscar();

    $c2->tampar();
    print_r($c2);
    $c2->rabiscar();

    ?>
</body>

</html>