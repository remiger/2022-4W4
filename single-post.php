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
    <!-- <h1>---- single-post.php ----</h1> -->
    <?php if(have_posts()):the_post(); ?>
        <article class="article">
            <h2><?php the_title(); ?></h2>
            <div class="article__contenu">
                <?php if(has_post_thumbnail()) : ?>
                    <figure class="article__contenu__figure">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                <?php endif; ?>
                <?php the_content(); ?>
            </div> <!-- fin article__contenu -->
        </article>
    <?php endif; ?>
</main>

<?php get_footer(); ?>