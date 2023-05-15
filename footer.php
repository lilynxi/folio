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

<script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>

<script>
	

	$(document).ready(function () {

		var scrollPos = 0;
		

		$(".ham-trigger-wrap").click(function(){

			$('#site-navigation').toggleClass('open');
			$('#ham-trigger-wrap').toggleClass('open');

		

			// disable and enable scrolling
			if($('#site-navigation').hasClass('open')){
				scrollPos = $(document).scrollTop();
				console.log("openn" + scrollPos);

				$('html, body').css({
						overflow: 'hidden',
						height: '100%'
				});

			} else {

				$('html, body').css({
						overflow: 'auto',
						height: 'auto'
				});

				$(document).scrollTop(scrollPos);
				console.log('closee'+scrollPos);
				
			}

		});
 	});
</script>

</body>
</html>
