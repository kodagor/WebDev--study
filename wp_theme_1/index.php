<?php get_header(); ?>
      <section class="entries">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
          <div class="container">
            <h2>
              <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </h2>
            <?php the_content('Czytaj dalej'); ?>
          </div>
        </article>
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched youor criteria.'); ?></p>
      <?php endif; ?>
      </section>
    <?php get_sidebar();?>
  <?php get_footer();?>
