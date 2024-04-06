<html>
<html>
    <head>
        <title>Inclusão de Usuários</title>
        <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    </head>
    <body>
        <?php
        include 'menu.php';
        ?>
        
        <div class="container">
        <h2>Inclusão de Usuários</h2>
        <!-- tag FORM é o formlário no HTML, action vai enviar os dados para outra página -->

        <form action="_incluir_usuarios.php" method="post">
            <label>Nome</label>
            <input type="text" name="nome_usuario" class="form-control" required>
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
            <label>Password</label>
            <input type="password" name="password" class="form-control" required><br>
            <button class="btn btn-primary" type="submit" id="botao">Cadastrar</button> 
        </form>
        </div>
            <!-- input é entrada de dados. required, torna obrigatória a digitação -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

    </body>
</html>