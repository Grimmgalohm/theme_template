<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>
    <header>
      <!--Posicion del menu de navegación gestionable principal.-->
      <nav>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary',
              'menu_class'     => 'primary-menu small-text',
              'depth'          => 4,
              'fallback_cb'    => 'theme_template_wp_page_menu',
            )
          );
        ?>
      </nav>
      header here
    </header>
