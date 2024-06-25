<?php
$BASE_URL = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Codar!</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
  <script src="./scripts/mobilemenu.js" defer></script>
</head>

<body>

  <header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a href="<?= $BASE_URL ?>" id="logo" class="navbar-item">
          <img src="<?= $BASE_URL ?>img/logo.svg" alt="Logo" width="64px" height="64px">
        </a>

        <!-- TODO: Fazer o menu lateral mobile -->
        <button class="navbar-burger" role="button" aria-label="menu" aria-expanded="true" id="hamburguer-menu">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <!--  -->
        </button>
      </div>
      <ul class="navbar-menu">
        <div class="navbar-start">
          <li class="navbar-item"><a href="<?= $BASE_URL ?>">Inicio</a></li>
          <li class="navbar-item"><a href="#">Categorias</a></li>
          <li class="navbar-item"><a href="#">Sobre</a></li>
        </div>
        <div class="navbar-end">
          <!-- navbar items -->
          <li class="navbar-item"><a href="<?= $BASE_URL ?>contato.php">Contato</a></li>
        </div>
      </ul>
    </nav>
  </header>