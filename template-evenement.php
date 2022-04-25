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
        <p class="evenement__date"><?php the_field('date'); ?></p>
        <p class="evenement__heure"><?php the_field('heure'); ?></p>
        <p><?php the_field('organisateur'); ?></p>
        <?php 
        $image = get_field('image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      <?php endif; ?>
    </article>
 </main>
 <?php get_footer(); ?>