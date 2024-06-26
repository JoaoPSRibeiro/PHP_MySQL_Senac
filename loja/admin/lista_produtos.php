<html>
<head>
    <title>Lista de Produtos</title>
    <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
</head>
<!-- Isso é cpomentário no HTML -->
<body>
    
    <?php
    include 'menu.php';
    include 'conexao.php';
    ?>
    <div class="container">
    <a href="incluir_produtos.php" button type="button" class="btn btn-success">Incluir</a>
    
    <br>
    <table class="table table-hover">
        <thead> 
        <tr>
            <th>ID. Produto</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Fornecedor</th>
            <th>Preço</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $sql = "select * from produtos  INNER JOIN categorias on produtos.id_categoria = categorias.id_categoria INNER JOIN fornecedores on produtos.id_fornecedor = fornecedores.id_fornecedor order by produtos.desc_produto";
                $busca_produto = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($busca_produto)){
                    $id_produto             = $array['id_produto'];
                    $desc_produto           = $array['desc_produto'];
                    $preco                  = $array['preco'];
                    $desc_categoria         = $array['desc_categoria'];
                    $nome_fornecedor        = $array['nome_fornecedor'];
                
            ?>
            <tr>
                <td><?php echo $id_produto ?></td>
                <td><?php echo $desc_produto ?></td>
                <td><?php echo $preco ?></td>
                <td><?php echo $desc_categoria ?></td>
                <td><?php echo $nome_fornecedor ?></td>

                <td><a href="editar_produtos.php?id_produto=<?php echo $id_produto ?>" button type="button" class="btn btn-warning">Editar</a></td>
            </tr>
            <?php } ?>
        </tbody> 
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    </div>
</body>
</html>