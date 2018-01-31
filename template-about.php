<?php
/**
 * Template Name: About Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page_banner'); ?>
  <?php get_template_part('templates/content', 'page_about_main'); ?>
<?php endwhile; ?>
