<html>
<!-- registro.php -->
<head>
    <title>Nossa Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
    function consultarCEP() {
      var cep = document.getElementById('cep').value;
      
      // Verifica se o CEP possui apenas números
      if (!cep.match(/^[0-9]+$/)) {
        alert('O CEP deve conter apenas números.');
        return;
      }
      
      // Consulta o CEP no ViaCEP
      $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function(data) {
        if (!data.erro) {
          document.getElementById('logradouro').value = data.logradouro;
          document.getElementById('bairro').value = data.bairro;
          document.getElementById('cidade').value = data.localidade;
          document.getElementById('uf').value = data.uf;
        } else {
          alert('CEP não encontrado.');
        }
      });
    }
  </script>	

</head>
<body> 
<div class="container">
<?php
      include 'menu.php';
      include 'conexao.php';
?>

<form action="_registro.php" method="post">
  <div class="row mb-12">
    <div class="col-6">
        <label class="form-label" >Nome</label>
        <input type="text" name="nome_cliente" id="nome_cliente" class="form-control" required/>
    </div>
    <div class="col-6">
        <label class="form-label" >CPF - CNPJ</label>
        <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control" required/>
    </div>
  
    <div class="col-6">
        <label class="form-label" >CEP</label>
        <input type="text" name="cep" id="cep" class="form-control" required/>
    </div>
  
    <div class="col-6">
        <label class="form-label" >Endereço</label>
        <input type="text" name="logradouro" id="logradouro" class="form-control" required/>
    </div>

    <div class="col-6">
        <label class="form-label" >Número</label>
        <input type="text" name="numero" id="numero" class="form-control" required/>
    </div>
 
    <div class="col-6">
        <label class="form-label" >Complemento</label>
        <input type="text" name="complemento" id="complemento" class="form-control" />
    </div>
 
    <div class="col-6">
        <label class="form-label" >Bairro</label>
        <input type="text" name="bairro" id="bairro" class="form-control" required/>
    </div>
 
    <div class="col-6">
        <label class="form-label" >Cidade</label>
        <input type="text" name="cidade" id="cidade" class="form-control" required/>
    </div>
 
    <div class="col-6">
        <label class="form-label" >Estado</label>
        <input type="text" name="uf" id="uf" class="form-control" required/>
    </div>
  
    <div class="col-6">
        <label class="form-label" >Celular</label>
        <input type="text" name="celular" id="celular" class="form-control" required/>
    </div>

    <div class="col-6">
        <label class="form-label" >Email</label>
        <input type="email" name="email" id="email" class="form-control" required/>
    </div>
  
    <div class="col-6">
        <label class="form-label" >Password</label>
        <input type="password" name="password" id="password" class="form-control" required/>
    </div>
  
    <div class="col-6">
        <label class="form-label" >Confirme Password</label>
        <input type="password" name="password2" id="password2" class="form-control" oninput="validaSenha(this)" required/>
    </div>
  </div>
 <br>
 
  <!-- Submit button -->
  <button  type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<script>
    function validaSenha(input){
        if (input.value != document.getElementById('password').value){
            input.setCustomValidity('Repita s senha Corretamente');
        } else{
            input.setCustomValidity('');
        }
    }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
</body>
</html>