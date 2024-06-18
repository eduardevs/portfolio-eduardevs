<?php
/*
Template Name: Page Personnalisée
*/

get_header();

$image_url = get_template_directory_uri() . '/assets/images/myself.png';
?>


<?php get_template_part('parts/presentation_perso') ?>


<?php get_template_part('parts/realisations_perso') ?>



<?php get_footer(); ?>