<?php
/**
 * Template Name: Template Home
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empire_Listing
 */

get_header();

?>
<div id="hero-area">
   <div class="overlay"></div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-12 col-lg-9 col-xs-12 text-center">
            <div class="contents">
               <h1 class="head-title">Welcome to The <span class="year">BOOKSPORT</span></h1>
               <p>Exchange, Buy, Sell, And Donate The Books Free Anywhere In Pakistan</p>
               <div class="search-bar">
                  <div class="search-inner">
                     <form method="get" class="search-form" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
                        <div class="form-group">
                           <input type="text" value="<?php the_search_query(); ?>" name="s" id="s"  class="form-control" placeholder="What are you looking for?"/>
                        </div>
                        <div class="form-group inputwithicon">
                           <div class="select">
                              <?php
            $categories = get_categories( array(
              'orderby'    => 'name',
              'order'      => 'ASC',
              'hide_empty' => 0,
              'taxonomy'   =>  'book_city'
            ) );
            echo  '<select>'; 
            foreach( $categories as $category ) {
               


                                 echo  '<option value="none">'.$category->name.'</option>';  

            }

            echo  '</select>';

            ?>
                           </div>
                           <i class="lni-target"></i>
                        </div>
                        <div class="form-group inputwithicon">
                           <div class="select">
                              <?php
            $categories = get_categories( array(
              'orderby'    => 'name',
              'order'      => 'ASC',
              'hide_empty' => 0,
              'taxonomy'   =>  'book_cat'
            ) );
            echo  '<select>'; 
            foreach( $categories as $category ) {
               


                                 echo  '<option value="none">'.$category->name.'</option>';  

            }

            echo  '</select>';

            ?>



                           </div>
                           <i class="lni-menu"></i>
                        </div>
                        <input type="submit" id="searchsubmit" value="Search" class="btn btn-common" type="button"/>
                        <i class="lni-search"></i> Search Now
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</header>


<!-- <section>

<div>
   <form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
    <div>
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
</div>   

</section> -->

<section class="categories-icon bg-light section-padding">
   <div class="container">
      <h1 class="section-title">Books By Category</h1>
      <div class="row">
         
         <?php
            $categories = get_categories( array(
              'orderby'    => 'name',
              'order'      => 'ASC',
              'hide_empty' => 0,
              'taxonomy'   =>  'book_cat'
            ) );
            
            foreach( $categories as $category ) {
              $category_link = sprintf( 
                '<a href="%1$s" alt="%2$s">%3$s</a>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                esc_html( $category->name )
              );
            
              echo '<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            
              <div class="icon-box">
              
              <div class="icon">
              <i class="lni lni-book"></i>
              </div>
              <h4>' . $category_link . '</h4>
              </div>
              
              
              </div>
               ';
            } 
            ?>
      </div>
   </div>
</section>
<?php 

$IP = $_SERVER['REMOTE_HOST'];
$geoPluginAPI = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$IP));

$lat = $geoPluginAPI['geoplugin_latitude'];
$lon = $geoPluginAPI['geoplugin_longitude'];
// echo '<h1>'.$lat.'</h1>';
// echo '<h1>'.$lon.'</h1>';
// var_dump($lat);
// var_dump($lon);
$latlo2loc = unserialize(file_get_contents('http://www.geoplugin.net/extras/location.gp?lat='.$lat.'&lon='.$lon.'&format=php'));
$place = $latlo2loc['geoplugin_place'];
?>
<section class="featured section-padding">
<!-- <a href="<?php echo esc_url( get_permalink(613) ); ?>"><?php esc_html_e( 'Testing', 'textdomain' ); ?></a> -->



   <div class="container">
      <h1 class="section-title">Latest Books</h1>
   


      <h2 class="section-title"><?php
      
      echo "Your Current location is "."<b>".$place."</b>";
      
      ?></h2>
      <?php
// if($_POST['like']) {
// $sql = "UPDATE table set `likes` = `likes`+1 where `product_id` = '1'";
// $result=mysql_query($sql);
// }

// global $wpdb;
// $shop_name = "Pakainfo, com";
// $store_address = "Kothariya ring road chokdi rajkot";

// $wpdb->insert( $wpdb->wp_posts, array("shop_name" => $shop_name, "store_address" => $store_address ));


?>

<!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input type = "submit" value = "like" name='like'/>
</form> -->
      
      <div class="row">
         
         <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
 
// $city = 
         
         // args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'book',
   'post_status' => 'publish',
	'meta_key'		=> 'Place',
	'meta_value'	=> $place,
   'paged' => $paged
);


