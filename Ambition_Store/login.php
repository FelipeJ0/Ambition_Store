<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>

    <style>
        body {
            font-family: arial;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .tela_login {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        #Input_login {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .button {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #fff;
        }

        .button:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
            cursor: pointer;
        }
    </style>
</head>

<body>
    
    <div class="tela_login">
        <h1>Login</h1>
        <form action="testeLogin.php" method="post">
        <input type="text" name="email" placeholder="Email" id="Input_login">
        <br><br>
        <input type="password" name="senha" placeholder="Senha" id="Input_login">
        <br><br>
        <input type="submit" name="submit" value="Entrar" class="button">
        </form>
        <br>
        <a href="formulario.php"><button class="button">Registrar-se</button></a>
        <br><br><br>
        <a href="index.php"><button class="button">Voltar</button></a>
    </div>
</body>

</html>