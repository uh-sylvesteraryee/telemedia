<?php
/**
 * Template Name: Works Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/header'); ?>
  <?php get_template_part('templates/content', 'page_banner'); ?>
  <?php get_template_part('templates/content', 'page_works_main'); ?>
<?php endwhile; ?>