// query
$the_query = new WP_Query( $args );
            $the_query = new WP_Query($args); ?>
         <?php if ( $the_query->have_posts() ) { ?>
         <?php while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
            <div class="featured-box">
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
               <div class="feature-content">
                  <div class="product">
                     <a href="#">Electronic > </a>
                     <a href="#">Cameras</a>
                     
                  </div>
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
                  <p><?php $my_date = the_date( '', '<P>', '</P>', false );
echo 'Posted On '.$my_date; ?></p>
                  <p class="dsc"><?php the_excerpt(); ?></p>
                
                  <div class="listing-bottom">
                    <?php if(   get_field('price') ): ?> 
                     <h3 class="price float-left">Rs.<?php the_field('price'); ?></h3>
                     <?php endif; ?>
                     <a href="<?php the_permalink(); ?>" class="btn btn-common float-right">View Details</a>
                  </div>
               </div>
              
            </div>
         </div>
          <?php } ?>
         

         <div class="row">
        <div class="col-sm-12">
          <nav>
            
            <ul class="pagination">
              <!--
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </a>
              </li>-->
              <?php
    $total_pages = $the_query->max_num_pages;
    if ( $total_pages > 1 ) {
      $current_page = max( 1, get_query_var( 'paged' ) ); ?>
      <div class="archive-pagination">
        <?php echo paginate_links( array(
          'base' => get_pagenum_link( 1 ) . '%_%',
          'format' => 'page/%#%',
          'current' => $current_page,
          'total' => $total_pages
        ) ); ?>
      </div>
    <?php }
    wp_reset_postdata();
  } else { ?>
    <div class="archived-posts"><?php echo esc_html__( 'No posts matching the query were found.', 'textdomain' ); ?></div>
  <?php } ?>
            </ul>
          </nav>
        </div>
      </div>
        
</section>



<section class="cities bg-light section-padding">
   <div class="container">
      <h1 class="section-title">Browse By Cities</h1>
      
      <div class="row">

<?php 
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'taxonomy'   =>  'book_city'
) );
// get the current taxonomy term
$term = get_queried_object();
$image = get_field('image', $term);
foreach($categories as $category) {
   //$category_id = get_cat_ID( $category );
 
    // Get the URL of this category
    //$category_link = get_category_link( $category_id );
?>

         <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="img-box">
               <div class="img-box-content">

                  <?php  echo "<h4>".$category->name."<span>( ".$category->category_count." Ads)</span></h4>";?>
               </div>
               <div class="img-box-background">
                  <img class="img-fluid" src="<?php the_field('field_62b01ea6f3ac1',$category); ?>" alt="">
               </div>
            </a>
         </div>


          <?php   }
?>

      </div>
      
   </div>
