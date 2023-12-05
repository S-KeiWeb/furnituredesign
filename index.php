<?php get_header(); ?>

  <main>
    <div id="top" class="wrapper">
      <ul class="product-list">
        <?php if ( have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="product-list-item">
              <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                }
                ?>
                <p><?php the_title(); ?></p>
                <p><?php the_field('price'); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <p class="view"><a href="<?php echo get_permalink(83); ?>">View More</a></p>
    </div>
  </main>

  <?php get_footer(); ?>