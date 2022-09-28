<!DOCTYPE html>
<html>

<head>
    <title>Aula 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <pre>
    <?php
    require_once 'Classe5.php';
    $c1 = new ContaBanco();
    $c1->abrirConta('CC');
    $c1->setDono('Jubileu');
    $c1->setNumConta(1111);

    $c2 = new ContaBanco();
    $c2->abrirConta('CP');
    $c2->setDono('Creuza');
    $c2->setNumConta(2222);

    $c1->depositar(300);
    $c2->depositar(500);
    $c2->sacar(100);

    $c1->pagarMensal();
    $c2->pagarMensal();

    $c1->sacar(338);
    $c2->sacar(530);

    $c1->fecharConta();
    $c2->fecharConta();

    print_r($c1);
    print_r($c2);
    ?>
    </pre>
</body>

</html>