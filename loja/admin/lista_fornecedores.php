<html>
<head>
    <title>Lista de Fornecedores</title>
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
    <a href="incluir_fornecedores.php" button type="button" class="btn btn-success">Incluir</a>
    

    <br>
    <table class="table table-hover">
        <thead> 
        <tr>
            <th>ID. Fornecedor</th>
            <th>Nome Fornecedor</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
            <?php
            // Comentário PHP
            # Comentário 
            /* Comentário
            em 
            várias 
            linhas
            */
                $sql = "select * from fornecedores";
                $busca_fornecedor = mysqli_query($conexao, $sql);
                while($array = mysqli_fetch_array($busca_fornecedor)){
                    $id_fornecedor = $array['id_fornecedor'];
                    $nome_fornecedor = $array['nome_fornecedor'];
                
            ?>
            <tr>
                <td><?php echo $id_fornecedor ?></td>
                <td><?php echo $nome_fornecedor ?></td>
                <td><a href="editar_fornecedores.php?id_fornecedor=<?php echo $id_fornecedor ?>" button type="button" class="btn btn-warning">Editar</a></td>
            </tr>
            <?php } ?>
        </tbody> 
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
                </div>
</body>
</html>