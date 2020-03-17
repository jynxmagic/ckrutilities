<?php
/**
 * Index
 *
 *
 * @package CKRUtiltiies
 * @since 1.0.0
 * @author Chris Carr therealchriscarr.me
 */
?>

<?php
get_header();
?>
<main role="main" class="container-fluid">
    <article>
        <h1 class="row"><?php the_title(); ?></h1>
	    <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile; wp_reset_query(); ?>
    </article>
</main>

<?php
get_footer();
?>