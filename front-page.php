<?php get_header() ?>
<main class="principal">
<!-- <h1>---- front-page.PHP ----</h1> -->
<section class="animation">
    <div class="animation__bloc">A</div>
    <div class="animation__bloc">C</div>
    <div class="animation__bloc">C</div>
    <div class="animation__bloc">U</div>
    <div class="animation__bloc">E</div>
    <div class="animation__bloc">I</div>
    <div class="animation__bloc">L</div>
</section>
    <h1>Les etudes en tim</h1>
    <?php wp_nav_menu(array("menu" => "menu_accueil",
    "container" => "nav")); ?>
    <?php wp_nav_menu(array("menu" => "evenement",
    "container" => "nav")); ?>
    <?php if (have_posts()):the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endif; ?>
</main>
<?php get_footer() ?>