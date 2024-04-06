<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
    include 'conexao.php';
    $id_item = $_POST['id_item'];
    $quantidade = $_POST['quantidade'];

    $sql = "select * from carrinho_itens INNER JOIN produtos on carrinho_itens.id_produto = produtos.id_produto where id_item = $id_item";

    $buscar = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($buscar)){
        $preco = $array['preco'];
        $id_carrinho = $array['id_carrinho'];
    }
    $sql = "update carrinho_itens set quantidade = $quantidade, valor_unitario = $preco, valor_total = $quantidade * $preco where id_item = $id_item";

    $alterar = mysqli_query($conexao , $sql);
    ?>

    <center>
        <h3> Item Alterado com sucesso</h3>
        <a href="carrinho.php?id_carrinho=<?php echo($id_carrinho)?>" class="btn btn-primary">Voltar</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>