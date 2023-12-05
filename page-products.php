<?php get_header(); ?>

  <main>
    <div id="top" class="wrapper">
      
      <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12,
        'paged' => $paged
      );
      $the_query = new WP_Query( $args );
      if($the_query->have_posts() ) :
      ?>

      <ul class="product-list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
      </ul>
          <?php if(function_exists( 'wp_pagenavi')){
          wp_pagenavi(array('query'=>$the_query));
          }
          ?>
          <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </main>

  <?php get_footer(); ?>