
<html>
<?php
// editar_categorias.php
include 'menu.php';
include 'conexao.php';
$id_categoria = $_GET['id_categoria'];
?>

<html>
    <!-- Editar Categorias -->
    <head>
        <title>Editar  Categorias</title>
        <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <h2>Alteração de Categorias</h2>
        <!-- tag FORM é o formlário no HTML, action vai enviar os dados para outra página -->

        <form action="_editar_categorias.php" method="post">
            <?php
            $sql ="SELECT * FROM categorias WHERE id_categoria = $id_categoria";
            $buscar = mysqli_query($conexao, $sql); //Consultamos a categoria desejada
            while($array = mysqli_fetch_array($buscar)) {
                $id_categoria = $array['id_categoria'];
                $desc_categoria = $array['desc_categoria'];
                ?>
                <input type="hidden" name="id_categoria" value="<?php echo $id_categoria?>">
                <label>Descrição</label>
                <input type="text" name="desc_categoria" value="<?php echo $desc_categoria ?>">
                <button type="submit" id="botao" button type="button" class="btn btn-success">Atualizar</button>
            <?php } ?>
            
        </form>
            <!-- input é entrada de dados. required, torna obrigatória a digitação -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

    </body>
</html>