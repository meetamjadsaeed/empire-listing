<?php
   /*
 * Template Name: Single Book Template
 * Template Post Type:book
 * Empire Listing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Empire_Listing
 */
     
    get_header();  ?>
<div class="page-header" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner1.jpg);">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-wrapper">
               <h2 class="product-title">Details</h2>
               <ol class="breadcrumb">
                  <li><a href="#">Home /</a></li>
                  <li class="current">Details</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="section-padding">
   <div class="container">
      <div class="product-info row">
         <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="ads-details-wrapper">
               <div id="owl-demo" class="owl-carousel owl-theme">
                  <div class="item">
                     <div class="product-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/productinfo/img1.jpg" alt="">
                     </div>
                     <span class="price">$1,550</span>
                  </div>
                  <div class="item">
                     <div class="product-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/productinfo/img3.jpg" alt="">
                     </div>
                     <span class="price">$1,550</span>
                  </div>
                  <div class="item">
                     <div class="product-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/productinfo/img2.jpg" alt="">
                     </div>
                     <span class="price">$1,550</span>
                  </div>
               </div>
            </div>
            <div class="details-box">
               <div class="ads-details-info">
                  <h2><?php the_title(); ?></h2>
                  <div class="details-meta">
                     <span><a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a></span>
                     <span>
                     <?php if(   get_field('country') ): ?>    
                     <a href="#"><i class="lni-map-marker"></i><?php the_field('country'); ?></a>
                     <?php endif; ?>
                     </span>
                     <span><a href="#"><i class="lni-eye"></i> 299 View</a></span>
                  </div>
                  <p><?php $my_date = the_date( '', '<P>', '</P>', false );
                     echo 'Posted On '.$my_date; ?></p>
                  <p class="mb-4"><?php the_content(); ?>
                  <p>Click on the button to copy the text from the text field. Try to paste the text (e.g. ctrl+v) afterwards in a different window, to see the effect.</p>
                  <input type="text" value="<?php the_permalink();?>" id="myInput">
                  <button class="btn btn-common" onclick="myFunction()">Copy and share url</button>
                  <script>
                     function myFunction() {
                       /* Get the text field */
                       var copyText = document.getElementById("myInput");
                     
                       /* Select the text field */
                       copyText.select();
                       copyText.setSelectionRange(0, 99999); /* For mobile devices */
                     
                       /* Copy the text inside the text field */
                       navigator.clipboard.writeText(copyText.value);
                       
                       /* Alert the copied text */
                       alert("Copied the text: " + copyText.value);
                     }
                  </script>
                  </p>
               </div>
               <div class="tag-bottom">
                  <div class="float-left">
                     <ul class="advertisement">
                        <li>
                           <p><strong><i class="lni-folder"></i> Categories:</strong> <a href="#"><?php the_terms( $post->ID, 'book_cat', '', ' / ' ); ?></a></p>
                        </li>
                        <li>
                           <?php if(   get_field('Condition') ): ?>
                           <p><strong><i class="lni-archive"></i> Condition:</strong> <?php the_field('Condition'); ?></p>
                           <?php endif; ?>
                        </li>
                        <li>
                           <p><strong><i class="lni-package"></i> Brand:</strong> <a href="#"><?php the_terms( $post->ID, 'brand', '', ' / ' ); ?></a></p>
                        </li>
                     </ul>
                  </div>
                  <div class="float-right">
                     <div class="share">
                        <div class="social-link">
                           <a class="facebook" data-toggle="tooltip" data-placement="top" title="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                           <a class="twitter" data-toggle="tooltip" data-placement="top" title="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                           <a class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                           <a class="google" data-toggle="tooltip" data-placement="top" title="google plus" href="#"><i class="lni-google-plus"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-xs-12">
            <aside class="details-sidebar">
               <div class="widget">
                  <h4 class="widget-title">Ad Posted By</h4>
                  <div class="agent-inner">
                     <div class="agent-title">
                        <div class="agent-photo">
                           <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/productinfo/agent.jpg" alt=""></a>
                        </div>
                        <div class="agent-details">
                           <?php $current_user = wp_get_current_user(); ?>
                           <h3>
                              <!-- <a href="<?php echo site_url();?>/author/<?php echo $current_user->user_login ?>"><?php echo $current_user->display_name; ?>
                                 </a> -->
                              <?php echo $current_user->display_name; ?>
                           </h3>
                           <?php if(   get_field('Phone') ): ?>
                           <span><i class="lni-phone-handset"></i><?php the_field('Phone'); ?></span>
                           <?php endif; ?>
                        </div>
                     </div>
                     <!-- <input type="text" class="form-control" placeholder="Your Email">
                        <input type="text" class="form-control" placeholder="Your Phone">
                        <p>I'm interested in this property [ID 123456] and I'd like to know more details.</p>
                        <button class="btn btn-common fullwidth mt-4">Send Message</button> -->
                  </div>
               </div>
               <div class="widget">
                  <h4 class="widget-title">More Ads From Seller</h4>


                  <?php 	
    $post_objects = get_field('Related Post');
    if( $post_objects ): ?>
		
    
<ul class="posts-list">
        <?php foreach( $post_objects as $post):

          setup_postdata($post); ?>
          <li>
                        <div class="widget-thumb">
                        <figure>
                  <!-- <div class="icon">
                     <span class="bg-green"><i class="lni-heart"></i></span>
                     <span><i class="lni-bookmark"></i></span>
                  </div> -->
                  <?php if ( has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail('full'); ?>
                  </a>
                  <?php endif; ?>
               </figure>
                        </div>
                        <div class="widget-content">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                           <div class="meta-tag">
                              <span>
                              <a href="#"><i class="lni-user"></i><?php the_author(); ?></a>
                              </span>
                              <span>
                              <?php if(   get_field('country') ): ?>
                     <a href="#"><i class="lni-map-marker"></i><?php the_field('country'); ?></a>
                     <?php endif; ?>
                              </span>
                              <span>
                              <a href="#"><i class="lni-tag"></i> <?php the_category(); ?></a>
                              </span>
                           </div>
                           <?php if(   get_field('price') ): ?> 
                     <h2 class="price">Rs.<?php the_field('price'); ?></h2>
                     <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                     </li>

        <?php endforeach; ?>
    </ul>
    
    <?php endif; ?>

                     
                  
               </div>
            </aside>
         </div>
      </div>
   </div>
</div>
<section class="subscribes section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="subscribes-inner">
               <div class="icon">
                  <i class="lni-pointer"></i>
               </div>
               <div class="sub-text">
                  <h3>Subscribe to Newsletter</h3>
                  <p>and receive new ads in inbox</p>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form>
               <div class="subscribe">
                  <input class="form-control" name="EMAIL" placeholder="Enter your Email" required="" type="email">
                  <button class="btn btn-common" type="submit">Subscribe</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<?php
get_footer();