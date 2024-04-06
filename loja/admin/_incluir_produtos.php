<html>
<head>
    <title>Categoria Adicionada com Sucesso </title>
    <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
</head>

<body>
<?php
// _incluir_produtos.php
include 'conexao.php';
$desc_produto               = $_POST['desc_produto'];
$id_categoria               = $_POST['id_categoria'];
$id_fornecedor              = $_POST['id_fornecedor'];
$preco                      = $_POST['preco'];
$imagem                     = $_POST['imagem'];

$sql = "insert into produtos (desc_produto, id_categoria,  id_fornecedor, preco, imagem) values ( '$desc_produto', '$id_categoria', '$id_fornecedor', '$preco','$imagem')";

$inserir = mysqli_query($conexao, $sql);
?>
<center>
    <h4>Produto Adicionado com Sucesso</h4>
    <a href="lista_produtos.php" class="btn btn-success" >Voltar</a>
</center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>