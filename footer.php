<footer class="site__footer">
    <section>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque blanditiis facere? Aperiam vero excepturi modi a unde!</p>
        <?php
            wp_nav_menu(array("menu"=>"simple",
                                "container"=>"nav",
                                "container_class" =>"site__footer__nav"));
        ?>          
    </section>
</footer>