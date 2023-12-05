<?php get_header(); ?>

  <main>
    <div class="content-wrapper">
      <?php if ( have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <p><a href="<?php echo esc_url("/"); ?>">Back To Products</a></p>
    </div>
  </main>

<?php get_footer(); ?>