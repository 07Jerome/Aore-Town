<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Aore_Town
 */

get_header();
?>


<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
					<?php get_template_part( 'template-parts/content') ?>

			<?php endwhile;
			
		endif;
				
		?>
<!-- 
	
	<div class="col-xs-12 col-sm-4">
		<?php //get_sidebar(); ?>
	</div>
	 -->
 </div>
</div>

<?php
// get_sidebar();
get_footer(); ?>
