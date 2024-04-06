<html>
<?php
// editar_produtos.php
include 'menu.php';
include 'conexao.php';
$id_produto = $_GET['id_produto'];
?>

<html>
    <!-- Editar Produtos -->
    <head>
        <title>Editar Produtos</title>
        <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <h2>Alteração de Produtos</h2>
        <!-- tag FORM é o formlário no HTML, action vai enviar os dados para outra página -->

        <form action="_editar_produtos.php" method="post">
            <?php
            $sql ="SELECT * FROM produtos WHERE id_produto = $id_produto";
            $buscar = mysqli_query($conexao, $sql); //Consultamos a categoria desejada
            while($array = mysqli_fetch_array($buscar)) {
                $id_produto         = $array['id_produto'];
                $desc_produto       = $array['desc_produto'];
                $id_categoria       = $array['id_categoria'];
                $id_fornecedor      = $array['id_fornecedor'];
                $preco              = $array['preco'];
                $imagem             = $array['imagem'];
                ?>
                <label>ID. Produto</label>
                <input type="text" name="id_produto" class="form-control" readonly value="<?php echo ($id_produto) ?>">
                <label>Descrição</label><br>
                <input type="text" name="desc_produto" value="<?php echo ($desc_produto) ?>">
                <br>
                <label>Categoria</label>
                    <select name="id_categoria" class="form-control">
                    <?php  
                    $sql = "select * from categorias order by desc_categoria";
                    $busca_categoria = mysqli_query($conexao,$sql);
                    while ($array = mysqli_fetch_array($busca_categoria)) {
                            $id_categoria2 = $array['id_categoria'];
                            $desc_categoria = $array['desc_categoria'];
                            ?>
                        <option value="<?php echo("$id_categoria2") ?>" <?=($id_categoria == $id_categoria2)?'selected':''?>>
                        <?php echo("$desc_categoria") ?></option>
            
                        <?php
                        }
                        ?>
                    </select>   
                    <label>Fornecedor</label>
                    <select name="id_fornecedor" class="form-control">
                    <?php  
                    $sql = "select * from fornecedores order by nome_fornecedor";
                    $busca_fornecedor = mysqli_query($conexao,$sql);
                    while ($array = mysqli_fetch_array($busca_fornecedor)) {
                            $id_fornecedor2 = $array['id_fornecedor'];
                            $nome_fornecedor = $array['nome_fornecedor'];
                            ?>
                        <option value="<?php echo("$id_fornecedor2") ?>" <?=($id_fornecedor == $id_fornecedor2)?'selected':''?>>
                        <?php echo("$nome_fornecedor") ?></option>
            
                        <?php
                        }
                        ?>
                    </select> 
                <label>Preço</label><br>
                <input type="text" name="preco" value="<?php echo ($preco) ?>"><br>
                
                <label>Imagem</label>
                <input type="file" name="imagem" class="form-control" value="<?php echo($imagem)?>">         
                <br/>
                <img src="../images/<?php echo($imagem)?>" width="130px">
                
                <br/>
                

                <button type="submit" id="botao" button type="button" class="btn btn-success">Atualizar</button>
            <?php } ?>
            
        </form>
            <!-- input é entrada de dados. required, torna obrigatória a digitação -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
            </div>
    </body>
</html>