<?php get_header() ?>
<main class="principal">
<!-- <h1>---- front-page.PHP ----</h1> -->
<section class="animation">
    <div class="animation__bloc">1</div>
    <div class="animation__bloc">2</div>
    <div class="animation__bloc">3</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">5</div>
</section>
    <?php if (have_posts()):the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endif; ?>
</main>
<?php get_footer() ?>