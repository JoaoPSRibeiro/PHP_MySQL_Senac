<!DOCTYPE html>
<html lang="pt-BR">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
    <script>
    function consultarCNPJ() {
        var cnpj = document.getElementById('cnpj').value;
        var url = 'https://www.receitaws.com.br/v1/cnpj/' + cnpj;
 
        // Consulta o CNPJ
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'jsonp',
            crossDomain: true,
            success: function(data) {
                if (data.status === 'OK') {
                    document.getElementById('razao_social').value = data.nome;
                    document.getElementById('cep').value = data.cep;
                    document.getElementById('logradouro').value = data.logradouro;
                    document.getElementById('numero').value = data.numero;
                    document.getElementById('complemento').value = data.complemento;
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.municipio;
                    document.getElementById('uf').value = data.uf;
                    document.getElementById('email').value = data.email;
                    document.getElementById('telefone').value = data.telefone;

                } else {
                    alert('CNPJ não encontrado ou inválido.');
                }
            },
            error: function() {
                alert('Erro ao consultar CNPJ. Por favor, tente novamente mais tarde.');
            }
        });
    }
    </script>
</head>
 
<body>
    <?php  
    include 'menu.php'
    ?>
    <div class="container">
        <h1>Inclusão de fornecedores</h1>
 
        <form action="_incluir_fornecedores.php" method="post">
            <p>Para testar: 03709814000198</p>
            <label for="CNPJ">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" maxlength="20" class="form-control" required>
            <br>
            <div>
                <button type="button" class="btn btn-dark" onclick="consultarCNPJ()">Consultar</button>
            </div>
 
            <br>
            <label for="Razão Social" class="form-label">Razão Social:</label>
            <input type="text" id="razao_social" name="razao_social" class="form-control">
 
            <br>
            <label for="CEP" class="form-label">Cep:</label>
            <input type="text" id="cep" name="cep" class="form-control">
 
            <br>
            <label for="logradouro" class="form-label">Logradouro:</label>
            <input type="text" id="logradouro" name="logradouro" class="form-control">
 
            <br>
            <label for="Numero" class="form-label">Numero:</label>
            <input type="text" id="numero" name="numero" class="form-control">
 
            <br>
            <label for="Complemento" class="form-label">Complemento:</label>
            <input type="text" id="complemento" name="complemento" class="form-control">
            <!-- readonly -->
 
            <br>
            <label for="bairro" class="form-label">Bairro:</label>
            <input type="text" id="bairro" name="bairro" class="form-control">
 
            <br>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" class="form-control">
 
            <br>
            <label for="estado">Estado:</label>
            <input type="text" id="uf" name="uf" class="form-control">
            <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control">
            <br>

            <label for="celular">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control">
            <br>
            <button type="submit" id="botao" class="btn btn-dark">Incluir</button>
 
        </form>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
 
</html>