<?php get_header() ?>
<main class="site__main">
    <!-- <h1>------category.php------</h1> -->
    <a href="?cletri=title&ordre=asc">Tri ascendant</a>
    <a href="?cletri=title&ordre=desc">Tri descendant</a>
    <?php if(is_category(array('cours', 'creation-3d', 'web', 'jeu', 'design', 'utilitaire', 'video'))) : ?>
    <?php wp_nav_menu(array(
        "menu" => "categorie_cours",
        "container" => "nav")); ?>
        <?php 
        $slug_categorie_de_la_page = trouve_la_categorie(array('cours', 'web', 'jeu', 'creation-3d', 'design', 'utilitaire', 'video')); 
        $ma_categorie = get_category_by_slug($slug_categorie_de_la_page);
        echo "<h2>" . $ma_categorie->name . "</h2>";
    ?>

    <?php if(have_posts()): ?>
        <section class="cours">
            <?php while(have_posts()): the_post(); ?>
            <?php get_template_part('gabarit/content', 'cours') ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
    <?php endif; ?><!-- if is category cours -->
</main>
<?php get_footer() ?>