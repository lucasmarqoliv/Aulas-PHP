<?php

$produtos = [
    ['nome' => 'armario', 'preco' => 2200],
    ['nome' => 'mesa', 'preco' => 1500],
    ['nome' => 'cadeira', 'preco' => 600],
    ['nome' => 'sofa', 'preco' => 2500],
    ['nome' => 'TV', 'preco' => 3200],
    ['nome' => 'Rack', 'preco' => 1000],
];

$arquivo = 'texto.txt';

$conteudo = file_get_contents($arquivo);
$produtos = json_decode($conteudo, true);

$acao = $_GET['acao'] ?? '';
$produto = $_GET['produto'] ?? '';

if ($acao == 'excluir') {
    if ($produto != '') {

        foreach ($produtos as $chave => $item) {
            if ($item['nome'] == $produto) {
                unset ($produtos[$chave]);
                file_put_contents($arquivo, json_encode($produtos));
            }
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeNovoProduto = $_POST['nome'] ?? ''; 
    $precoNovoProduto = $_POST['preco'] ?? '';

    $produtos[] = [
        'nome' => $nomeNovoProduto,
        'preco' => $precoNovoProduto
    ];

    file_put_contents($arquivo, json_encode($produtos));

    header('Location: '. $_SERVER['PHP_SELF']);
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <h3 class="text-center">Bem vindo!</h3>
    <form action="" method="post" class="container form-group form-inline d-block">
        <input type="text" name="nome" placeholder="Nome do produto">
        <input type="number" step="any" name="preco" placeholder="Preço do produto">
        <input type="submit" name="botao">
    </form>
    <ul class="container border pl-4">
        <?php foreach($produtos as $produto): ?>
        <li>
        <?php echo $produto['nome']; ?> -
        R$ <?php echo number_format($produto['preco'], 2, ',','.');?>
        <a href="?acao=excluir&produto=<?php echo $produto['nome'];?>">Excluir</a>
        </li>
        <?php endforeach;?>
    </ul>
</body>
</html>

