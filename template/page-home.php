<?php
/**
 * Template Name: Home Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ 
 *
 * @package Aore_Town
 */

get_header();
?>
<!-- banner -->
<section id="hero">
  <?php if( have_rows('villa_echo_', 'option') ): ?>
  <div class="main-slider">
  <?php while( have_rows('villa_echo_', 'option') ): the_row(); 
        $bgVilla = get_sub_field('background_img_villa', 'option');
        $innerImgvilla = get_sub_field('inner_img_villa', 'option');
        $mainTitlevilla = get_sub_field('main_title', 'option');
        $roomTitlevilla = get_sub_field('room_title', 'option');
        $roomSubTitlevilla = get_sub_field('room_sub_title', 'option');
        ?>

        <div class="item image">
          <figure>
            <div class="slide-image slide-media" 
              <?php 
                if ( !empty( $bgVilla ) ) :?>
                style="background: linear-gradient(0deg, rgb(0 0 0 / 11%), rgb(0 0 0 / 75%)), url('<?php echo esc_url($bgVilla['url']); ?>');background-position: center right;"
              <?php  endif; ?>
              >
            <?php 
              if( !empty( $innerImgvilla ) ): ?>
                <img data-lazy="<?php echo esc_url($innerImgvilla['url']); ?>" alt="<?php echo esc_attr($innerImgvilla['alt']); ?>" />
              <?php endif; ?>
            </div>
            <figcaption class="caption">
                <div class="content">
                <?php 
                  if( !empty( $mainTitlevilla ) ): ?>
                    <h1><?php echo $mainTitlevilla; ?></h1>
                  <?php endif; ?>
                  <?php 
                  if( !empty( $roomTitlevilla ) ): ?>
                     <h3><?php echo $roomTitlevilla; ?></h3>
                  <?php endif; ?>
                  <?php 
                  if( !empty( $roomSubTitlevilla ) ): ?>
                    <h4><?php echo $roomSubTitlevilla; ?></h4>
                  <?php endif; ?>
            </div>
            <div class="btn_view_now">
              <a class="btn" href="<?php the_permalink();?>" >View Now</a>
            </div>
              </figcaption>
          </figure>
        </div>
  <?php endwhile; ?>
      </div>
  <?php endif; ?>
</section>
<!-- about -->
<section id="about">
  <div class="container">
    <div class="row">
        <div class="title_container col-lg-8 col-md-12">
            <h4>AORE TOWN IS</h4>
            <h2>REDEFINING  LUXURY</h2>
            <p>A collection of only 25 boutique residences, AORE TOWN is redefining luxury living in Aore Island – one of the last true remaining paradise islands in the South Pacific. Aore is a twenty-minute ferry ride from Esperitu Santo (locally known as Santo) which is the largest island in Vanuatu. Santo also serves as the commercial port and centre. </p>
            <p>
            Aore Town has been designed to embrace five key principles – with light, volume, air, quality and nature informing every aspect of its creation.  Aore Town is the essence of all the very best aspects of a tropical paradise beachfront development, indicating that homes at this forward-thinking development won’t remain available for long.
            </p>
           <div class="row">
             <div class="col-md-6 col-12">
              <div class="service_container py-3">
                  <div class="service_img">
                      <img src="/aoretown/wp-content/uploads/2020/12/icon11.png" alt="">
                  </div>
                <div class="service_content">
                    <h5>Architecture</h5>
                    <p>Aore Town has been designed to embrace five key principles - light, volume, air, quality and nature informing.</p>
                </div>
              </div> <!--service_container-->
             </div>
             <div class="col-md-6 col-12">
               <div class="service_container  py-3">
                  <div class="service_img">
                      <img src="/aoretown/wp-content/uploads/2020/12/icon22-1.png" alt="">
                  </div>
                      <div class="service_content">
                          <h5>Design</h5>
                          <p>Aore Town has been designed to embrace five key principles - light, volume, air, quality and nature informing.</p>
                      </div>
                  </div>
             </div>
             <div class="col-md-6 col-12">
                  <div class="service_container py-3">
                    <div class="service_img">
                        <img src="/aoretown/wp-content/uploads/2020/12/icon33.png" alt="">
                    </div>
                    <div class="service_content">
                        <h5>Quantity</h5>
                        <p>Dynamic excitement of life in an exotic south pacific tropical paradise has been captured in the atmosphere at Aore Town.</p>   
                    </div>
                </div>
             </div>
             <div class="col-md-6 col-12">
                <div class="service_container py-3">
                    <div class="service_img">
                        <img src="/aoretown/wp-content/uploads/2020/12/icon44-1.png" alt="">
                    </div>
                    <div class="service_content">
                        <h5>Paradise</h5>
                        <p>Dynamic excitement of life in an exotic south pacific tropical paradise has been captured in the atmosphere at Aore Town.</p>
                    </div>
                </div>
             </div>
           </div>
        </div>
        <div class="about_years col-lg-4 col-md-12 ">
            <h2>25</h2>
            <h3>Boutique Residences</h3>
            <p>Brand new & Impeccably Designed</p>
        </div>
    </div>
  </div>
