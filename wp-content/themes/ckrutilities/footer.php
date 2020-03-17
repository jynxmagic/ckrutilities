<?php
/**
 * The template for displaying the footer
 *
 *
 * @package ckrutilites
 * @since 1.0.0
 * @author Chris Carr
 */
?>
<?php
wp_enqueue_script('JQuery', get_template_directory_uri().'/assets/js/jquery.min.js');
wp_enqueue_script('Bootstrap JS', get_template_directory_uri().'/assets/js/bootstrap.min.js');

if(is_front_page() ==1) wp_enqueue_script('Enable Carousel', get_template_directory_uri().'/assets/js/home.js');
?>

			<footer role="contentinfo" class="page-footer bg-dark text-white container-fluid rounded-top">


                <!-- copywrite -->
                <section class="text-center border-top border-white pt-1 pb-1 row" style="bottom: 0">
                   <div class="col-12">
                       <p class="blockquote-footer text-info">
                        &copy;
                        <?php
                        echo date_i18n(
                        /* translators: Copyright date format, see https://secure.php.net/date */
                            _x( 'Y', 'copyright date format', 'twentytwenty' )
                        );
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white">&nbsp;<?php bloginfo( 'name' ); ?></a>:&nbsp;
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>" class="text-success">
                                <?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
                        </a>
                        &nbsp;and created with ❤ by: <span><a href='http://therealchriscarr.me/' class="text-white">Chris Carr</a></span></p>
                    </div>
                </section>



			</footer><!-- #site-footer -->
<?php wp_footer(); ?>


	</body>
</html>
