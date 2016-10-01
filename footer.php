			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div class="row">
					<div id="inner-footer" class="wrap cf">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<nav role="navigation">
								<?php wp_nav_menu(array(
		    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
		    					'container_class' => 'footer-links',         // class of container (should you choose to use it)
		    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
		    					'menu_class' => 'nav footer-nav',            // adding custom nav class
		    					'theme_location' => 'footer-links',             // where it's located in the theme
		    					'before' => '',                                 // before the menu
		    					'after' => '',                                  // after the menu
		    					'link_before' => '',                            // before each link
		    					'link_after' => '',                             // after each link
		    					'depth' => 0,                                   // limit the depth of the nav
		    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
								)); ?>
							</nav>
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end of site. what a ride! -->
