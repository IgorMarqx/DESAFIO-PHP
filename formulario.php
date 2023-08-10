<?php
   include_once('config.php');

   if(isset($_POST['submit']))
   // {
   //    print_r('Nome: ' . $_POST['nome']);
   //    print_r('<br>');
   //    print_r('Email: ' . $_POST['email']);
   //    print_r('<br>');
   //    print_r('CPF: ' . $_POST['cpf']);
   //    print_r('<br>');
   //    print_r('Telefone: ' . $_POST['telefone']);
   //    print_r('<br>');
   //    print_r('Data de nascimento: ' . $_POST['data de nascimento']);
   // }
    
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $cpf = $_POST['cpf'];
      $telefone =  $_POST['telefone'];
      $data_nascimento = $_POST['dt_nascimento'];
      $oldbirth = explode('/', $data_nascimento);
      $newbirth = implode('-', array_reverse($oldbirth));

      $result = mysqli_query($conexao, "INSERT INTO formulario (nome, email, senha, cpf, telefone, dt_nascimento) VALUES ('$nome', '$email', '$senha', '$cpf', '$telefone', '$newbirth')");

      $sql = "INSERT INTO formulario (nome, email, senha, cpf, telefone, dt_nascimento) VALUES ('$nome', '$email', '$cpf', '$telefone', '$newbirth')";
      
   // }
   $sql = "formulario.php";
   $result = $conexao->query ($sql);
   print_r($result); 
?> 

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>
<body> 
<a href="home.php">Voltar</a> 
   <div class="box">
      <form action="formulario.php" method="POST">
         <fieldset>
            <legend id="titulo"><b>Formulário teste</b></legend>
            <br>
               <div class="inputBox">                
                  <input type="text" name="nome" id="nome" class="inputUser"    required>
                  <label for="nome" class="labelInput"> Nome completo</label>                     
               </div>
            <br><br>
               <div class="inputBox">               
                  <input type="text" name="email" id="email" class="inputUser" required>
                  <label for="email" class="labelInput">Email</label>                         
               </div>
            <br><br>
               <div class="inputBox">               
                  <input type="password" name="senha" id="senha" class="inputUser" required>
                  <label for="senha" class="labelInput">Senha</label>                         
               </div> 
            <br><br>
               <div class="inputBox">              
                  <input type="text" name="cpf" id="cpf" class="inputUser" required>
                  <label for="cpf" class="labelInput">CPF</label>                                   
               </div>
            <br><br>
               <div class="inputBox">                             
                  <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                  <label for="telefone" class="labelInput">Telefone</label>                 
               </div>
            <br><br>
               <div class="inputBox">
                  <label for="dt_nascimento" id="dt"><b>Data de nascimento:</b></label>  
                  <input type="date" name="dt_nascimento" id="dt_nascimento" required>                          
                  <input type="submit" name="submit" id="submit" value="Enviar">                                
               </div>            
         </fieldset>   
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      $('#telefone').mask('(00) 00000-0000');
      $('#cpf').mask('000.000.000-00', {reverse: true});
    </script>
   
 </body>
 </html>