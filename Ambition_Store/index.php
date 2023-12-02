<?php
session_start();
//print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
    <title>Ambition Store</title>
</head>

<body>

    <div class="background">
        
        <header>
            
            <div class="logo">
                <h1>Ambition <br>Games</h1>
            </div>
            <div class="cabeçalho-link">
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Destaques</a>
                </li>
                <li>
                    <a href="#">Em Breve</a>
                </li>
                <li>
                    <a href="#">Contato</a>
                </li>

            </div>
            <div class="icon"><span><ion-icon name="cart-outline"></ion-icon></span></div>
            <div class="meio">
                <a href="login.php"><button>Entrar</button></a>
                <a href="formulario.php"><button>Registrar-se</button></a>
                <a href="sair.php" class="meio"><button>Sair</button></a>
            </div>
            <?php
        echo "<h5>Bem vindo <br><u>$logado</u></h5>";
    ?>
        </header>
        <div class="Meio">
            <h1>JOGOS DE XBOX, PLAYSTATION</h1>
            <h1>E MUITO MAIS</h1>
            <p>Diversos jogos disponíveis no catálogo</p>
            <button>Jogos para XBOX</button>
            <button>Jogos para PLAYSTATION</button>
        </div>

    </div>
    <section>
        <h1>Consoles</h1>
        <div class="container-card-1">
            <div class="cards">
                <img src="Imagens/PS4_icon.png">
            </div>

            <div class="cards">
                <img src="Imagens/PS5_icon.png">
            </div>

            <div class="cards2">
                <img src="Imagens/XBOXONE_icon.png">
            </div>

            <div class="cards2">
                <img src="Imagens/XBOXSERIESXS_icon.png">
            </div>
        </div>


    </section>
    <section class="cta">
        <div class="text-cta">
            <h6>Lançados Recentemente</h6>
            <h4>10% OFF<br>NOVOS JOGOS</h4>
            <a href="#" class="btn">Compre Agora</a>
        </div>
    </section>

    <section>
        <h1>RECEM LANÇADOS</h1>
        <div class="container-jogos">

            <div class="jogos">
                <img src="./Imagens/RE4_game.jpg">
                <p>Resident Evil 4: Remake <b>(PS4)</b></p>
                <h2>R$299,90</h2>
                <ion-icon name="cart-outline"></ion-icon>
            </div>

            <div class="jogos">
                <img src="./Imagens/APTR2_icon.jpg">
                <p>A Pleague Tale: Requiem <b>(XBOX)</b></p>
                <h2>R$299,95</h2>
                <ion-icon name="cart-outline"></ion-icon>
            </div>

            <div class="jogos">
                <img src="./Imagens/Wo-Long_game.jpg">
                <p>Wo Long: Fallen Dynasty <b>(PS5)</b></p>
                <h2>R$459,00</h2>
                <ion-icon name="cart-outline"></ion-icon>
            </div>

            <div class="jogos">
                <img src="./Imagens/HFR_icon.jpg">
                <p>Hi-Fi Rush <b>(XBOX)</b> </p>
                <h2>R$149,95</h2>
                <ion-icon name="cart-outline"></ion-icon>
            </div>
    </section>
    <div class="Marcas">
        <img src="./Imagens/PS4_logo.png" class="transform">
        <img src="./Imagens/PS5_logo2.png" class="transform">
        <img src="./Imagens/XBO_logo.png" class="transform">
        <img src="./Imagens/XboxSeriesX_2019.png" class="transform">

    </div>
    </div>

    <section class="Contato">
        <div class="meio-contato">
            <h3>Ambition Games</h3>
            <h5>Nos envie uma mensagem</h5>
        </div>

        <div class="meio-contato">
            <h3>Explore</h3>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Destaques</a></li>
            <li><a href="#">Em Breve</a></li>
            <li><a href="#">Contato</a></li>
        </div>

        <div class="meio-contato">
            <h3>Outros Serviços</h3>
            <li><a href="#">Preços</a></li>
            <li><a href="#">Frete Grátis</a></li>
            <li><a href="#">Gift Cards</a></li>
        </div>

        <div class="meio-contato">
            <h3>Shopping</h3>
            <li><a href="#">Loja de Jogos</a></li>
            <li><a href="#">Jogos de Tendências</a></li>
            <li><a href="#">Acessórios</a></li>
            <li><a href="#">Ofertas</a></li>
        </div>


    </section>

    <div class="last-text" style="background-color:gray;" >Copyright © 2023 All rights reserved | This template is made with by Felipe & Gustavo</div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>