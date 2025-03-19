<?php
/*
Template Name: Page d'archives
*/
?>

<?php get_header() ?>

<?php $cats = get_categories();
foreach ($cats as $cat) { ?>
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

<?php get_footer() ?>