</section>
<section class="featured-lis section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
            <h3 class="section-title">Featured Books</h3>
            <div id="new-products" class="owl-carousel owl-theme">
               <div class="item">
                  <div class="product-item">
                     <div class="carousel-thumb">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/product/img1.jpg" alt="">
                        <div class="overlay">
                           <div>
                              <a class="btn btn-common" href="<?php the_permalink(); ?>">View Details</a>
                           </div>
                        </div>
                        <div class="btn-product bg-sale">
                           <a href="#">Sale</a>
                        </div>
                        <span class="price">$999.00</span>
                     </div>
                     <div class="product-content">
                        <h3 class="product-title"><a href="ads-details.html">Macbook Pro 2020</a></h3>
                        <span>Electronic / Computers</span>
                       
                        <!-- <div class="icon">
                           <span><i class="lni-bookmark"></i></span>
                           <span><i class="lni-heart"></i></span>
                        </div> -->
                        <div class="card-text">
                           <div class="float-left">
                              <span class="icon-wrap">
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star"></i>
                              </span>
                              <span class="count-review">
                              (12 Review)
                              </span>
                           </div>
                           <div class="float-right">
                              <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="product-item">
                     <div class="carousel-thumb">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/product/img2.jpg" alt="">
                        <div class="overlay">
                           <div>
                              <a class="btn btn-common" href="<?php the_permalink(); ?>">View Details</a>
                           </div>
                        </div>
                        <span class="price">$269.00</span>
                     </div>
                     <div class="product-content">
                        <h3 class="product-title"><a href="ads-details.html">Nikon Camera</a></h3>
                        <span>Electronic / Camera</span>
                        
                        <!-- <div class="icon">
                           <span><i class="lni-bookmark"></i></span>
                           <span><i class="lni-heart"></i></span>
                        </div> -->
                        <div class="card-text">
                           <div class="float-left">
                              <span class="icon-wrap">
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              </span>
                              <span class="count-review">
                              (2 Review)
                              </span>
                           </div>
                           <div class="float-right">
                              <a class="address" href="#"><i class="lni-map-marker"></i> California</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="product-item">
                     <div class="carousel-thumb">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/product/img3.jpg" alt="">
                        <div class="overlay">
                           <div>
                              <a class="btn btn-common" href="<?php the_permalink(); ?>">View Details</a>
                           </div>
                        </div>
                        <div class="btn-product bg-slod">
                           <a href="#">Sold</a>
                        </div>
                        <span class="price">$799.00</span>
                     </div>
                     <div class="product-content">
                        <h3 class="product-title"><a href="ads-details.html">iPhone X Refurbished</a></h3>
                        <span>Electronic / Phones</span>
                        <!-- <div class="icon">
                           <span><i class="lni-bookmark"></i></span>
                           <span><i class="lni-heart"></i></span>
                        </div> -->
                        <div class="card-text">
                           <div class="float-left">
                              <span class="icon-wrap">
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star"></i>
                              </span>
                              <span class="count-review">
                              (8 Review)
                              </span>
                           </div>
                           <div class="float-right">
                              <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="product-item">
                     <div class="carousel-thumb">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/product/img4.jpg" alt="">
                        <div class="overlay">
                           <div>
                              <a class="btn btn-common" href="<?php the_permalink(); ?>">View Details</a>
                           </div>
                        </div>
                        <span class="price">$99.00</span>
                     </div>
                     <div class="product-content">
                        <h3 class="product-title"><a href="ads-details.html">Baby Toy</a></h3>
                        <span>Sports / Baby Toys</span>
                        <!-- <div class="icon">
                           <span><i class="lni-bookmark"></i></span>
                           <span><i class="lni-heart"></i></span>
                        </div> -->
                        <div class="card-text">
                           <div class="float-left">
                              <span class="icon-wrap">
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star"></i>
                              </span>
                              <span class="count-review">
                              (12 Review)
                              </span>
                           </div>
                           <div class="float-right">
                              <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="product-item">
                     <div class="carousel-thumb">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/product/img5.jpg" alt="">
                        <div class="overlay">
                           <div>
                              <a class="btn btn-common" href="<?php the_permalink(); ?>">View Details</a>
                           </div>
                        </div>
                        <span class="price">$99.00</span>
                     </div>
                     <div class="product-content">
                        <h3 class="product-title"><a href="ads-details.html">Baby Toy</a></h3>
                        <span>Sports / Baby Toys</span>
                        <!-- <div class="icon">
                           <span><i class="lni-bookmark"></i></span>
                           <span><i class="lni-heart"></i></span>
                        </div> -->
                        <div class="card-text">
                           <div class="float-left">
                              <span class="icon-wrap">
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star"></i>
                              </span>
                              <span class="count-review">
                              (12 Review)
                              </span>
                           </div>
                           <div class="float-right">
                              <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="product-item">
                     <div class="carousel-thumb">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/product/img6.jpg" alt="">
                        <div class="overlay">
                           <div>
                              <a class="btn btn-common" href="<?php the_permalink(); ?>">View Details</a>
                           </div>
                        </div>
                        <div class="btn-product bg-sale">
                           <a href="#">Sale</a>
                        </div>
                        <span class="price">$99.00</span>
                     </div>
                     <div class="product-content">
                        <h3 class="product-title"><a href="ads-details.html">Baby Toy</a></h3>
                        <span>Sports / Baby Toys</span>
                        <!-- <div class="icon">
                           <span><i class="lni-bookmark"></i></span>
                           <span><i class="lni-heart"></i></span>
                        </div> -->
                        <div class="card-text">
                           <div class="float-left">
                              <span class="icon-wrap">
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star-filled"></i>
                              <i class="lni-star"></i>
                              </span>
                              <span class="count-review">
                              (12 Review)
                              </span>
                           </div>
                           <div class="float-right">
                              <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="works section-padding">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h3 class="section-title">How It Works?</h3>
         </div>
         <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="works-item">
               <div class="icon-box">
                  <i class="lni-users"></i>
               </div>
               <p>Create an Account</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="works-item">
               <div class="icon-box">
                  <i class="lni-bookmark-alt"></i>
               </div>
               <p>Post Free Book</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="works-item">
               <div class="icon-box">
                  <i class="lni-thumbs-up"></i>
               </div>
               <p>Deal Done</p>
            </div>
         </div>
         <hr class="works-line">
      </div>
   </div>
</section>
<section class="services bg-light section-padding">
   <div class="container">

   <?php 
include(dirname(__FILE__)."/reuse/keyFeatures.php");

?>   


   </div>
</section>
<section class="testimonial section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            
         <?php 
// include(dirname(__FILE__)."/reuse/reveiwSlider.php");

?>


         </div>
      </div>
   </div>
</section>



<section id="blog" class="section-padding">
   <div class="container">
      <h2 class="section-title">
         Blog Post
      </h2>
      <div class="row">

         <?php $the_query = new WP_Query(
              array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'paged' => $paged
              ) ); ?>
         <?php if ( $the_query->have_posts() ) { ?>
         <?php while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>


         <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <div class="blog-item-wrapper">
               <div class="blog-item-img">
                  <?php if ( has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail('full'); ?>
                  </a>
                  <?php endif; ?>
               </div>
               <div class="blog-item-text">
                  <div class="meta-tags">
                     <span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By <?php the_author(); ?></a></span>
                     <span class="date float-right"><i class="lni-calendar"></i> <?php the_date(); ?></span>
                  </div>
                  <h3>
                     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <p>
                     <?php the_excerpt(); ?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-common">Read More</a>
               </div>
            </div>
         </div>

<?php } ?>

      </div>
        <?php 
    wp_reset_postdata();
  } else { ?>
    <div class="archived-posts"><?php echo esc_html__( 'No posts matching the query were found.', 'textdomain' ); ?></div>
  <?php } ?>
   </div>
</section>
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
