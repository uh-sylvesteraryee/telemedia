<?php
/**
 * Template Name: Contact Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/header'); ?>
  <?php get_template_part('templates/content', 'page_contact_map'); ?>
  <?php get_template_part('templates/content', 'page_contact_main'); ?>
  <?php get_template_part('templates/content', 'page_contact_form'); ?>
<?php endwhile; ?>
