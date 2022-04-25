<?php $categories = get_the_category(); ?>
<article class="cours__carte <?= $categories[1]->slug; ?>">
    <?php
        $titre = get_the_title();
        $titreCourt = substr(get_the_title(), 3);
        $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));

        $nbHeures = get_field("nombre_dheures");
        $departement = get_field("departement");
        $descCours = get_the_content();
    ?>
    <code class="formation__cours__invisible"><?= $descCours; ?></code>
    <h2 class="carte__titre">
        <a href="<?= get_permalink(); ?>">
            <?= $titreCourt; ?>
        </a>
    </h2>
    <?php the_post_thumbnail("thumbnail"); ?>
    <p class="carte__code"><?= substr(get_the_title(), 0, 3) ?></p>
    <p><?= $nbHeures; ?>h</p>
    <p class="carte__description"><?= wp_trim_words($descCours, 15, "<button class='cours__desc__ouvrir'> ... la suite </button>"); ?></p>
    <p class="cours__departement"><?= $departement ?></p>
</article>