<?php
   if(!empty($_GET['id']))
   {
      include_once('config.php');
      
      $id = $_GET['id'];

      $sqlSelect = "SELECT * FROM formulario WHERE id=$id";

      $result = $conexao->query($sqlSelect);

      if($result->num_rows > 0)
      {
         while($key = mysqli_fetch_assoc($result))
         {
            $nome = $key['nome'];
            $email = $key['email'];
            $senha = $key['senha'];
            $cpf = $key['cpf'];
            $telefone =  $key['telefone'];
            $data_nascimento = $key['dt_nascimento'];
         }
         // print_r($nome);
      }
      else
      {
         header ('Location: sistema.php');
      }
   }
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
<a href="sistema.php">Voltar</a> 
   <div class="box">
      <form action="edit_action.php?id= <?= $id ?>" method="POST">
         <fieldset>
            <legend id="titulo"><b>Formulário teste</b></legend>
            <br>
               <div class="inputBox">                
                  <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>"   required>
                  <label for="nome" class="labelInput"> Nome completo</label>                     
               </div>
            <br><br>
               <div class="inputBox">               
                  <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>"required>
                  <label for="email" class="labelInput">Email</label>                         
               </div>
            <br><br>
               <div class="inputBox">               
                  <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
                  <label for="senha" class="labelInput">Senha</label>                         
               </div> 
            <br><br>
               <div class="inputBox">              
                  <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf?>"required>
                  <label for="cpf" class="labelInput">CPF</label>                                   
               </div>
            <br><br>
               <div class="inputBox">                             
                  <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                  <label for="telefone" class="labelInput">Telefone</label>                 
               </div>
            <br><br>
               <div class="inputBox">
                  <label for="dt_nascimento" id="dt"><b>Data de nascimento:</b></label>  
                  <input type="date" name="dt_nascimento" id="dt_nascimento" value="<?php echo $data_nascimento?>"required>
                  <input type="submit" name="update" id="update" value="Enviar">                                
               </div>            
         </fieldset>    
      </form>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      $('#telefone').mask('(00) 00000-0000');
      $('#cpf').mask('000.000.000-00', {reverse: true});
    </script>
   
 </body>
 </html>