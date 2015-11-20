<?php
/*
 *  User custom styles
 */

define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');
header('Content-type: text/css');
?>
@font-face {
font-family: 'halvett';
	src: url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/halvett.eot");
	src: url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/halvett.eot?#iefix") format("embedded-opentype"), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/halvett.woff") format('woff'), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/halvett.ttf") format("truetype"), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/halvett.svg#<?php echo get_theme_option('heading_font'); ?>") format("svg");
}

/* === Headings Font === */
@font-face {
	font-family: "<?php echo get_theme_option('heading_font'); ?>";
	src: url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.eot");
	src: url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.eot?#iefix") format("embedded-opentype"), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.woff") format('woff'), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.ttf") format("truetype"), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.svg#<?php echo get_theme_option('heading_font'); ?>") format("svg");
}

#menu ul li a,
#home_top_logos #site_ribbon,
#home_slider_bottom h3,
#hello_welcome,
#home_about_desc_left h3,
#home_about_listing ul li h2,
#home_about_listing ul li h3,
#portfolio_section_desc_left h3,
#filter_menu label,
.title_quote,
#blog_section_desc_left h3,
#blog_section_listing ul li .date,
.post_title,
.blog_section_sidebar h3,
.retro_search .submit,
#contact_section_desc_left h3,
#contact_fields h3,
#contact_fields_right #submit,
.form-submit #submit,
#blog_section .section_inn h1,
#single .section_inn h1,
.blog_comments h3,
#contact_form_success_message h1,
.nivo-caption h3 {
	font-family: "<?php echo get_theme_option('heading_font'); ?>";
}

/* === Body Font === */
body {
	font-family: 'halvett', Arial, Helvetica, sans-serif;
	font-size: <?php echo get_theme_option('body_font_size'); ?>px;
}
/* === Header Section === */
#menu ul li {
	font-size: <?php echo get_theme_option('menu_size'); ?>px;
}




/* === Sections === */
.section_label {
	font-size: <?php echo get_theme_option('label_size'); ?>px;
}

/* === Home Section === */


/* === Portfolio Section === */
#portfolio_section_desc_left {
	width: <?php echo get_theme_option('portfolio_label_width'); ?>px;
}
#portfolio_section_desc_right {
	width: <?php echo get_theme_option('portfolio_intro_width'); ?>px;
}

/* === Custom Styles === */
<?php echo get_theme_option('css_code'); ?>