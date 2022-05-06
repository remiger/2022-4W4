<footer class="site__footer">
    <!-- première rangée de colonne -->
    <div class="site__footer__colonne">
        <section class="article">
            <?php get_sidebar('footer_colonne_1'); ?>
        </section>
        <section class="adresse">
            <?php get_sidebar('footer_colonne_2'); ?>
        </section>
        <section class="liens">
            <?php get_sidebar('footer_colonne_3'); ?>
        </section>
    </div>
    <!-- section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__description"></section>
        <section class="footer__nav"></section>
        <section class="footer__sociaux">
            <?php get_sidebar('footer_ligne_1'); ?>
        </section>
        <section class="copyright"></section>
        <section class="footer__auteur"></section>
    </div>
    <section class="site__footer__bas">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque blanditiis facere? Aperiam vero excepturi modi a unde!</p>
        <?php
            $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor" color="#ddd"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>';
            wp_nav_menu(array("menu" => "simple",
                                "container" => "nav",
                                "menu_class" => "footer__menu",
                                "container_class" =>"site__footer__nav",
                                "link_before" => $icone));
        ?>
        <p>3 800, rue Sherbrooke Est Montréal <br>(Québec) H1X 2A2 <br>514 254-7131 <br>Lorem ipsum dolor quaerat?<br>Lorem ipsum dolor quaerat?<br>Lorem ipsum dolor quaerat?</p>
        
    </section>
    <?php get_search_form(); ?>
    <p>Copyright &copy; 2022 - Collège de Maisonneuve. Tous droits réservés.</p>
</footer>
<div class="boite__modale">
    <button class="boite__modale__fermeture">X</button>
    <p class="boite__modale__texte"></p>
</div>
<div class="boite__carrousel">
    <button class="boite__carrousel__fermeture">X</button>
    <section class="boite__carrousel__navigation"></section>
</div>
<?php wp_footer(); ?>
</body>

</html>