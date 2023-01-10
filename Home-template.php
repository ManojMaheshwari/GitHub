<?php
/**
 * Template Name: Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>


	

	<div class="home-section-one"> <!-- Home section one start here -->	
		
		<div class="home-sec-one-inner"> <!-- Home section one inner start here -->
			<?php the_field("banner_content"); ?>
		</div> <!-- Home section one inner end here -->
		
	</div> <!-- Home section one end here -->	
	
	
<div class="clear"></div>	
	

	<div class="home-section-two"> <!-- Home section two start here -->	
		
		<div class="home-sec-two-inner"> <!-- Home section two inner start here -->
					<?php the_field("home_section_01"); ?>
		</div> <!-- Home section two inner end here -->
		
	</div> <!-- Home section two end here -->	
	
	
<div class="clear"></div>	
	
	
	
	<div class="home-section-three"> <!-- Home section three start here -->	
		
		<div class="home-sec-three-inner"> <!-- Home section three inner start here -->
		
			<div class="home-sec-three-title"><h2><?php the_field(
       "section_three_title"
   ); ?></h2></div>
			
			<div class="home-sec-three-cols"> <!-- home sec three cols start here -->
				
			<div class="home-sec-three-cols-left"> <!-- home sec three cols left start here -->
				<img src= "<?php the_field("section_three_image"); ?>" alt = "" />
			</div>  <!-- home sec three left cols end here -->
				
				
		    <div class="home-sec-three-cols-right"> <!-- home sec three right cols start here -->
		<?php the_field("section_three_content"); ?>
				
				<a href="#"><?php the_field("section_three_url_text"); ?></a>
				
			</div>  <!-- home sec three right cols end here -->	

				
			</div>  <!-- home sec three cols end here -->
			
			
		</div> <!-- Home section three inner end here -->
		
	</div> <!-- Home section three end here -->	
	
	
<div class="clear"></div>	
	
	
	<div class="home-section-four"> <!-- Home section four start here -->
		
   <div class="home-sec-four-title"> <!-- Home sec four title start here -->
	<h3><?php the_field("section_four_title"); ?></h3>  
	</div>  <!-- Home sec four title end here -->
		
	<div class="home-section-four-inner"> <!-- Home section four inner start here -->
		
		
		<?php
  $cat_id = get_cat_ID("home-post-cat-02");
  query_posts("posts_per_page=8&cat=" . $cat_id);
  ?>
		
<?php while (have_posts()):
    the_post(); ?>
		
		
				<div class="sec-four-post-col-1"> <!-- Sec four post col 1 start here -->
			
			<div class="sec-four-post-col-1-thumb"> <!-- sec four post col 1 thumb start here -->
				<?php the_post_thumbnail("full"); ?>
			</div> <!-- sec four post col 1 thumb end here -->
			
			<div class="sec-four-post-col-1-title"> <!-- sec four post col 1 title start here -->
				<p><?php the_title(); ?></p>
			</div> <!-- sec four post col 1 title end here -->
			
			<div class="sec-four-post-col-1-content"> <!-- sec four post col 1 content start here -->
				<?php the_excerpt(); ?>
			</div> <!-- sec four post col 1 content end here -->

			<div class="sec-four-post-col-1-more"> <!-- sec four post col 1 more start here -->
				<a href="#">WEITERLESEN</a>
			</div> <!-- sec four post col 1 more end here -->	
					
					
		</div> <!-- Sec four post col 1 end here -->
		
		
		<?php
endwhile; ?>
		
		
		
		
	</div> <!-- Home section four inner end here -->
		
		
	</div> <!-- Home section four end here -->
	
	
<div class="clear"></div>	
	
	
	
	
		<div class="home-section-five"> <!-- Home section five start here -->	
		
		<div class="home-sec-five-inner"> <!-- Home section five inner start here -->
		
		
			
			
				<?php
    $cat_id = get_cat_ID("home-post-cat-01");
    query_posts("posts_per_page=8&cat=" . $cat_id);
    ?>
		
<?php while (have_posts()):
    the_post(); ?>
			
			
			
			
					<div class="home-sec-five-inner-col-1"> <!-- Home sec five inner col 1 start here -->
				
				<div class="home-sec-five-inner-col-thumb-left"> <!-- Home sec five inner col thumb left start here -->
<?php the_post_thumbnail("full"); ?>
						</div>  <!-- Home sec five inner col thumb left end here -->
				
				<div class="home-sec-five-inner-col-right"> <!-- Home sec five inner col right start here -->
					
					
			<div class="sec-five-post-col-1-title"> <!-- sec five post col 1 title start here -->
				<p><?php the_title(); ?></p>
			</div> <!-- sec five post col 1 title end here -->
					
					
			<div class="sec-five-post-col-1-content"> <!-- sec five post col 1 content start here -->
				<?php the_excerpt(); ?>
	</div> <!-- sec five post col 1 title end here -->	
					
					
					
			<div class="sec-five-post-col-1-more"> <!-- sec fourfivepost col 1 more start here -->
				<a href="#">MEHR ERFAHREN</a>
			</div> <!-- sec five post col 1 more end here -->

					
				</div>  <!-- Home sec five inner col right end here -->
				
				
			</div> <!-- Home sec five inner col 1 end here -->
			
			
				<?php
endwhile; ?>
	
			
			
			
		</div> <!-- Home section five inner end here -->
		
	</div> <!-- Home section five end here -->	
		
	
</div>	  <!-- container end here -->
	
	
	
	


<?php get_footer();
