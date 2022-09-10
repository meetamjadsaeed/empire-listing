<?php 
$sector = get_queried_object()->name;
?>

<section class="featured section-padding">
<div class="container">
      <h1 class="section-title">Category: <?php echo $sector ?></h1>      
      <div class="row">
         
         <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
 
// $city = 
         
         // args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'book',
   'post_status' => 'publish',
   'category_name' => strtolower($sector),
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
                  <p><b>With Discount <?php the_field('Discount'); ?>%</b></p>
                  <p><?php $my_date = the_date( '', '<P>', '</P>', false );
echo 'Posted On '.$my_date; ?></p>
                  <p class="dsc"><?php the_excerpt(); ?></p>
                
                  <div class="listing-bottom"> 
                     <h3 class="price float-left"><?php 
                     if(!empty(get_field('Currency Symbol')))
                     {
                        the_field('Currency Symbol');
                     }
                     else
                     {
                        echo $currencySymbol;
                     }
                     ?>
                     <?php 
                     $discount = get_field('Discount');
                     $price = get_field('Discount');
                     
                     if( get_field('Discount') )
                           {
                              echo $price -( ($price * $discount )/100 ); 
                           }
                           else
                           {
                              the_field('price');
                           }

                           ?>


                     </h3>
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


</h1>