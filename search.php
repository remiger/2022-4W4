<?php get_header(); ?>
<main class="site__main">
    <!-- <h1>------search.php------</h1> -->
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post()?>
            <a href="<?= get_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <p><?= wp_trim_words(get_the_content(), 20, "...>"); ?></p>
            <hr>
        <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>