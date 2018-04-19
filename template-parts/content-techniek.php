    <section class="wrapper style1">
      <div class="container">
        <div class="row 200%">
          <div class="8u 12u(mobile)" id="content">
            <article id="main">
              <header>
                <?php the_excerpt(); ?>
              </header>
                <?php the_post_thumbnail('landscape'); ?>
                <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
                <?php the_content(); ?>
            </article><!-- #main -->
          </div><!-- #content -->

          <div class="4u 12u(mobile)" id="sidebar">
            <hr class="first" />
              <?php if( have_rows('text_1') ): ?>
                <section>

                <?php while( have_rows('text_1') ): the_row();

                  if( get_sub_field('inleiding') ): the_sub_field('inleiding'); endif;

                  if( have_rows('opsomming_1') ): ?>

                  <ul class="alt">

                    <?php while( have_rows('opsomming_1') ): the_row(); ?>
                      <li>
                        <?php if( get_sub_field('item') ): the_sub_field('item'); endif; ?>
                      </li>
                    <?php endwhile;?>

                  </ul>

                <?php endif; ?>

              <?php endwhile; ?>
            </section>
          <?php endif; ?>

              <?php $image_1 = get_field('image_1');
                $size = 'square';
                if( $image_1 ) : ?>

                  <?php
                  echo wp_get_attachment_image( $image_1, $size );
                   ?>
              <?php endif; ?>


              <?php if( have_rows('text_2') ): ?>
                <section>

                <?php while( have_rows('text_2') ): the_row();

                  if( get_sub_field('inleiding') ): the_sub_field('inleiding'); endif;

                  if( have_rows('opsomming_1') ): ?>

                  <ul class="alt">

                    <?php while( have_rows('opsomming_1') ): the_row(); ?>
                      <li>
                        <?php if( get_sub_field('item') ): the_sub_field('item'); endif; ?>
                      </li>
                    <?php endwhile;?>

                  </ul>

                <?php endif; ?>

              <?php endwhile; ?>
            </section>

          <?php endif; ?>

              <?php if( have_rows('text_3') ): ?>

                <?php while( have_rows('text_3') ): the_row();

                  if( get_sub_field('inleiding') ): the_sub_field('inleiding'); endif;

                  if( have_rows('opsomming_1') ): ?>

                  <ul class="alt">

                    <?php while( have_rows('opsomming_1') ): the_row(); ?>
                      <li>
                        <?php if( get_sub_field('item') ): the_sub_field('item'); endif; ?>
                      </li>
                    <?php endwhile;?>

                  </ul>

                <?php endif; ?>

              <?php endwhile; endif; ?>

              <?php if( have_rows('text_4') ): ?>

                <?php while( have_rows('text_4') ): the_row();

                  if( get_sub_field('inleiding') ): the_sub_field('inleiding'); endif;

                  if( have_rows('opsomming_1') ): ?>

                  <ul class="alt">

                    <?php while( have_rows('opsomming_1') ): the_row(); ?>
                      <li>
                        <?php if( get_sub_field('item') ): the_sub_field('item'); endif; ?>
                      </li>
                    <?php endwhile;?>

                  </ul>

                <?php endif; ?>

              <?php endwhile; endif; ?>

            </section>
          </div><!-- #sidebar -->

        </div><!-- .row .200% -->
        <footer>
          <?php include( get_template_directory() . '/includes/techniek.php' ); ?>
        </footer>
      </div><!-- .container -->
    </section>
