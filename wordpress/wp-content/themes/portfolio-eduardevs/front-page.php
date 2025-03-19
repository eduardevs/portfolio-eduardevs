<?php get_header() ?>


<!-- /Hero Section -->

<?php get_template_part('parts/presentation_perso') ?>



<?php get_template_part('parts/competences') ?>
<!-- <div class="container">
  <?php //get_template_part('parts/responsive-card-slider-main/slider-cards') ?>
  
</div> -->

<?php get_template_part('parts/vertical-timeline-master/timeline-only') ?>


<?php get_template_part('parts/cards/cards') ?>


<?php get_template_part('parts/stats') ?>


<button id="scrollToTopBtn" title="Go to top"><i class="fa-solid fa-up-long"></i></button>


<?php //get_template_part('parts/testimonials') ?>


<?php //get_template_part('parts/recommendations') ?>




<!-- SCRIPTS -->

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/js/particles.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/js/app.js'; ?>"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/js/typeEffect.js'; ?>"></script>



<?php get_footer() ?>