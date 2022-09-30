<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobrepondo métodos</title>
</head>

<body>
    <pre>
        <h1>Animais</h1>
        <?php
        require_once 'Mamifero.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';

        $m1 = new Mamifero('Cachorro', 12, 4);
        $m1->setCorPelo('Preto');
        print_r($m1);
        $m1->locomover();
        $m1->alimentar();
        $m1->emitirSom();

        $p1 = new Peixe('Palhaço', 3, 1);
        $p1->setCorEscama('Listrada');
        print_r($p1);
        $p1->soltarBolha();
        $p1->locomover();
        $p1->alimentar();
        $p1->emitirSom();

        $a1 = new Ave('Canarinho', 23, 2);
        $a1->setCorPena('Amarelo');
        print_r($a1);
        $a1->fazerNinho();
        $a1->locomover();
        $a1->alimentar();
        $a1->emitirSom();

        ?>
    </pre>
</body>

</html>