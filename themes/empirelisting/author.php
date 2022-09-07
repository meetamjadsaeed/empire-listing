<?php
   /**
    * Template Name: Template Authors
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
   
   
   global $post;
   $author_id = $post->post_author;
   
   // to get  name
   $name = get_the_author_meta( 'display_name', $author_id );
   
   // to get  city
   $city = get_the_author_meta( 'billing_city', $author_id );
   
   // to get  about
   $about = get_the_author_meta( 'description', $author_id );
   
   // to get  email
   $email = get_the_author_meta( 'user_email', $author_id );
   
   // to get  phone number
   $phone = get_the_author_meta( 'billing_phone', $author_id );
   
   // to get  ID
   $userId = get_the_author_meta( 'ID', $author_id );

   // to get DATE 
   get_currentuserinfo(); 
$user_data = get_userdata($userId);
$registered_date = $user_data->user_registered;

// User profile
$profile = get_avatar_url($userId);

//    // to get DATE 
//    $createdDate = the_date();
   
   ?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<?php 
   include(dirname(__FILE__)."/reuse/pageHeader.php");
   
   
   
   ?>  
<?php
   // $blogusers = get_users();
   // // Array of WP_User objects.
   // foreach ( $blogusers as $user ) {
   //     echo '<span>' . esc_html( $user->display_name ) . '</span>';
   // }
   ?>
   
<div class="row py-5 px-4">
   <div class="col-md-5 mx-auto">
      <!-- Profile widget --> 
      <div class="bg-white shadow rounded overflow-hidden">
         <div class="px-4 pt-0 pb-4 cover">
            <div class="media align-items-end profile-head">
               <div class="profile mr-3"><img src="<?php echo $profile;?>" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">
                  <?php
                     if ( is_user_logged_in() ) {
                         echo "Edit profile";
                      } else {
                         echo "" ;
                      }
                      ?>
                  </a>
                  
               </div>
               <div class="media-body mb-5 text-white">
                  <h4 class="mt-0 mb-0">
                     <?php
                        if ( $name ){
                            echo ucwords($name);
                        }
                        else
                        {
                        echo "User";
                        }
                        ?>
                  </h4>
                  <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>
                     <?php
                        if ( $city ){
                            echo ucwords($city);
                        }
                        else
                        {
                        echo "User city is not available";
                        }
                        ?>
                  </p>
                  <p class="small">
                     <?php
                        if ( $registered_date ){
                            echo "Member since ".$registered_date;
                        }
                        else
                        {
                        echo "Hidden";
                        }
                        ?>
                  </p>
               </div>
            </div>
         </div>
         <div class="bg-light p-4 d-flex justify-content-end text-center">
            <ul class="list-inline mb-0">
               <li class="list-inline-item">
                  <h5 class="font-weight-bold mb-0 d-block">215</h5>
                  <small class="text-muted"> <i class="fas fa-image mr-1"></i>Ads</small> 
               </li>
               <li class="list-inline-item">
                  <h5 class="font-weight-bold mb-0 d-block">745</h5>
                  <small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small> 
               </li>
               <li class="list-inline-item">
                  <h5 class="font-weight-bold mb-0 d-block">340</h5>
                  <small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small> 
               </li>
            </ul>
         </div>
         <div class="px-4 py-3">
            <h5 class="mb-0">About</h5>
            <div class="p-4 rounded shadow-sm bg-light">
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
            <p class="font-italic mb-0">
                  
                  <?php
                     if ( $about ){
                         echo $about;
                     }
                     else
                     {
                     echo "User info is not available";
                     }
                     ?>
               </p>
               
                      <a href = "mailto:<?php 
                      
                      if ( $email ){
                        echo $email;
                    }
                    else
                    {
                       echo "example@gmail.com";
                    }
                      
                      ?>?subject = Contact&body = Message">
                      <p class="font-italic mb-0"> 
                      <?php
                       
                      if ( $email ){
                        echo $email;
                    }
                    else
                    {
                       echo "User email is not available";
                    }
                    ?>
                     
                     </p>
                     </a>

                     <a href = "tel:<?php 
                      
                      if ( $phone ){
                        echo $phone;
                    }
                    else
                    {
                       echo "1234567";
                    }
                      
                      ?>">
                      <p class="font-italic mb-0"> 
                      <?php
                       
                      if ( $phone ){
                        echo $phone;
                    }
                    else
                    {
                       echo "User phone is not available";
                    }
                    ?>
                     
                     </p>

                     

                     </a>

            </div>
         </div>
         <div class="py-4 px-4">
            <div class="d-flex align-items-center justify-content-between mb-3">
               <h5 class="mb-0">User's Ads</h5>
               <a href="#" class="btn btn-link text-muted">Show all</a> 
            </div>

           
   
      
      <div class="row">

         
         <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
 
// $city = 
         
         // args
$args = array(
	               'numberposts'	=> -1,
                  'post_type'		=> 'book',
                  'post_status' => 'publish',
                   'author' => $userId, 
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
     


           
            <!-- <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
               <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
               <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div> -->
           

         
      </div>
   </div>
</div>
</div>
<?php
get_footer();