<html>
<head>
    <title>Usuário Cadastrado com Sucesso </title>
    <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
</head>

<body>
<?php
// _inserir_usuarios.php
include 'conexao.php';
$nome_usuario = $_POST['nome_usuario'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO usuarios (nome_usuario, email, password) VALUES ('$nome_usuario', '$email', '$password')";

$inserir = mysqli_query($conexao, $sql);

?>
<center>
    <h4 style="padding:30">Usuário Cadastrado com Sucesso</h4>
</center>
<center>
    <a href="lista_usuarios.php" class="btn btn-success" >Voltar</a>
</center>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>