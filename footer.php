<footer class="site__footer">
    <section>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque blanditiis facere? Aperiam vero excepturi modi a unde!</p>
        <p>
            <?php
                wp_nav_menu(array("menu"=>"simple",
                                    "container"=>"nav",
                                    "container_class" =>"site__footer__nav"));
            ?>
        </p>
        <p>3 800, rue Sherbrooke Est Montréal <br>(Québec) H1X 2A2 <br>514 254-7131 <br>Lorem ipsum dolor quaerat?<br>Lorem ipsum dolor quaerat?<br>Lorem ipsum dolor quaerat?</p>
        
    </section>
    <p>Copyright &copy;2022 - Collège de Maisonneuve. Tous droits réservés.</p>
</footer>