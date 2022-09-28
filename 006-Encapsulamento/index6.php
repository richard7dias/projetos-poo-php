<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6</title>
    <style>
        main {
            width: 1000px;
            margin: auto;
        }
    </style>
</head>

<body>
    <main>
        <h1>Controle Remoto</h1>
        <?php
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->desligarMudo();
        $c->play();
        $c->pause();

        $c->abrirMenu();
        ?>
    </main>
</body>

</html>