</section>
<!-- discover -->
<section id="discover">
  <div class="container">
    <div class="row py-5">
      <div class="col-12">
        <div class="title_container animate__animated animate__fadeInUp animate__delay-.9s">
          <h4>DISCOVER</h4>
          <h2>Ultimate Balance <br> at Aore Town</h2>
        </div>
      </div>
    </div>
    <div class="row">    
      <div class="col-md-12 col-sm-6 col-xl-5 order-sm-1 order-xl-1 p-0" >
        <!-- <img src="http://localhost/aoretown/wp-content/uploads/2020/12/image6.jpg" alt=""> -->
        <div class="img_discover"style="background: url('/aoretown/wp-content/uploads/2020/12/discover-top2.jpg');height: 30vw;width: 100%;background-repeat: no-repeat;background-position: center right;background-size: cover;"></div>
      </div>
      <div class="col-md-12 col-sm-6 col-xl-7 order-sm-2 order-xl-2 point-left p-0">
        <div class="text_box">
          <div class="discover_text">
              <p>
                You will discover the ultimate balance at Aore Town, which has
                been expertly crafted to encourage a vibrant, connected lifestyle,
                to nearby Luganville while offering the ideal tropical sanctuary to
                return home to.
              </p>
            </div>
              <div class="discover_info">
                <h2>Private appointments are now available <br> +61 415 415575</h2>
              </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-6 col-xl-5 order-sm-4 order-xl-4 p-0">
        <div class="img_discover"style="background: url('/aoretown/wp-content/uploads/2020/12/discover-down2.jpg');height: 30vw;width: 100%;background-repeat: no-repeat;background-position: center right;background-size: cover; background-color: #f1e7dd;"></div>
          <!-- <img src="http://localhost/aoretown/wp-content/uploads/2020/12/image7.jpg" alt=""> -->
      </div>
      <div class="col-md-12 col-sm-6 col-xl-7 order-sm-3 order-xl-3 point-left">
        <div class="text_box2">
          <div class="discover_text2">
                <p>
                The dynamic excitement of life in an exotic south pacific tropical paradise has been captured in the atmosphere at Aore Town, situated mere moments from everything you need to live a life of style and convenience.
                </p>
                <p>Every residence enjoys dedicated secure car parking, and most include additional storage space – further showcasing the focus placed on functional convenience. The subtropical-designed, open walkways offer a breezy entrance to your apartment, encouraging cross-flow ventilation into every residence. A feature staircase improves walk-ability and wellness, demonstrating the keen focus on enhancing the modern lifestyle of every resident.</p>
            </div>
      </div>
    </div>
  </div>
