<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aore_Town
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('recently_post my-5 py-5'); ?>>
        <!-- <div class="item"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-5 my-2">
                    <div class="rp_img">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                </div> <!--- End col-lg-5 - -->
                <div class="col-lg-7 my-auto ">
                    <div class="rp_title">
                    <?php the_title( sprintf('<h2 class="entry_title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>');?>
                    </div>
                    <div class="description d-flex">
                        <span class="mr-3"> <?php  the_time('F j, Y'); ?></span>
                        <?php
                        foreach((get_the_category()) as $category) { 
                        ?>
                        <span><?= $category->cat_name ?></span>
                        <?php } ?>
                    </div>
                    <span class="rp_underline"></span>
                <p><?php the_content(); ?></p>
            </div> <!--- End col-lg-7 - -->
            <!-- </div>  end item -->  
        </div>
      </div>
   </div>