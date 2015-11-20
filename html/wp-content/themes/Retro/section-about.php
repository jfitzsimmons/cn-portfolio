<div id="about_section" class="section" data-section="<?php echo sanitize_title( get_theme_option('about_label') ); ?>">
		
	<div id="about_section_botm_bg">
	
		<div class="section_inn">
			
			<?php if ( get_theme_option('about_label') || get_theme_option('about_intro') ) : ?>
			
			<div id="home_about_desc">
			
				
				
				<div id="home_about_desc_right">
					
					<?php if ( get_theme_option('about_intro_picture') ) : ?>
					<img src="<?php echo get_theme_option('about_intro_picture' ); ?>" class="picture" alt="" />
					<?php endif; ?>
					
					<p><?php echo get_theme_option('about_intro'); ?></p>
					

				</div><!-- end div #home_about_desc_right -->
				

				
			</div>
			<!-- end div #home_about_desc -->
			
			<?php endif; ?>
			
			
			
			<?php if ( get_theme_option('about_custom') ) : ?>
						
			<div class="section_custom_content">
			
			<?php echo apply_filters( 'the_content', get_theme_option('about_custom') ); ?>
			
			</div><!-- end div .section_custom_content -->
			
			<div class="clr"></div>
			
			<?php endif; ?>
			
		</div><!-- end div .section_inn -->
		
		<div class="clr"></div>
		
	</div><!-- end div #about_section_botm_bg -->
	
	<div class="clr"></div>
	
</div>