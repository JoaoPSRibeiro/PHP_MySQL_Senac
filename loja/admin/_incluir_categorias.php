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
// _inserir_categorias.php
include 'conexao.php';
$desc_categoria = $_POST['desc_categoria'];
$sql = "INSERT INTO categorias (desc_categoria) VALUES ('$desc_categoria')";

$inserir = mysqli_query($conexao, $sql);

?>
<center>
    <h4 style="padding:30">Categoria Adicionada com Sucesso</h4>
</center>
<center>
    <a href="lista_categorias.php" class="btn btn-success" >Voltar</a>
</center>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>