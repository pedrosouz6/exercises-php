<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $mult = $num1 * $num2;
    $divi = $num1 / $num2;
    $expo = $num1 ^ $num2;
    $resto = $num1 % $num2;   
?>   

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos</title>
    <link rel="stylesheet" href="./results.css">
</head>
<body>
    <main>
        <section>
            <h1>Cálculos</h1>
            <article>

                <p>O valor da <strong>soma</strong> é: <?php echo $soma ?></p>
                <p>O valor da <strong>subtração</strong> é: <?php echo $sub ?></p>
                <p>O valor da <strong>multiplicação</strong> é: <?php echo $mult ?></p>
                <p>O valor da <strong>divisão</strong> é: <?php echo $divi ?></p>
                <p>O valor da <strong>exponenciação</strong> é: <?php echo $expo ?></p>
                <p>O valor do <strong>resto</strong> é: <?php echo $resto ?></p>
                
            </article>
            <table>
                <thead>
                    <tr>
                        <td>Soma</td>
                        <td>Subtração</td>
                        <td>Multiplicação</td>
                        <td>Divisão</td>
                        <td>Exponenciação</td>
                        <td>Resto</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $soma ?></td>
                        <td><?php echo $sub ?></td>
                        <td><?php echo $mult ?></td>
                        <td><?php echo $divi ?></td>
                        <td><?php echo $expo ?></td>
                        <td><?php echo $resto ?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>  