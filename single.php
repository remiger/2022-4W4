<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package underscore
 */

get_header();
?>

<main class="site__main">
    <!-- <h1>---- single.php ----</h1> -->
    <?php if(have_posts()):the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>