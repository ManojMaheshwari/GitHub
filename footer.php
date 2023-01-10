<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
		


<div class="clear"></div>	

	
	
<div class="main-footer"> <!-- main footer start here -->
	
	
	<div class="footer"> <!-- footer start here -->
		
		<div class="foo-left"> <!-- Footer left start here -->
			<div class="foo-links"> <!-- footer links start here -->
				
						<?php wp_nav_menu(["theme_location" => "secondary"]); ?>

				
			</div> <!-- footer links end here -->
			
			
			<div class="foo-social-icons"> <!-- Footer social icons start here -->
				
						<?php dynamic_sidebar("socialmedia"); ?>
				
			</div><!-- Footer social icons end here -->
				
			
		</div> <!-- Footer left end here -->
		
		<div class="foo-right"> <!-- Footer right start here -->
						<?php dynamic_sidebar("sidebar-1"); ?>
		</div> <!-- Footer right end here -->
		
	</div>  <!-- footer end here -->
	
	
</div>	  <!-- main footer end here -->
	
	
	
	
</div> <!-- wrapper end here -->
	
	

	
	


<?php wp_footer(); ?>

</body>
</html>
