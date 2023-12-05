<?php get_header(); ?>

  <main>
    <div class="content-wrapper">
      <?php if ( have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>"<?php post_class('article'); ?>>
          <h1 class="design-title"><?php the_title(); ?></h1>
          <div class="article-wrap">
            <div class="design-wrapper">
              <div class="article_pic">
                <?php 
                $pic = get_field('pic');
                $pic_url = $pic['url'];
                ?>
              <img src="<?php echo $pic_url; ?>" alt="">
              </div>
              <div class="article-desc">
                <div class="content">
                  <?php the_content(); ?>
                </div>
                <div class="info">
                  <p><?php the_field('price'); ?></p>
                  <p><?php the_field('other'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
      <?php endif; ?>
      <p><a href="index.html">Back To Products</a></p>
    </div>
  </main>

<?php get_footer(); ?>