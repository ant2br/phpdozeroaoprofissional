<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Classificados</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="./" class="navbar-brand">Classificados</a>
            </div>
            <div class="navbar-collapse collapse justify-content-between">
                <ul class="navbar-nav ml-auto">
                    <?php  if ( isset($_SESSION['cLogin']) && !(empty($_SERVER['cLogin']))) : ?>
                    <li class="nav-item"><a href="" class="nav-link">Meus anúncios</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Sair</a></li>
                    <?php else:?>
                    <li class="nav-item"><a href="cadastro.php" class="nav-link">Cadastrar</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Entrar</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>