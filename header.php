<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="robots" content="index,follow">
  <meta name="copyright" content="Renato Comarú">

  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico">

  <!-- Google Tag Manager -->

  <!-- End Google Tag Manager -->

  <title>Hotel Para Cachorro</title>

  <?php wp_head(); ?>
</head>


<body>
  <header>
    <div class="content">
      <div class="top-header">
        <div class="left-header">
          <img class="pin" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/pin.png" alt="png de Localização">
          <p>Rua Luiz Afonso, 348, Cidade Baixa, Porto Alegre</p>
        </div>
        <div class="right-header">
          <img class="phone" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/phone.png" alt="png de Telefone">
          <p>Ligue para gente (51) 99157 2604</p>
        </div>
      </div>
    </div> <!-- Fim do primeiro Header -->

    <div class="divider"></div>

    <div class="content1">
      <div class="main-header">
        <div class="logo">
          <a href="<?php bloginfo('url'); ?>#Home">
            <img class="dani-logo desktop-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logos/Daniel-Dogs-Extend.png" alt="Logo do Hotel para Cachorro">
            <img class="dani-logo mobile-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logos/Daniel-Dogs-Simples.png" alt="Logo do Hotel para Cachorro para dispositivos móveis">
          </a>
        </div>

        <div class="menu">
          <a href="#Home">Home</a>
          <a href="#About">Sobre nós</a>
          <a href="#Functioning">Funcionamento</a>
          <a href="#Price">Preços</a>
          <a href="#Contact">Contato</a>
        </div>
      </div>
    </div><!-- Fim do Segundo Header -->
  </header>