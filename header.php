<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 05 - Rémi Gervais</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('site'); ?>>
<header class="site__header">
    <?= get_custom_logo(); ?>
    <section class="site__header__titre">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <h1 class="header__titre"><?php echo get_bloginfo(); ?></h1>
        <h2 class="header__description"> <?php echo get_bloginfo('description'); ?></h2>
    </a>
    </section>
    <section class="util">
        <?= get_sidebar('entete_1'); ?>
        <?php get_search_form(); ?>
    </section>

</header>
<section class="site__barre">
    <input type="checkbox" id="chk-burger">
    <label for="chk-burger" id="burger">
        <svg width="35px" height="35px" xmlns="http://www.w3.org/2020/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </label>
    <?php $icone = '<svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path></svg>'; ?>
    <?php wp_nav_menu(array('menu' => 'principal',
                            "link_before" => $icone)); ?>
</section>