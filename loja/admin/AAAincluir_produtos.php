<!-- inserir_fornecedores.php -->
<html>
<head>
  <title>Inclusão de Produtos</title>
  <link rel="icon" href="images/ico_nossaloja.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- jquery é uma biblioteca feita em javascript que auxilia o desenvolvedor
      em programação mais avançada. Uma das funções é decodificar o Json --> 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Função em Javascript utilizando o decodificador o jquery
   Essa função pega o CNPJ digitado e executa a API. Em seguida captura os valores
   para dentro dos inputs e o comando para isso é o document.get -->
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    
    
    
</head>
<body>
<?php  
include 'menu.php'
?>
  <div class="container">
  <div class="row">
  <h1>Inclusão de Produtos</h1>
  <br>
  <form action="_incluir_fornecedores.php" method="post" class="row">
  
    <div class="col-12">  
    <label for="produto" class="form-label">Produto</label>
    <input type="text" id="id_produto" name="id_produto" class="form-control">    
    </div>
    <div class="col-12"> 
    <label for="cep"  class="form-label">CEP</label>    
    <input type="text" id="cep" name="cep" maxlength="9" pattern="[0-9]{8}" class="form-control" onblur="consultarCEP()" required>
    </div>
    <div class="col-12"> 
    <label for="logradouro" class="form-label">Logradouro:</label>
    <input type="text" id="logradouro" name="logradouro" class="form-control">
    </div>
    <div class="col-12"> 
    <label for="Numero" class="form-label">Numero:</label>
    <input type="text" id="numero" name="numero" class="form-control">
    </div>
    <div class="col-12"> 
    <label for="Complemento" class="form-label">Complemento:</label>
    <input type="text" id="complemento" name="complemento" class="form-control">
    </div>
    <div class="col-12"> 
    <label for="bairro" class="form-label">Bairro:</label>
    <input type="text" id="bairro" name="bairro" class="form-control">
    </div>
    <div class="col-12"> 
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" class="form-control">
    </div>
    <div class="col-12"> 
    <label for="estado">Estado:</label>
    <input type="text" id="uf" name="uf" class="form-control">
    </div>
    <div class="col-12"> 
    <label for="estado">E-mail:</label>
    <input type="text" id="email" name="email" class="form-control">
    </div>    
    <div class="col-12"> 
    <label for="estado">Celular:</label>
    <input type="text" id="celular" name="celular" class="form-control">
    </div>  
      
    <div class="col-12">
    </br>    
    <button type="submit" id="botao" class="btn btn-primary">Incluir</button>
    </div>
  </form>
 
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>