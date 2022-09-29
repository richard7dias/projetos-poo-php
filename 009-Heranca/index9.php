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
        <h1>Dados escolares</h1>
        <?php
        require_once 'PessoaMae.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Pessoa('José', 54, 'M');
        $p2 = new Aluno(2048, 'Psicologia');
        $p3 = new Professor('PHP', 10200);
        $p4 = new Funcionario('POO', true);

        $p2->setNome('Mika');
        $p3->setNome('Richard');
        $p4->setNome('Rogério');

        $p3->receberAum(2000);
        $p4->mudarTrabalho();
        //$p2->cancelarMatr();

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);



        ?>
    </pre>
</body>

</html>