<!-- Main -->
  <div class="wrapper style1">

    <div class="container">
      <article id="main" class="special">
        <header>
          <p>
            <?php if( get_field('sub_header') ): the_field('sub_header'); endif; ?>
          </p>
        </header>
        <div class="row">
          <div class="6u">
            <?php the_post_thumbnail(); the_post_thumbnail_caption() ?>

<!--            <a href="#" class="image featured"><img src="http://placehold.it/1200x551" alt="" /></a>-->
          </div>
          <div class="6u">
            <?php if( have_rows('info') ): ?>
              <ul class="alt">
                <?php while( have_rows('info') ): the_row(); ?>
                  <?php if( get_sub_field('author') ): ?>
                    <li>Door: <?php the_sub_field('author'); endif; ?></li>
                  <?php if( get_sub_field('paper') ): ?>
                    <li>Gepubliceerd in <strong><?php the_sub_field('paper'); endif; ?></strong>
                      <?php if( get_sub_field('date') ): ?> op <?php the_sub_field('date'); endif; ?>
                    </li>
                  <li><?php the_excerpt(); ?></li>
              </ul>
          </div>
        </div>

        <section class="content-press">
          <?php the_content(); ?>
          <?php if( get_sub_field('bio_1') || get_sub_field('bio_2') ):?>
            <div class="row">
              <div class="6u">
                <strong><?php the_sub_field('bio_1'); ?></strong>
              </div>
              <div class="6u">
                <strong><?php the_sub_field('bio_2'); endif; ?></strong>
              </div>
            </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
        <section>
          <header>
          </header>
        </section>
      </article>
      <hr />

      <?php include( get_template_directory() . '/includes/pers.php' ); ?>

    </div>

  </div>
