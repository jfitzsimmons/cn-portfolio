<?php
/****************/
/*   WP query   */
$query = array(
	'posts_per_page' => get_theme_option('blog_posts'),
	'orderby' => get_theme_option('blog_orderby'),
	'order' => get_theme_option('blog_order'),
	'paged' => ( get_query_var('paged') ? get_query_var('paged') : true )
);
?>

<div id="blog_section" class="section" data-section="<?php echo sanitize_title( get_theme_option('blog_label') ); ?>">

	<div id="blog_section_botm_bg">
	
		<div class="section_inn">
			
			<?php if ( get_theme_option('blog_label') || get_theme_option('blog_intro') ) : ?>
			
			<div id="blog_section_desc">
	
				
				<div id="blog_section_desc_right">
				
					<p><?php echo get_theme_option('blog_intro'); ?></p>
					
					
				</div><!-- end div #blog_section_desc_right -->
				
				
			</div>
			<!-- end div #blog_section_desc -->
			
			<?php endif; ?>
			
			<div class="clr"></div>
			
		</div><!-- end div .section_inn -->
		
		<div class="clr"></div>
		
	</div><!-- end div #blog_section_botm_bg -->
	
	<div class="clr"></div>
	
</div><!-- end div #blog_section -->

<?php wp_reset_query(); ?>