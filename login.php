<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="css/estilo_login.css">
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">      
        <h1>Login</h1>
        <div class="inputBox">
        <form action="sistema.php" method="POST" >
        <input type="text" name="email" id="email" placeholder="Email">
        <br><br>
        </div>
        <div class="inputBox"></div>
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" id="submit" value="Entrar"> 
    </div>
</body>
</html>
