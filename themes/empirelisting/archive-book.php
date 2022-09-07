<?php
/**
 * The template for displaying  archive pages for book cpt
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empire_Listing
 */

get_header();
?>

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-wrapper">
               <h2 class="product-title">Listings</h2>
               <ol class="breadcrumb">
                  <li><a href="#">Home /</a></li>
                  <li class="current">Listings</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="main-container section-padding">
   <div class="container">
      
   
   
        <div class="row">
         <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
            <aside>
               <div class="widget_search">
                  <form role="search" id="search-form">
                     <input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
                     <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
                  </form>
               </div>
               <div class="widget categories">
                  <h4 class="widget-title">All Categories</h4>
                  <ul class="categories-list">
                     <li>
                        <a href="#">
                        <i class="lni-dinner"></i>
                        Hotel & Travels <span class="category-counter">(5)</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <i class="lni-control-panel"></i>
                        Services <span class="category-counter">(8)</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <i class="lni-github"></i>
                        Pets <span class="category-counter">(2)</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <i class="lni-coffee-cup"></i>
                        Restaurants <span class="category-counter">(3)</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <i class="lni-home"></i>
                        Real Estate <span class="category-counter">(4)</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <i class="lni-pencil"></i>
                        Jobs <span class="category-counter">(5)</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <i class="lni-display"></i>
                        Electronics <span class="category-counter">(9)</span>
                        </a>
                     </li>
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




get_footer();
?>