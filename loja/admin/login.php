<html>
<head>
    <title>Padrao </title>
    <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
</head>

<body>
    
<?php
session_start(); #inicia a sessão

include 'conexao.php';
$email_usuario = $_POST['email_usuario'];
$senha = $_POST['senha'];
$id_usuario = 0;
$sql = "select * from usuarios where email='$email_usuario' and password='$senha'";

$busca_usuario = mysqli_query($conexao,$sql);
    while ($array = mysqli_fetch_array($busca_usuario)){
        $id_usuario         = $array['id_usuario'];
        $nome_usuario       = $array['nome_usuario'];
        $email_usuario      = $array['email'];
        $senha              = $array['password'];
    }
    if ($id_usuario == 0){
        unset($_SESSION['id_usuario']);
        unset($_SESSION['nome_usuario']);        
        header('location:usuario_reject.php');
    }
    else{
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nome_usuario'] = $nome_usuario;
        header('location:principal.php');
    }
?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>

