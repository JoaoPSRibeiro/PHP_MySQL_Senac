<html>
<head>
    <title>Obrigado por se cadastrar!!! </title>
    <link rel="icon" href="Simages/ico_nossaloja.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
</head>

<body>
<?php
// _incluir_fornecedores.php
include 'conexao.php';
$nome_cliente =     $_POST['nome_cliente'];
$cpf_cnpj =         $_POST['cpf_cnpj'];
$cep =              $_POST['cep'];
$logradouro =       $_POST['logradouro'];
$numero =           $_POST['numero'];
$complemento =      $_POST['complemento'];
$bairro =           $_POST['bairro'];
$cidade =           $_POST['cidade'];
$uf =               $_POST['uf'];
$email =            $_POST['email'];
$celular =          $_POST['celular'];
$password =          $_POST['password'];

$sql = "insert into clientes (nome_cliente, cpf_cnpj, cep, logradouro, numero, complemento, bairro, cidade, uf, email, celular, password) VALUES ('$nome_cliente','$cpf_cnpj','$cep', '$logradouro', '$numero', '$complemento','$bairro','$cidade','$uf','$email','$celular', '$password')";

$inserir = mysqli_query($conexao, $sql);
?>
<center>
    <h4>Obrigado por se cadastrar</h4>
</center>
<center>
    <a href="index.php" class="btn btn-success" >Voltar</a>
</center>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>