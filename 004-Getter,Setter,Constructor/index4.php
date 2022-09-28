<!DOCTYPE html>
<html>

<head>
    <title>Aula 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <pre>
    <?php
    require_once 'Classe4.php';
    $c1 = new Caneta("FaberCastel", 0.3, "Verde");
    $c1->setModelo('BIC');
    $c1->setPonta(0.5);
    $c1->setCor('Vermelha');
    //Usando set é o único meio para add, se for direto a ponta não vai funcionar por segurança, pois está como privado
    print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}, {$c1->getCor()}.<br>";
    echo '<br>';
    $c2 = new Caneta("BIC Cristal", 0.7, 'Preta');
    print_r($c2);
    ?>
    </pre>
</body>

</html>