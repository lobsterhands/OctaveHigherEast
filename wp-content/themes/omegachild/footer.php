<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the class=site-inner div and all content after
 *
 * @package Omega
 */
?>
		<?php //do_action( 'omega_after_main' ); ?>

	</div><!-- .site-inner -->



</div><!-- .site-container -->
    <?php
    do_action( 'omega_before_footer' ); 
    do_action( 'omega_footer' ); 
    do_action( 'omega_after_footer' ); 
    ?>
<?php do_action( 'omega_after' ); ?>

<?php wp_footer(); ?>

</body>
</html>
