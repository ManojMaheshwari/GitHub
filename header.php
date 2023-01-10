<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div class="wrapper"> <!-- wrapper start here -->
	
	
	<div class="main-header"> <!-- main header start here -->
		
		
		<div class="header"> <!-- header start here -->
			
			
			<div class="logo"> <!-- logo start here -->
			<a href="<?php echo esc_url(home_url("/")); ?>"> <?php the_custom_logo(); ?></a>
			</div>  <!-- logo end here -->
			
			<div class="nav"> <!-- nav start here -->
			<?php wp_nav_menu(["theme_location" => "primary"]); ?>
				
			</div> <!-- nav end here -->
			
			
		</div>  <!-- header end here -->
		
		
	</div> <!-- main header end here -->
	
	
<div class="clear"></div>	
	

<div class="container"> <!-- container start here -->
