  <footer>
    footer here :D
    <nav>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer',
            'menu_class'     => 'footer-menu small-text',
            'depth'          => 4,
            'fallback_cb'    => 'theme_template_wp_page_menu',
          )
        );
      ?>
    </nav>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
