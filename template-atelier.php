<?php 
/**
 * Template Name: Atelier
 * 
 * @package WordPress
 * @subpackage cidw_4w4
*/
 ?>

 <?php get_header(); ?>
 <main class="site__main">
   <article class="atelier">
      <?php if(have_posts()):the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <section class="atelier__description"><?php the_field('description'); ?></section>
        <p class="atelier__animateur"><?php the_field('animateur'); ?></p>
        <p class="atelier__datedebut"><?php the_field('datedebut'); ?></p>
        <p class="atelier__datefin"><?php the_field('datefin'); ?></p>
        <p class="atelier__jourssemaine"><?php the_field('jourssemaine'); ?></p>
        <p class="atelier__heuredebut"><?php the_field('heuredebut'); ?></p>
        <p class="atelier__heurefin"><?php the_field('heurefin'); ?></p>
        <p class="atelier__dureeseance"><?php the_field('dureeseance'); ?></p>
        <p class="atelier__local"><?php the_field('local'); ?></p>
      <?php endif; ?>
    </article>
 </main>
 <?php get_footer(); ?>