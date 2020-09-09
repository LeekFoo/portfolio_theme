<?php get_header(); ?>

<div class="container page-wrapper">
<?php
if(have_posts()): while(have_posts()): the_post();?>
<h2 class="bottom-line-head"><?php the_title(); ?></h2>

<?php the_content(); ?>

<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>