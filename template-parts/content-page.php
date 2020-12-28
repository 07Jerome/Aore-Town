<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aore_Town
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center">	
		<?php the_title( '<h1 class="entry-title">', '</h1>'); ?>			
	</header>
	
	<div class="entry-content">
		<p><?php the_content(); ?></p>		
	</div><!-- .entry-content -->
	
</article>