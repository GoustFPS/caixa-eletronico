<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 54px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    $saque = $_POST['saq'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="saq">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saq" id="saq" step="1" require value="<?= $saque ?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis R$100,00, R$50,00, R$10,00 R$5,00</p>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
    $resto = $saque;
    //Saque de 100
    $s100 = floor($resto / 100);
    $resto %= 100;

    //Saque de 50
    $s50 = floor($resto / 50);
    $resto %= 50;

    //Saque de 20
    $s20 = floor($resto / 20);
    $resto %= 20;

    //Saque de 10
    $s10 = floor($resto / 10);
    $resto %= 10;

    //Saque de 5
    $s5 = floor($resto / 5);
    $resto %= 5;

    //Saque de 2
    $s2 = floor($resto / 2);
    $resto %= 2;

    //Saque de 1
    $s1 = floor($resto / 1);
    $resto %= 1;



    ?>
    <section>
        <h2>Saque de R$<?= number_format($saque, 2, ",", ".") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?= $s100 ?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?= $s50 ?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> x<?= $s20 ?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?= $s10 ?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?= $s5 ?></li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"> x<?= $s2 ?></li>
            <li><img src="imagens/1-real.jpg" alt="Moeda de 1 real" class="nota"> x<?= $s1 ?></li>


        </ul>
    </section>

</body>

</html>