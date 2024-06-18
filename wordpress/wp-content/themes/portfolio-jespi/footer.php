</main>


<?php
use MyTheme\Walker\Limit_Menu_Walker;

?>
<footer class="py-5 text-white" style="background-color:black;">

    <div class="container row">
        <div class="col-2">

            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/Web_Luthier.png' ?>"
                    class="img-fluid w-70" alt="Logo Web Luthier">
            </a>
        </div>

        <div id="navbarFooter" class="col-5 d-flex justify-content-center">

            <?php

            // Appel à wp_nav_menu avec vos paramètres
            wp_nav_menu([
                'theme_location' => 'footer-menu', // Utilisation de la clé 'footer-menu'
                'menu_class' => 'navbar-nav', // Classe CSS pour le menu
                'container' => false, // Pas de conteneur <ul>
                'depth' => 1, // Niveau de profondeur des sous-menus
                'walker' => new Limit_Menu_Walker(2), // Utilisation de la classe personnalisée pour limiter à 3 éléments
            ]);



            // Ajoutez une ligne de débogage pour vérifier la fin du traitement du menu
            
            ?>



        </div>



        <div class="col-5 mb-3">
            <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
            </form>
        </div>
    </div>


    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2024 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-body-emphasis" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter" />
                    </svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram" />
                    </svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook" />
                    </svg></a></li>
        </ul>
    </div>
</footer>
<?php wp_footer() ?>

<script>
    var test = AOS.init();
</script>
</body>