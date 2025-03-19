<?php
/*
Template Name: Page de blogs in landing page
*/
?>



<section class="bg-white">
    <div class="container">
        <div class="p-5 d-flex justify-content-center">
            <h2 class="">Notre blog</h2>
        </div>
        <div class="row">
            <?php $cats = get_categories();
            foreach ($cats as $cat) { ?>
                <?php query_posts('cat=' . $cat->cat_ID . '&posts_per_page=3'); ?>
                <?php query_posts('cat=' . $cat->cat_ID); ?>
                <h2><?php echo $cat->cat_name; ?> </h2>
                <ul>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <li>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </li>
                    </ul>
                <?php endwhile; ?>

            <?php } ?>


            <!-- FAIRE DE BURGER MENU  -->
        </div>

    </div>
</section>