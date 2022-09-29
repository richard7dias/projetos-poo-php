<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitores</title>
</head>

<body>
    <main>
        <h1>Leitores</h1>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        $p[0] = new Pessoa('Richard', 25, 'M');
        $p[1] = new Pessoa('Mika', 26, 'F');

        $l[0] = new Livro('O Seu Dinheiro', 'Howard Dayton', 196, $p[0]);
        $l[1] = new Livro('Educando para a eternidade', 'George R. Knight', 159, $p[1]);
        $l[2] = new Livro('Princípios na formação da criança', 'Paul Lewis', 207, $p[1]);

        $l[0]->abrir();
        $l[0]->voltarPag();


        $l[1]->abrir();
        $l[1]->folhear(40);
        $l[1]->avancarPag();


        $l[2]->abrir();


        $l[0]->detalhes();
        $l[1]->detalhes();
        $l[2]->detalhes();

        ?>
    </main>
</body>

</html>