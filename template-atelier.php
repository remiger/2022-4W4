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
        <h2>Atelier : <?php the_title(); ?></h2>
        <h3>Description de l'atelier</h3>
        <span><p>L'animateur de l'atelier : </p><p class="atelier__animateur"><?php the_field('animateur'); ?></p></span>
        <span><p>L'atelier sera donné au local : </p><p class="atelier__local"><?php the_field('local'); ?></p></span>
        <span><p class="atelier__description"><?php the_field('description'); ?></p></span>
        <br>
        <h3>Horaire et dates de l'atelier</h3>
        <span><p>Durée de chacune des séances est de : </p><p class="atelier__dureeseance"><?php the_field('dureeseance'); ?></p><p>h</p></span>
        <span><p>Date de début : </p><p class="atelier__datedebut"><?php the_field('datedebut'); ?></p></span>
        <span><p>Date de fin : </p><p class="atelier__datefin"><?php the_field('datefin'); ?></p></span>
        <span><p>La formation se donnera : </p><p class="atelier__jourssemaine"><?php the_field('jourssemaine'); ?></p></span>
        <span><p>L'horaire : De </p><p class="atelier__heuredebut"><?php the_field('heuredebut'); ?></p><p> à </p><p class="atelier__heurefin"><?php the_field('heurefin'); ?></p></span>
        
      <?php endif; ?>
    </article>
 </main>
 <?php get_footer(); ?>