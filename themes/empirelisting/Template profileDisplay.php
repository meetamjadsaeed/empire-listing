<?php
/**
 * Template Name: Template Profile Display
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

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
    
    .profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh;
    overflow-x:hidden;
}

</style>

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

<div class="row py-5 px-4"> <div class="col-md-5 mx-auto"> <!-- Profile widget --> <div class="bg-white shadow rounded overflow-hidden"> <div class="px-4 pt-0 pb-4 cover"> <div class="media align-items-end profile-head"> <div class="profile mr-3"><img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div> <div class="media-body mb-5 text-white"> 
<?php $current_user = wp_get_current_user(); ?>
<h4 class="mt-0 mb-0">

	 <?php
    if ( is_user_logged_in() ){
    printf( __( '%s', 'textdomain' ), esc_html( $current_user->display_name ) ) ;
}
 ?>

</h4> <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p> </div> </div> </div> <div class="bg-light p-4 d-flex justify-content-end text-center"> <ul class="list-inline mb-0"> <li class="list-inline-item"> <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small> </li> <li class="list-inline-item"> <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small> </li> <li class="list-inline-item"> <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small> </li> </ul> </div> <div class="px-4 py-3"> <h5 class="mb-0">About</h5> 

	<div class="p-4 rounded shadow-sm bg-light"> 
 <?php $current_user = get_currentuserinfo();
$desc = get_user_meta($current_user->ID,'description',true);?>
		<p class="font-italic mb-0"><?php echo $desc;?></p>
 <?php $current_user = get_currentuserinfo();
                        $email = get_user_meta($current_user->ID,'billing_email',true);?>

		<p class="font-italic mb-0"><?php echo $email;?></p>

		<?php $current_user = get_currentuserinfo();
                        $phone = get_user_meta($current_user->ID,'billing_phone',true);?>
		<p class="font-italic mb-0"><?php echo $phone;?></p> 
		 
	</div> 
</div> <div class="py-4 px-4"> <div class="d-flex align-items-center justify-content-between mb-3"> <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a> </div> <div class="row"> <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div> <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div> <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div> <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div> </div> </div> </div> </div>
</div>





<?php

get_footer();
