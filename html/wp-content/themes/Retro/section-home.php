<div id="home_section" class="wrapper section" data-section="home">

	<div id="home_top_botm_bg">
	
		<div class="section_inn">
			
			<?php if ( get_theme_option('home_banner') || get_theme_option('home_ribbon_text') ) : ?>
			
			<div id="home_top_logos">
				
				<?php if ( get_theme_option('home_banner') ) : ?>
				
				<div id="site_title">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_option('home_banner'); ?>" alt="" id="logo" /></a>
				</div>
				
				<?php endif; ?>
				
			</div>
			
			<?php endif; ?>
			
		</div><!-- end div .section_inn -->
		
	</div><!-- end div #home_top_botm_bg -->
	<div class="clr"></div>
	
</div>