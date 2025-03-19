<!DOCTYPE html>
<html>

<head>
    <title>Eduardevops</title>

    <!-- <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="assets/css/style.css"> -->
    <?php wp_head(); ?>
</head>
<style>
    .navbar-toggler {
        padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
        font-size: var(--bs-navbar-toggler-font-size);
        line-height: 1;
        color: var(--bs-navbar-color);
        margin-right: 50px;
        margin-top: 10px;
        background-color: transparent;
        border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
        border-radius: var(--bs-navbar-toggler-border-radius);
        transition: var(--bs-navbar-toggler-transition);
    }

    nav {
        padding-bottom: 10px !important;
        padding-top: 10px !important;
    }

    nav .nav-link {
        font-size: 1.1rem;
    }
</style>

<body>
    <!-- get_template_directory_uri() . '/assets/images/myself.png' -->

    <nav class="navbar navbar-expand-lg navbar-dark position-fixed mr-auto w-100 z-3">
        <a class="navbar-brand" href="#">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="link-dark link-underline-opacity-0 nav-item"
                style=";z-index:1;"><img
                    src="<?php echo get_template_directory_uri() . '/assets/images/eduardevops.png' ?>"
                    class="img-fluid" /></a>

        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="display: flex;">
                <li class="nav-item "><a href="<?php echo esc_url(home_url('/a-propos')); ?>" class="nav-link">A propos</a></li>
                <li class="nav-item "><a href="https://github.com/eduardevs" class="nav-link" target="_blank">Réalisations</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>

                <?php

                /* 
                 wp_nav_menu([
                     'menu' => 'header',
                     'container' => 'false', 
                     'menu_class' => 'nav-item', 
                     'items_wrap' => '%3$s' 
                 ]); 
                 */

                ?>
            </ul>
        </div>

    </nav>

    <div class="wrapper-main">
        <main>