<?php

include_once('config.php');
//print_r($_SESSION);

$sql = "SELECT * FROM formulario ORDER BY id DESC";

$result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SISTEMA</title>
    <script type="text/javascript">

        function Confirm(){
        var answer = alert("Campo Apagado");
    }

    </script>
    <style>
        body {
            font-family: arial;
            color: #fff;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .table-br{
            background: rgba(0,0,0, 0.3);
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <h3>SISTEMA</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        
        <div style="justify-content:space-around; position:center; display:flex; margin-right:20px;">
            <div>
                <span id="horas" style="font-weight: bold;font-size: 30px;">00</span>
                <span class="tempo">Horas</span>
            </div>

            <div>
                <span id="minutos" style="font-weight: bold;font-size: 30px;">00</span>
                <span class="tempo">Minutos</span>
            </div>

            <div>
                <span id="segundos" style="font-weight: bold;font-size: 30px;">00</span>
                <span class="tempo">Segundos</span>
            </div>

            
            <script src="JS\script.js"></script>
        </div>
    </nav>
    <br>      
    
    <div class="m-5">
    <table class="table text-white table-br">
  <thead>
    <tr>
      
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Senha</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Gênero</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Endereço</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['senha']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['sexo']."</td>";
                echo "<td>".$user_data['data_nasc']."</td>";
                echo "<td>".$user_data['cidade']."</td>";
                echo "<td>".$user_data['estado']."</td>";
                echo "<td>".$user_data['endereco']."</td>";
                echo "<td>
                    <a class='btn btn-sm btn-primary'  href='edit.php?id=$user_data[id]'>
                    
                    
                    
                    
                    <svg xmlns='ttp://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </svg>
                    </a>
                    <a class='btn btn-sm btn-danger' onclick = 'Confirm()' href='delete.php?id=$user_data[id]' title='Deletar'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
                    <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
                    </svg>
                    </a>
                    </td>";
                echo "</tr>";
            }


        ?>
  </tbody>
</table></div>
</body>
</html>