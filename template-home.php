<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'clear_nav'); ?>
  <?php get_template_part('templates/content', 'page_home_banner'); ?>
  <?php get_template_part('templates/content', 'page_home_main'); ?>
<?php endwhile; ?>
