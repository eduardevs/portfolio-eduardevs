</main>
</div>

<?php
//use MyTheme\Walker\Limit_Menu_Walker;

?>
<footer class="py-5 text-white" style="background-color:black; ">

    <div class="container row">
        <div class="col-2">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/eduardevops.png' ?>"
                    class="img-fluid w-70" alt="Logo Web Luthier">
            </a>
        </div>


        <div class="social-links">
            <a href="https://www.linkedin.com/in/eduardo-pina/" target="_blank" rel="noopener noreferrer"
                aria-label="linkedin">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://gitlab.com/eduardevs" target="_blank" rel="noopener noreferrer" aria-label="codepen">
                <i class="fa-brands fa-gitlab"></i>
            </a>
            <a href="https://github.com/eduardevs" target="_blank" rel="noopener noreferrer" aria-label="github">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://www.buymeacoffee.com/deveduardopi" target="_blank" rel="noopener noreferrer"
                aria-label="buymeacoffee">
                <i class="fas fa-coffee"></i>
            </a>
        </div>

        <div id="navbarFooter" class="col-5 d-flex justify-content-center">

            <?php

            // Appel à wp_nav_menu avec vos paramètres
            /* wp_nav_menu([
                 'theme_location' => 'footer-menu',
                 'menu_class' => 'navbar-nav',
                 'container' => false,
                 'depth' => 1,
                 'walker' => new Limit_Menu_Walker(2),
             ]);*/



            // Ajoutez une ligne de débogage pour vérifier la fin du traitement du menu
            
            ?>



        </div>



        <div class="col-5 mb-3">
            <!-- <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
            </form> -->
        </div>
    </div>


</footer>
<?php wp_footer() ?>

<script>
    var test = AOS.init();
</script>
</body>