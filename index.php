<?php

// caso o usário clique em sair 
if(isset($_REQUEST['sair'])) {

    unset($SESSION['gescolar_dados_usuario']) // destroi a sessão de autenticação do usuário.
    header("location login.php"); // redireciona para a página de login 
}

// protegendo a página contra acesso sem autenticação
if(!isset($SESSION['gescolar_dados_usuario'])) {
    header("location.php"); // redireciona para o login.
}

// abreviando o nome da variável que contém os dados do usuário.
$usuario = $_SESSION['gescolar_dados_usuario'];

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/estilos.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="global">

            <!-- exibindo o nome do usuario que esta guardado na sessao, com os outros dados -->
            <h1>GESCOLAR <small>, bem-vindo <?= $usuario['nome'] ?> </small> </h1>
           
           <?php include_once 'includes/cabecalho.php' ?>
           
        </div>
    </body>
</html>