</section>
<!-- featured -->
<section id="featured">
  <div class="container">
    <div class="row py-5">
        <div class="col-12">
          <div class="title_container animate__animated animate__fadeInUp animate__delay-.9s"">
              <h4><?php the_field('sub_title_feature', 'option'); ?></h4>
              <h2><?php the_field('title_feature_residences_section', 'option'); ?></h2>
              <P><?php the_field('description_featured', 'option'); ?></P>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row pb-5 justify-content-center">
        <div class="container-slider">
        <?php      /**
           * Setup query to show the ‘featured’ post type with ‘3’ posts.
           * Output the the content
           */
          $args = array(  
              'post_type' => 'residences',
              'post_status' => 'publish',
              'posts_per_page' => 8,
              // 'product_cat' => 'trending-products',
              
          );
        
         ?> 
     <?php 
      $featured = new WP_Query( $args ); 
      if ( $featured->have_posts() ):
            while( $featured->have_posts() ): $featured->the_post(); ?>
            <div class="slider__item">
              <div class="box_img animate__animated animate__fadeInRight animated" data-animation-in="zoomInImage">
                <?php the_post_thumbnail( 'large' ); ?>
              </div> 
              <div class="dis_block">
              <?php the_title( sprintf('<h2 class="featured_title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>');?>
              </div>      
                <div class="featured_content animate__animated animate__fadeInUp">
                  <div class="text-box">
                    <h4><?php the_time( 'F j, Y' ); ?></h4>
                    <?php
                        foreach((get_the_category()) as $category) { 
                        ?> 
                    <span><?= $category->cat_name ?></span>
                    <?php } ?>
                  </div>
                    <h2><?php the_title(); ?></h2>
                    <a  class="view"  href="<?php the_permalink();?>">View</a>
                </div>
            </div>
          <?php endwhile;
         endif; 
         wp_reset_postdata();
         ?>
            </div>
        </div>
  </div>
</section>
<!-- blogs -->
<section id="blogs">
  <div class="container">
    <div class="row py-5">
      <div class="col-12">
        <div class="title_container animate__animated animate__fadeInUp animate__delay-.9s"">
          <h4><?php the_field('sub_title_news_blog', 'option'); ?></h4>
          <h2><?php the_field('title_news_blog', 'option'); ?></h2>
        </div>
      </div>
    </div>
    <div class="row py-3">
    <?php      /**
     * Setup query to show the ‘Blog’ post type with ‘3’ posts.
     * Output the the content
     */
        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 8,
            // 'product_cat' => 'trending-products',
            
        );
        
    ?> 
     <?php 
   $blog = new WP_Query( $args ); 
   if ( $blog->have_posts() ):
         while( $blog->have_posts() ): $blog->the_post(); ?>
      <div class="col-lg-4 col-md-6">
        <div class="img_blog animate__animated animate__fadeInUp animate__delay-.9s">
          <?php the_post_thumbnail(); ?>
       </div>
          <div class="blog_content animate__animated animate__fadeInUp animate__delay-.9s">
          <?php the_title( sprintf('<h2 class="blog_title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>');?>
            <p><?php the_content();?></p>
        </div>
      </div>
      <?php  
         endwhile;
        endif; 
        wp_reset_postdata();
       ?>   
    </div>
   </div>
  </div>
</section>
<!-- testimonial -->
<section id="testimonial" style="
    background: url(/aoretown/wp-content/uploads/2020/12/testimonial-bg.jpg);height: 100%;background-repeat: repeat;background-size: cover;">
    <div class="container">
      <div class="row py-5">
        <div class="col-12">
          <!-- test -->
          <div class='content'>
            <div class='slider testimonial-slider'>
            <?php      /**
                 * Setup query to show the ‘testimonial’ post type with ‘3’ posts.
                 * Output the the content
                 */
                    $args = array(  
                        'post_type' => 'testimonial',
                        'post_status' => 'publish',
                        'posts_per_page' => 8,
                        // 'product_cat' => 'trending-products',
                        
                    );
                    
                ?> 
                 <?php 
                  $testimonial = new WP_Query( $args ); 
                  if ( $testimonial ->have_posts() ):
                        while( $testimonial ->have_posts() ): $testimonial ->the_post(); ?>


                    <div class='quote-container'>
                      <div class='quote'>
                          <p><?php the_content();?></p>
                      </div>
                      <div class="test_container">
                        <div class='portrait octogon'>
                          <?php the_post_thumbnail(); ?>
                        </div> 
                        <div class="test_title">
                          <?php the_title( sprintf('<h2 class="name_title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>');?>
                            <p><?php
                              foreach((get_the_category()) as $category) { 
                              ?>
                          <span><?= $category->cat_name ?></span>
                          <?php } ?></p>
                        </div>
                      </div>
                    </div>

                <?php  
                  endwhile;
                      endif; 
                       wp_reset_postdata();
                 ?>  
            </div>
          </div>
    <!-- test -->
        </div>
        <div class="col-12">
            <div class="partners_title">
                <h5>Our Partners</h5>
              </div>

              <div class="our_partners">
              <?php if( have_rows('partners_logo', 'option') ): ?>
                <ul class="our_container d-flex align-items-baseline"> 
                  <?php while( have_rows('partners_logo', 'option') ): the_row(); 
                  $oplogo = get_sub_field('our_partners_logo', 'option'); ?>


                    <li class="our_item">
                      <a href="#" class="our_link"><img src="<?php echo esc_url( $oplogo['url'] ); ?>" alt="logo"></a>
                    </li> 


                  <?php endwhile; ?> 
                </ul>
                <?php endif; ?>
            </div> 
          </div>
        </div>
      </div>
</section>
<!-- contact_us -->
<section id="contact_us" style="
    background: url(/aoretown/wp-content/uploads/2020/12/getintouch-bg.png);height: 100%;background-repeat: no-repeat;background-size: inherit; background-position: center; background-color: #f1e7dd;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 order-sm-5 order-lg-4 py-lg-5 py-md-0">
        <div class="form_contact_container">
          <img src="/aoretown/wp-content/uploads/2020/12/getintouch.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 order-sm-4 order-lg-5 py-lg-5 py-md-0">
        <div class="form_contact_container">
          <div class="contact_text_box text-center">
            <h2>Get in touch</h2>
              <h4>WE WILL CONTACT YOU WITHIN 24 HOURS</h4>
            </div>
            <?php echo do_shortcode('[contact_form]'); ?>

              <!-- <form id="contact-form" name="myForm" class="form" action="#"  method="POST" role="form"  data-url="<?php //echo admin_url('admin-ajax.php'); ?>">

                  <div class="form-group">
                      <label class="form-label" id="nameLabel" for="name"></label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="emailLabel" for="email"></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2">
                  </div>

                <div class="form-group">
                    <label class="form-label" id="phoneLabel" for="phone"></label>
                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" tabindex="3">
                </div>
                <div class="margin-top-25">
                    <button type="submit" class="btn btn-mod btn-border">Submit</button>
                </div>

              </form> -->
        </div>
      </div>
    </div>
  </div>
    
</section>
<?php
get_footer();
  