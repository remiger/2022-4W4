<?php $categories = get_the_category(); ?>
<article class="cours__carte <?= $categories[1]->slug; ?>">
    <?php
        $titre = get_the_title();
        $titreCourt = substr(get_the_title(), 3);
        $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));
        $descCours = wp_trim_words(get_the_content(), 15, "<a href='#'> La suite </a>;");

        // $posDebutHeures = strrpos($titre, '(') + 1;
        // $posFinHeures = strrpos($titre, ')');
        // $nbHeures = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);

        $nbHeures = get_field("nombre_dheures");
        $departement = get_field("departement");
    ?>
    <h2 class="carte__titre">
        <a href="<?= get_permalink(); ?>">
            <?= $titreCourt; ?>
        </a>
    </h2>
    <?php the_post_thumbnail("thumbnail"); ?>
    <p class="carte__code"><?= substr(get_the_title(), 0, 3) ?></p>
    <p><?= $nbHeures; ?>h</p>
    <p class="carte__description"><?= get_the_excerpt() ?></p>
    <p class="cours__departement"><?= $departement ?></p>
</article>