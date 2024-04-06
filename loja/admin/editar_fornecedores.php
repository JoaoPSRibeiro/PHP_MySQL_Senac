<html>
<!-- inserir_fornecedores.php -->
<html>
<head>
  <title>Editar fornecedores</title>
  <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- jquery é uma biblioteca feita em javascript que auxilia o desenvolvedor
      em programação mais avançada. Uma das funções é decodificar o Json --> 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Função em Javascript utilizando o decodificador o jquery
   Essa função pega o CNPJ digitado e executa a API. Em seguida captura os valores
   para dentro dos inputs e o comando para isso é o document.get -->  
    
</head>
<body>
<?php  
include 'menu.php';
include 'conexao.php';
$id_fornecedor = $_GET['id_fornecedor'];
?>
  <div class="container">
  <div class="row">
  <h1>Editar Fornecedores</h1>
  
  <form action="_editar_fornecedores.php" method="post" class="row">
  <?php
            $sql ="SELECT * FROM fornecedores WHERE id_fornecedor = $id_fornecedor";
            $buscar = mysqli_query($conexao, $sql); //Consultamos a categoria desejada
            while($array = mysqli_fetch_array($buscar)) {
                $id_fornecedor =    $array['id_fornecedor'];
                $nome_fornecedor =  $array['nome_fornecedor'];
                $cpf_cnpj =         $array['cpf_cnpj'];
                $cep =              $array['cep'];
                $logradouro =       $array['logradouro'];
                $numero =           $array['numero'];
                $complemento =      $array['complemento'];
                $bairro =           $array['bairro'];
                $cidade =           $array['cidade'];
                $uf =               $array['uf'];
                $email =            $array['email'];
                $celular =          $array['celular'];

                ?>
                <input type="hidden" name="id_fornecedor" value="<?php echo $id_fornecedor?>">
                <label>Nome Cliente / Razão Social</label>
                <input type="text" name="nome_fornecedor" value="<?php echo $nome_fornecedor ?>">
                
            
    <div class="col-12"> 
    <label for="CPF / CNPJ">CPF /CNPJ:</label>
    <input type="text" id="cpf_cnpj" name="cpf_cnpj" maxlength="20" class="form-control" required  value="<?php echo $cpf_cnpj ?>">
    </div>
    <div class="col-12">  
    <label for="Nome Fornecedor / Razão Social" class="form-label">Nome Cliente / Razão Social:</label>
    <input type="text" id="nome_fornecedor" name="nome_fornecedor" class="form-control"  value="<?php echo $nome_fornecedor ?>">    
    </div>
    <div class="col-12"> 
    <label for="cep"  class="form-label">CEP</label>    
    <input type="text" id="cep" name="cep" maxlength="9" pattern="[0-9]{8}" class="form-control" value="<?php echo $cep ?>">
    </div>
    <div class="col-12"> 
    <label for="logradouro" class="form-label">Logradouro:</label>
    <input type="text" id="logradouro" name="logradouro" class="form-control" value="<?php echo $logradouro?>">
    </div>
    <div class="col-12"> 
    <label for="Numero" class="form-label">Numero:</label>
    <input type="text" id="numero" name="numero" class="form-control" value="<?php echo $numero ?>">
    </div>
    <div class="col-12"> 
    <label for="Complemento" class="form-label">Complemento:</label>
    <input type="text" id="complemento" name="complemento" class="form-control" value="<?php echo $complemento?>">
    </div>
    <div class="col-12"> 
    <label for="bairro" class="form-label">Bairro:</label>
    <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $bairro ?>">
    </div>
    <div class="col-12"> 
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo $cidade?>">
    </div>
    <div class="col-12"> 
    <label for="estado">Estado:</label>
    <input type="text" id="uf" name="uf" class="form-control" value="<?php echo $uf ?>">
    </div>
    <div class="col-12"> 
    <label for="estado">E-mail:</label>
    <input type="text" id="email" name="email" class="form-control" value="<?php echo $email ?>">
    </div>    
    <div class="col-12"> 
    <label for="estado">Celular:</label>
    <input type="text" id="celular" name="celular" class="form-control" value="<?php echo $celular ?>">
    </div>  
      
    <div class="col-12">
    </br>    
    <button type="submit" id="botao" class="btn btn-primary">Alterar</button>
    </div>
  </form>
 
  </div>
  </div>
  <?php } ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>