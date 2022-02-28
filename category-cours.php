<?php get_header() ?>
<main class="site__main">
    <!-- <h1>------category.php------</h1> -->
    <?php if(have_posts()): ?>
        <section class="cours">
            <?php while(have_posts()): the_post(); ?>
            <article class="cours__carte">
                <?php
                    $titre = get_the_title();
                    $titreCourt = substr(get_the_title(), 8);
                    $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));

                    $posDebutHeures = strrpos($titre, '(') + 1;
                    $posFinHeures = strrpos($titre, ')');
                    $nbHeures = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);
                ?>
                <h2 class="carte__titre">
                    <a href="<?= get_permalink(); ?>">
                        <?= $titreCourt; ?>
                    </a>
                </h2>
                <?php the_post_thumbnail("thumbnail"); ?>
                <p class="carte__code"><?= substr(get_the_title(), 0, 7) ?></p>
                <p><?= $nbHeures; ?></p>
                <p class="carte__description"><?= get_the_excerpt() ?></p>
            </article>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer() ?>