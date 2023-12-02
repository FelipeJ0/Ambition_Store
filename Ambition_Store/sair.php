<?php

session_start();

unset($_SESSION['email']);
unset($_SESSION['senha']);



// Apaga todas as variáveis e encerra a sessão
session_destroy();
header('Location: login.php');


    //unset($_SESSION['email']);
    //unset($_SESSION['senha']);

    //header('Location: login.php');

?>