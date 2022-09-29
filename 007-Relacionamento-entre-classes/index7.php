<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
    <style>
        main {
            width: 500px;
            margin: auto;
        }
    </style>
</head>

<body>
    <main>
        <h1>Lutadores</h1>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l = array();
        $l[0] = new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1);
        $l[1] = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
        $l[2] = new Lutador('SnapShadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1);
        $l[3] = new Lutador('Richard', 'Brasil', 25, 1.87, 82.4, 6, 2, 2);
        $l[4] = new Lutador('Mikaela', 'Brasil', 26, 1.56, 52.1, 10, 0, 2);
        $l[5] = new Lutador('Boldguy', 'Angola', 38, 1.97, 134.1, 16, 0, 2);
        $l[6] = new Lutador('Cobol', 'Canadá', 25, 1.79, 112.6, 9, 1, 5);

        $ufc = new Luta;
        $ufc->marcarLuta($l[0], $l[1]);
        $ufc->lutar();

        $l[0]->status();
        $l[1]->status(); /*
        $l[2]->status();
        $l[3]->status();
        $l[4]->status();
        $l[5]->status();
        $l[6]->status();
        */
        ?>
    </main>
</body>

</html>