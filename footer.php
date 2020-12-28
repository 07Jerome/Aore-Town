<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aore_Town
 */
?>

<section class="_main_footer text-center">
	<footer>
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <div class="footer_logo_container">
                        <?php 
                        $image = get_field('footer_img', 'option');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                      <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/aore_footer_logo.png" alt=""> -->
                      <?php 
                        $description = get_field('footer_description', 'option');
                        if( !empty( $description ) ): ?>
                        <p><?php echo $description; ?></p>
                      <?php endif; ?>
                    </div>
                    <form class="form-inline d-flex justify-content-center">
                        <input class="footer_search mr-sm-2" placeholder="Email Address">
                        <button class="btn_submit my-2 my-sm-0" type="submit">Submit</button>
                    </form>
                    <div class="social_icons">
                        <ul class="icon_container">
                            <li class="icon-item"><a class="icon-link"  href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="icon-item"><a class="icon-link"  href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="icon-item"><a class="icon-link"  href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="icon-item"><a class="icon-link"  href="#"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <div class="copy_right_footer">
                        <p>AORE TOWN &#169; 2021 All Rights Reserved.</p>
                    </div>    
                </div>
            </div>
        </div>
    </footer>
</section>

<?php wp_footer(); ?>
</body>
</html>
