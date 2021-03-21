<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
     <title>EFFIX</title>
     <?php wp_head(); ?>
</head>

<body>
     <header class="header">
          <div class="header__burger">
               <span class="header__burger--span">&nbsp;</span>
          </div>
          <div class="flex header__box container-big">
               <div class="header__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-effix-dark.png" alt="Logo Effix">
               </div>
               <div class="header__nav flex">
                    <nav class="main-nav" id="nav-menu">
                         <?php wp_nav_menu(
                              array(
                                   'theme_location' => 'main_nav',
                                   'container' => 'ul',
                                   'menu_class' => 'main-nav__menu flex'
                              )
                         ); ?>
                    </nav>
                    <nav class="login-nav" id="login-menu">
                         <?php wp_nav_menu(
                              array(
                                   'theme_location' => 'login_nav',
                                   'container' => 'ul',
                                   'menu_class' => 'login-nav__menu flex'
                              )
                         ); ?>
                    </nav>
               </div>

          </div>
     </header>
     <main>