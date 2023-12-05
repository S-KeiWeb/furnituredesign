
  <footer id="footer" class="wrapper">
    <div class="footer-wrap">
      <?php
      $args = array(
        'menu' => 'global-navgation',
        'menu_class' => '',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
      <p class="copyright">&copy; Furniture Design</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>