<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    <?php endwhile;?>
  <?php endif; ?>
  </div><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
