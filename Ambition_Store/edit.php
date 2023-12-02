<?php
if (!empty($_GET['id'])) 
{
?>
   <script type="text/javascript">

        var answer1 = confirm("Deseja Editar o Campo?");
        if (answer1 == false) {
          window.location.href = "sistema.php";
        
        }
     </script>       
    
<?php
 }    
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM formulario WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
    
    while($user_data = mysqli_fetch_assoc($result))
    {
    
    $nome = $user_data['nome'];
    $senha = $user_data['senha'];
    $email = $user_data['email'];
    $telefone = $user_data['telefone'];
    $sexo = $user_data['sexo'];
    $data_nasc = $user_data['data_nasc'];
    $cidade = $user_data['cidade'];
    $estado = $user_data['estado'];
    $endereco = $user_data['endereco'];
    }
  
    }
    else{
        header('Location: sistema.php');
    }
    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | FP</title>
    <style>
        body {
    font-family: arial;
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
}

.box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 15px;
    border-radius: 15px;
    width: 20%;
    color: #fff;
}

fieldset {
    border: 3px solid dodgerblue;
}

legend {
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 8px;
}

.inputbox {
    position: relative;
}

.inputUser {
    background: none;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    color: #fff;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}

.inputUser:focus~.labelInput,
.inputUser:valid~.labelInput {
    top: -20px;
    font-size: 12px;
    color: dodgerblue;
}


.labelInput {
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}

#data_nascimento {
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
}




.voltar {
    background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
    width: 90%;
    border: none;
    padding: 15px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
    margin-left: 5%;
    margin-right: 5%;
}

.voltar:hover {
    background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));

}

#update {
    background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}

#update:hover {
    background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));

}
    </style>
</head>

<body>
    <div class="box">
        <form action="saveEdit.php" method="post">
            <fieldset>
                <legend><b>Formulário de Clientes</b>
                </legend>
                <br>

                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Sexo: </p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo($sexo == 'feminino') ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo($sexo == 'masculino') ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '' ?> required>
                <label for="outro">Outro</label>
                <br><br>


                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc?>" required>


                <br><br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade?>" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado?>" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco?>" required>
                    <label for="nome" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="update" id="update">
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id?>">
            </fieldset>

        </form>
        <br>
        <div>
            <a href="sistema.php"><button class="voltar">Voltar</button></a>
        </div>
    </div>
</body>

</html>