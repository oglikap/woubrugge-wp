<!-- Header -->
    <div id="header">
      <!-- Inner -->
        <div class="inner">
          <header>
            <p><?php bloginfo( 'description' ); ?></p>
            <?php the_custom_logo(); ?>
          </header>

          <footer>
            <a href="#banner" class="scrolly"><i style="font-size:3.5em;" class="fa fa-angle-double-down"></i></a>
          </footer>

        </div><!-- .inner -->

      <!-- Nav -->
        <nav id="nav">
          <?php wp_nav_menu( array( 'theme_location' => 'woubrugge-menu', 'menu_class' => '' ) ); ?>
        </nav>

    </div><!-- #header -->
