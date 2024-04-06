<html>
<head>
    <title>Login </title>
    <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <style type="text/css">
    #tamanho {
        width: 350px;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);;
    }
    </style>
</head>
<body>

    <center>
        <div class="container" id="tamanho">
            <div style="padding: 10px"><!-- Espaçamento entre objetos feito com padding-->
            <img src="../images/logo_nossaloja.png" width="250px">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label><b>Usuário</b></label>
                    <input type="text" name="email_usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><b>Senha</b></label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha" autocoplete="off" required>
                </div>
                
                <div style="text-align: right;">
                    </br>
                    <button type="submit" id="botao" class="btn btn-primary">Entrar</button>
                    </br>
                </div>
            </div>
            </form>

        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>