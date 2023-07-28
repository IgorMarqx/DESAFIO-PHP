<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="create.php" method="POST" class="form-controll">
        <div class="div-controll">
            <div class="input-controll">
                <label for="name">Nome</label>
                <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">

                <?php
                if (isset($_SESSION['name'])) {
                    echo $_SESSION['name'];
                    unset($_SESSION['name']);
                }
                ?>
            </div>

            <div class="input-controll">
                <label for="email">E-mail</label>
                <input type="text" name="email">

                <?php
                if (isset($_SESSION['email'])) {
                    echo $_SESSION['email'];
                    unset($_SESSION['email']);
                }
                ?>
            </div>

            <div class="btn-controll">
                <input class="btn" type="submit" value="Enviar">
            </div>
        </div>
    </form>

</body>

</html>