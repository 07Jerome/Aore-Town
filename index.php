<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aore_Town
 */

get_header();
?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php if( is_paged() ): ?>		
			<?php endif; ?>
			
			<div class="container">
				
				<?php 
					
					if( have_posts() ):
						
						while( have_posts() ): the_post();
							
							/*
							$class = 'reveal';
							set_query_var( 'post-class', $class );
							*/
							get_template_part( 'template-parts/content', get_post_format() );
						
						endwhile;
						
						
					endif;
                
				?>
				
			</div><!-- .container -->	
		</main>
	</div><!-- #primary -->
	

<?php
// get_sidebar();
get_footer();
