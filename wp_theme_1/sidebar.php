<aside>
  <section class="sections">
    <h2>Sekcje</h2>
    <nav>
      <?php wp_nav_menu( array('theme_location' => 'pionowe_menu_test', 'depth' => 2)); ?>
    </nav>
  </section>
  <section class="contact">
    <h2>Kontakt</h2>
    <p>
      HooDev <br>
      hoodev@mail.com
    </p>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

  <?php endif; ?>
  </section>
</aside>