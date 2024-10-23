<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <h3 class="container border mt-3 text-center">Lista de produtos</h3>
    <form action="" method="POST" class="container">
        <div class="form-inline">
            <input type="text" name="produto" class="form-control" placeholder="Digite o produto">
            <input type="number" step="any" name="preco" class="form-control mt-2" placeholder="Digite o preço">
            <div class="col-auto my-1 container ml-2">
                <button type="submit" class="btn btn-primary mt-1">Adicionar</button>
            </div>
        </div>
    </form>
    <hr>
    <div class="container border mt-4">
    <ul class="list-group ml-2">
            <?php
                $arquivo = 'texto.txt';
                if (file_exists($arquivo)) {
                    $conteudo = file_get_contents($arquivo);
                    $produtos = json_decode($conteudo, true);
                } else {
                    $produtos = [
                        ['nome' => 'mac book', 'preco' => 5000],
                        ['nome' => 'tablet', 'preco' => 7000],
                        ['nome' => 'guitarra lespaul', 'preco' => 8000],
                        ['nome' => 'guitarra jackson', 'preco' => 2000],
                        ['nome' => 'guitarra fender', 'preco' => 6000],
                    ];
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $novo_produto = [
                        'nome' => $_POST['produto'],
                        'preco' => $_POST['preco']
                    ];
                    array_push($produtos, $novo_produto);

                    $arquivoJSON = json_encode($produtos, JSON_PRETTY_PRINT);
                    file_put_contents($arquivo, $arquivoJSON);
                }

                foreach ($produtos as $produto) {
                    echo '<li>'.$produto['nome']. ' '.'R$' .' '. number_format($produto['preco'],2,',','.'). ' '.'<a href="">Excluir</a></li>';
                }
            ?>
    </ul>
    </div>
</body>
</html>




