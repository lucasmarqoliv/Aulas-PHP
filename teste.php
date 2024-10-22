<?php
    $produtoBuscado = $_GET['produto'] ?? '';
    $produtos = [
        ['nome' => 'mac book', 'preco' => 5000],
        ['nome' => 'tablet', 'preco' => 7000],
        ['nome' => 'guitarra lespaul', 'preco' => 8000],
        ['nome' => 'guitarra jackson', 'preco' => 2000],
        ['nome' => 'guitarra fender', 'preco' => 6000],
    ];

    $produtosEncontrados = array_filter($produtos, function($produto) use ($produtoBuscado) {
        return str_contains(
            mb_strtolower($produto['nome']),
            mb_strtolower($produtoBuscado)
        ); 
    });

    // foreach($produtos as $chave => $produto) {
    //     if (!str_contains(
    //         mb_strtolower($produto['nome']),
    //         mb_strtolower($produtoBuscado))
    //     ) {
    //         unset($produtos[$chave]);
    //     }
    // }
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
    <h3 class="container border mt-3">Lista de produtos</h3>
    <form action="" method="get" class="container">
        <div class="form-inline">
            <input type="text" name="produto" class="form-control" placeholder="O que você procura?">
            <div class="col-auto my-1 container ml-2">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>
    <hr>
    <div class="container border mt-4">
    <ul class="list-group ml-2">
        <?php if(count($produtosEncontrados)> 0) :?>
            <?php 
            foreach($produtosEncontrados as $produto) {
                echo '<li>'.$produto['nome']. ' - R$ ' . number_format($produto['preco'],2,',','.').'</li>';
            }
            ?>
            <?php else: ?>
                <div class="alert alert-warning">
                    Não foi encontrado nenhum registro com o termo encontrado: <strong><?php echo $produtoBuscado?></strong>
                </div>
        <?php endif; ?>
    </ul>
    </div>
</body>
</html>




