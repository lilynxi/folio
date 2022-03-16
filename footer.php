<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after. 
 */

$footer_style  = kraft_footer_style();	

$scroll_to_top  = kraft_footer_scroll_top(); 

?>

		<?php if ( $scroll_to_top == 1 ) { ?>
			<a id="gotoTop" href="#" class="scroll-top-link" data-easing="easeOutQuad" data-speed="700" >
				<img src="<?php echo get_theme_file_uri( '/assets/images/svg/chevron-up.svg' ); ?>" class="go-to-top" />				
			</a>
		<?php } ?>
			
		</div><!-- #content -->


	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
