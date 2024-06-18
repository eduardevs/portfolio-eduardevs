<!DOCTYPE html>
<html>

<head>
    <title>My Portfolio</title>

    <?php wp_head(); ?>
</head>

<body>
    <!-- get_template_directory_uri() . '/assets/images/myself.png' -->

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom-color">
        <a class="navbar-brand" href="#">
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="link-dark link-underline-opacity-0 nav-item" style="height:85px;z-index:1;"><img src="<?php echo get_template_directory_uri() . '/assets/images/Web_Luthier.png' ?>" class="img-fluid w-70"/></a>
            <!-- <img src="path/to/your/logo.png" alt="Logo"> -->
        
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="display: flex;">
                <?php wp_nav_menu([
                    'menu' => 'header',
                    'container' => 'false', // Pas de conteneur <ul>
                    'menu_class' => 'nav-item', // Classe de chaque élément du menu
                    'items_wrap' => '%3$s' // Supprimer l'enveloppe <ul> autour des éléments du menu
                ]); ?>
            </ul>
        </div>

    </nav>

    <main>