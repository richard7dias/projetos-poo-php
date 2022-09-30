<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
</head>

<body>
    <pre>
        <h1>Escola</h1>
        <?php
        require_once 'Visitante.php';
        require_once 'Professor.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';

        $v1 = new Visitante('Juvenal', 78, 'M');

        $a1 = new Aluno(2048, 'Ciência da programação');
        $a1->setNome('Richard');
        $a1->setIdade(25);
        $a1->setSexo('M');
        $a1->pagarMensalidade();

        $b1 = new Bolsista(true);
        $b1->setNome('Josnelson');
        $b1->setIdade(34);
        $b1->setSexo('M');
        $b1->setMatricula(2047);
        $b1->setCurso('Biblioteconomia');
        $b1->perderBolsa();
        $b1->getBolsa();
        $b1->pagarMensalidade();


        print_r($v1);
        print_r($a1);
        print_r($b1);
        ?>
    </pre>
</body>

</html>