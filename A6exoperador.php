<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico de operadores</title>
</head>
<body>
    <?php // este exercício mostra preço vai aparecer na url e jogar numa váriavel que vai chamar de preço e mostrar um aumento no preço.
    $preco = $_GET ["p"];
    echo "o preço do produto é R$ $preco ";
    $preco = $preco + ($preco*10/100);
    echo ">br/> o preço com 10% de aumento será R$ $preco ";
    ?>
</body>
</html>