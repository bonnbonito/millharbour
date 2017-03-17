<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BonnJoel
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>				
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-2">
						<ul class="social-footer">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-md-7">
						<nav class="footer-menu-2">
							<a href="#">Terms and conditions</a>
							<a href="#">Cookies</a>
							<a href="#">Privacy policy</a>
						</nav>
						<p class="copyright">©Millharbour Digital 2017. Site by Two Boys</p>
					</div>
					<div class="col-md-3">
						<div class="nightingale">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Nightingale.png" alt="Proud to Support Nightingale">
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="mobile-menu" class="mobile-menu" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(function() {
			FastClick.attach(document.body);
		});

		$("#mobile-menu").mmenu({
			"extensions": [
			"pagedim-black",
			"theme-dark"
			],		
			"navbar": {
				"add": false
			},
			"navbars": [		
			{
				"position": "top"
				
			},
			{
				"position": "bottom",
				"content": [				
				"<a class='fa fa-facebook' href='#/' title='Follow Our Facebook'></a>",
				"<a class='fa fa-twitter' href='#/' title='Follow Our Twitter'></a>",			
				"<a class='fa fa-instagram' href='#/' title='Follow Our Instagram'></a>"
				]
			}
			]
		});

		var API = $("#mobile-menu").data( "mmenu" );

		$(".menu-toggle").click(function() {
			API.open();
			$('.mm-panels>.mm-panel').niceScroll({
				zindex : 999999,
				cursorwidth : 10,
				cursorborder : "1px solid #000",
				cursoropacitymax : .7,
				cursorminheight: 5
			});	
		});
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
