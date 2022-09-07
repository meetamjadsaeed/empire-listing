<?php
/**
 * Template Name: Template All Listings
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


<?php 
include(dirname(__FILE__)."/reuse/pageHeader.php");

?>

<div class="main-container section-padding">
   <div class="container">
      
   
   
        <div class="row">
         <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
            <aside>
               <div class="widget_search">
                  <form method="get" class="search-form" id="searchform" action="<?php bloginfo( 'url' ); ?>/" role="search">
                     <input autocomplete="off" type="text" value="<?php the_search_query(); ?>" name="s" id="s" / class="form-control" placeholder="Search..." id="search-input"/>
                     <input type="submit" id="search-submit" value="Search" class="search-btn" type="button"/ style="display:none">
                  </form>
               </div>
               <div class="widget categories">
                  <h4 class="widget-title">All Categories</h4>
                  <ul class="categories-list">


                      <?php 
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'taxonomy'   =>  'book_cat'
) );
// get the current taxonomy term
$term = get_queried_object();
$image = get_field('image', $term);
foreach($categories as $category) {
   //$category_id = get_cat_ID( $category );
 
    // Get the URL of this category
    //$category_link = get_category_link( $category_id );
?>

<br>

<?php  

$camelCase = ucwords($category->name);
?>


<li>
                        <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                        <i class="lni-dinner"></i>
                        <?php  echo $camelCase;?> <span class="category-counter">(<?php echo $category->category_count; ?>)</span>
                        </a>
                     </li>


          <?php   }
?>

                     




                  </ul>
               </div>
               <div class="widget">
                  <h4 class="widget-title">Advertisement</h4>
                  <div class="add-box">
                     <img class="img-fluid" src="assets/img/img1.jpg" alt="">
                  </div>
               </div>
            </aside>
         </div>
         <div class="col-lg-9 col-md-12 col-xs-12 page-content">
            <div class="product-filter">
               <div class="short-name">
                  <span>Showing (1 - 12 products of 7371 products)</span>
               </div>
               <div class="Show-item">
                  <span>Show Items</span>
                  <form class="woocommerce-ordering" method="post">
                     <label>
                        <select name="order" class="orderby">
                           <option selected="selected" value="menu-order">49 items</option>
                           <option value="popularity">popularity</option>
                           <option value="popularity">Average ration</option>
                           <option value="popularity">newness</option>
                           <option value="popularity">price</option>
                        </select>
                     </label>
                  </form>
               </div>
               <ul class="nav nav-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
                  </li>
               </ul>
            </div>
            <div class="adds-wrapper">
               <div class="tab-content">
                  <div id="grid-view" class="tab-pane fade active show">
                     
                  
                  <div class="row">
         <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

              
         $IP = $_SERVER['REMOTE_HOST'];
         $geoPluginAPI = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$IP));
          
         // $city = 
                  
                  // args
         $args = array(
            'numberposts'	=> 10,
            'post_type'		=> 'book',
            'post_status' => 'publish',
            'meta_key'		=> 'City',
            'meta_value'	=> $geoPluginAPI['geoplugin_city'],
            'paged' => $paged
         );

         
            $the_query = new WP_Query($args); ?>
         <?php if ( $the_query->have_posts() ) { ?>
         <?php while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
            <div class="featured-box">
               <figure>
                  <div class="icon">
                     <span class="bg-green"><i class="lni-heart"></i></span>
                     <span><i class="lni-bookmark"></i></span>
                  </div>
                  <?php if ( has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail('full'); ?>
                  </a>
                  <?php endif; ?>
               </figure>
               <div class="feature-content">
                  <div class="product">
                     <?php 
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'taxonomy'   =>  'book_cat'
) );
// get the current taxonomy term
$term = get_queried_object();
$image = get_field('image', $term);
foreach($categories as $category) {
   //$category_id = get_cat_ID( $category );
 
    // Get the URL of this category
    //$category_link = get_category_link( $category_id );
?>

<br>

<?php  

$camelCase = ucwords($category->name);
?>

<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><i class="lni-tag"></i> 
<?php  echo $camelCase.">";?>

</a>


          <?php   }
?>

                  </div>
                  <h4><a href="ads-details.html"><?php the_title(); ?></a></h4>
                  <div class="meta-tag">
                     <span>
                     <a href="#"><i class="lni-user"></i><?php the_author(); ?></a>
                     </span>
                     
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



<?php  

$camelCase = ucwords($category->name);
?>
<span>
<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><i class="lni-map-marker"></i> 
<?php  echo $camelCase."/";?>

</a>
</span>

          <?php   }
?>


                     <?php 
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'taxonomy'   =>  'book_cat'
) );
// get the current taxonomy term
$term = get_queried_object();
$image = get_field('image', $term);
foreach($categories as $category) {
   //$category_id = get_cat_ID( $category );
 
    // Get the URL of this category
    //$category_link = get_category_link( $category_id );
?>

<br>

<?php  

$camelCase = ucwords($category->name);
?>
<span>
<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><i class="lni-tag"></i> 
<?php  echo $camelCase."/";?>

</a>
</span>

          <?php   }
?>

                  </div>
                  <p class="dsc"><?php the_excerpt(); ?></p>
                  <div class="listing-bottom">
                     <?php if(   get_field('price') ): ?> 
                     <h3 class="price float-left"><?php the_field('price'); ?></h3>
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
                  <div id="list-view" class="tab-pane fade">
                  <div class="row">
         <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $the_query = new WP_Query(
              array(
                'post_type' => 'book',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'paged' => $paged
              ) ); ?>
         <?php if ( $the_query->have_posts() ) { ?>
         <?php while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
            <div class="featured-box">
               <figure>
                  <div class="icon">
                     <span class="bg-green"><i class="lni-heart"></i></span>
                     <span><i class="lni-bookmark"></i></span>
                  </div>
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
                  <h4><a href="ads-details.html"><?php the_title(); ?></a></h4>
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
                     <a href="#"><i class="lni-tag"></i> Canon</a>
                     </span>
                  </div>
                  <p class="dsc"><?php the_excerpt(); ?></p>
                  <div class="listing-bottom">
                     <h3 class="price float-left">$249.00</h3>
                     <a href="ads-details.html" class="btn btn-common float-right">View Details</a>
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
            </div>
            <div class="pagination-bar">
               <nav>
                  <ul class="pagination justify-content-center">
                     <li class="page-item"><a class="page-link active" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>









<?php

// get_footer();
