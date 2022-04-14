<?php 
/**
 * Template Name: Evenement
 * 
 * @package WordPress
 * @subpackage cidw_4w4
*/
 ?>

 <?php get_header(); ?>
 <main class="site__main">
   <article class="evenement">
      <?php if(have_posts()):the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <section class="evenement__resume"><?php the_field('resume'); ?></section>
      <p class="evenement__endroit"><?php the_field('endroit'); ?></p>
      <?php endif; ?>
    </article>
 </main>
 <?php get_footer(); ?>