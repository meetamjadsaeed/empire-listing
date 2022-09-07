<?php
/**
 * Books Port functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Empire_Listing
 */



// submit Book From Front End 
 add_shortcode( 'themedomain_request_book', 'themedomain_request_book' );
    function themedomain_request_book() {
        themedomain_book_if_submitted(); ?>
        <?php 


$IP = $_SERVER['REMOTE_HOST'];
$geoPluginAPI = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$IP));
 
// echo "<h1>".$geoPluginAPI['geoplugin_latitude']."</h1>";
// echo "<h1>".$geoPluginAPI['geoplugin_longitude']."</h1>";
// echo "<h1>".$geoPluginAPI['geoplugin_city']."</h1>";

?>
        <form id="new_post" name="new_post" method="post"  enctype="multipart/form-data">
        <div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/author/img1.jpg" alt=""></a>
</figure>
<div class="usercontent">
 <?php $current_user = wp_get_current_user(); ?>
<h3><?php 

// printf( __( 'Hello %s', 'textdomain' ), esc_html('<a href="http://www.example.com/">'.$current_user->display_name.'</a>'  ) ) ;
// printf( __( 'Hellkhjo %s', 'textdomain' ),'<h1>', '</h1>', esc_html( '<a href="http://www.example.com/">A link</a>' ) ) ;
printf( '<a href="%s" class="your-class">' . __( 'Hello  '.$current_user->display_name ) . '</a>',  __( 'http://localhost/empirelisting/public-profile/' ) );
 ?>!</h3>

<h4>
  
<?php
if( is_user_logged_in() )
 $user = wp_get_current_user();
 printf( __( 'I am %s', 'textdomain' ), esc_html( $user->roles[0] ) ) ;
?>

</h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a href="http://localhost/empirelisting/dashboard/">
<i class="lni-dashboard"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="account-profile-setting.html">
<i class="lni-cog"></i>
<span>Profile Settings</span>
</a>
</li>
<li>
<a href="account-myads.html">
<i class="lni-layers"></i>
<span>My Ads</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-envelope"></i>
<span>Offers/Messages</span>
</a>
</li>
<li>
<a href="payments.html">
<i class="lni-wallet"></i>
<span>Payments</span>
</a>
</li>
<li>
<a href="account-favourite-ads.html">
<i class="lni-heart"></i>
<span>My Favourites</span>
</a>
</li>
<li>
<a href="account-profile-setting.html">
<i class="lni-star"></i>
<span>Privacy Settings</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-enter"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg" alt="">
</div>
</div>
</aside>
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Ad Detail</h2>
</div>

<div class="dashboard-wrapper">

<div class="form-group mb-3">
  <label for="title" class="control-label"><?php echo esc_html__('Title','theme-domain'); ?></label>
<input class="form-control input-md" name="title" placeholder="Title" type="text" id="title" value="">
</div>

<div class="form-group mb-3">
  <label for="title" class="control-label"><?php echo esc_html__('Description','theme-domain'); ?></label>
<?php

  wp_nonce_field('nonce_action', 'nonce_field');
$content = get_option('my_content');
wp_editor( $content, 'settings_wpeditor' );

?>

</div>

<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Categories</label>
<div class="tg-select form-control">
<p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=book_cat' ); ?>
  
</p>
</div>
</div>

<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Book Status</label>

<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status">  
  <option selected>Open this select menu</option>
  <option value="1">Exchange</option>
  <option value="2">Buy</option>
  <option value="3">Sell</option>
  <option value="3">Donate</option>
</select>

</div>


<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Brands</label>
<div class="tg-select form-control">
<p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=brand' ); ?>
  
</p>
</div>
</div>

<div class="form-group mb-3">
  <label for="title" class="control-label"><?php echo esc_html__('Price','theme-domain'); ?></label>
<input class="form-control input-md" name="price" placeholder="Ad your Price" type="text">
<div class="tg-checkbox mt-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="tg-priceoncall">
<label class="custom-control-label" for="tg-priceoncall">Price On Call</label>
</div>
</div>
</div>

<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Condition</label>
<input class="form-control input-md" name="condition" placeholder="condition" type="text">
</div>

<div class="form-group md-3">
<section id="editor">
<div id="summernote">
</div>
</section>
</div>
<label class="tg-fileuploadlabel" for="tg-photogallery">
<span>Drop files anywhere to upload (Featured Image) </span>
<span>Or</span>
<span class="btn btn-common">Select Files</span>
<span>Maximum upload file size: 500 KB</span>
<input id="tg-photogallery" class="tg-fileinput" type="file" name="post_image" id="post_image" aria-required="true">
</label>
</div>

</div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
<div class="inner-box">
<div class="tg-contactdetail">
<div class="dashboard-box">
<h2 class="dashbord-title">Contact Detail</h2>
</div>
<div class="dashboard-wrapper">

<div class="form-group mb-3">
<label class="control-label">Phone*</label>
<input class="form-control input-md" name="phone" type="text">
</div>

<div class="form-group mb-3">
<label class="control-label">latitude*</label>
<input class="form-control input-md" name="latitude" type="text" 

value = "<?php 
echo (float)$geoPluginAPI['geoplugin_latitude'];

?>

">

</div>

<div class="form-group mb-3">
<label class="control-label">longitude*</label>
<input class="form-control input-md" name="longitude"  type="text" 

value = "<?php 
echo (float)$geoPluginAPI['geoplugin_longitude'];

?>

">

</div>
<label class="control-label">*We have added address as per your location but in case address is not correct you can change it*</label>
<div class="form-group mb-3">
<label class="control-label">Complete Address*</label>
<input class="form-control input-md" name="address"  type="text" 

value = "<?php 
foreach($geoPluginAPI as $item)
{
echo $item;
}

?>

">

</div>

<div class="form-group mb-3">
<label class="control-label">Enter Address</label>
<input class="form-control input-md" name="p_address" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">Enter Address</label>
<input class="form-control input-md" name="s_address" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">Country*</label>
<input class="form-control input-md" name="country" type="text"

value = "<?php 
echo $geoPluginAPI['geoplugin_countryName'];

?>

">
</div>




<div class="form-group mb-3">
<label class="control-label">City*</label>
<input class="form-control input-md" name="city" type="text"

value = "<?php 
echo $geoPluginAPI['geoplugin_city'];

?>

"
>
</div>


<div class="form-group mb-3">
<label class="control-label">Region*</label>
<input class="form-control input-md" name="region" type="text"

value = "<?php 
echo $geoPluginAPI['geoplugin_region'];

?>

"
>
</div>


<div class="form-group mb-3">
<label class="control-label">Your FB URL</label>
<input class="form-control input-md" name="fb" type="text">
</div>

<div class="form-group mb-3">
<label class="control-label">Your insta URL</label>
<input class="form-control input-md" name="insta" type="text">
</div>

<div class="form-group mb-3">
<label class="control-label">Your linkdn URL</label>
<input class="form-control input-md" name="linkdn" type="text">
</div>

<div class="form-group mb-3">
<label class="control-label">Your twitter URL</label>
<input class="form-control input-md" name="twitter" type="text">
</div>

<div class="tg-checkbox">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
<label class="custom-control-label" for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
</div>
</div>
<button class="btn btn-common" type="submit" value="Publish" id="submit" name="submit" >Post Ad</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
    <?php
    } ?>


    <?php 
function themedomain_book_if_submitted() {

    // Stop running function if form wasn't submitted
    if ( !isset($_POST['title']) ) {
        return;
    }

    // Add the content of the form to $post as an array
    $post = array(
        'post_title'    => $_POST['title'],
        'post_content'  => $_POST['settings_wpeditor'],
        'post_category' => array($_POST['cat']),   
        'post_status'   => 'draft',   // Could be: publish
        'post_type'   => 'book' // Could be: 'page' or your CPT
    );
  $post_id = wp_insert_post($post);
  
  // For Featured Image
  if( !function_exists('wp_generate_attachment_metadata')){
    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
    require_once(ABSPATH . "wp-admin" . '/includes/media.php');
  }
  if($_FILES) {
    foreach( $_FILES as $file => $array ) {
      if($_FILES[$file]['error'] !== UPLOAD_ERR_OK){
        return "upload error : " . $_FILES[$file]['error'];
      }
      $attach_id = media_handle_upload( $file, $post_id );
    }
  }
  if($attach_id > 0) {
    update_post_meta( $post_id,'_thumbnail_id', $attach_id );
  }

  // Save a Price text value.
  $field_key = "field_622f905fbc81b";
  update_field( $field_key, $_POST['price'], $post_id );

  // Save a condition text value.
  $field_key = "field_622f90bfbc81c";
  update_field( $field_key, $_POST['condition'], $post_id );

  // Save a Phone text value.
  $field_key = "field_6283e89ac6f35";
  update_field( $field_key, $_POST['phone'], $post_id );


  // Save a Primary Address text value.
  $field_key = "field_6283e8a7c6f36";
  update_field( $field_key, $_POST['p_address'], $post_id );

  // Save a Secondary Address text value.
  $field_key = "field_6283e8c2c6f37";
  update_field( $field_key, $_POST['s_address'], $post_id );

  // Save a country text value.
  $field_key = "field_6283e8e6c6f38";
  update_field( $field_key, $_POST['country'], $post_id );


  // Save a state text value.
  $field_key = "field_6283e91bc6f39";
  update_field( $field_key, $_POST['state'], $post_id );


  // Save a city text value.
  $field_key = "field_6283e92ac6f3a";
  update_field( $field_key, $_POST['city'], $post_id );


  // Save a fb text value.
  $field_key = "field_622f9132bc81d";
  update_field( $field_key, $_POST['fb'], $post_id );

  // Save a insta text value.
  $field_key = "field_622f9181bc81e";
  update_field( $field_key, $_POST['insta'], $post_id );

  // Save a linkdn text value.
  $field_key = "field_622f9193bc81f";
  update_field( $field_key, $_POST['linkdn'], $post_id );

  // Save a twitter text value.
  $field_key = "field_622f91a6bc820";
  update_field( $field_key, $_POST['twitter'], $post_id );

  // Save a latitude text value.
  $field_key = "field_630895202f7ad";
  update_field( $field_key, $_POST['latitude'], $post_id );

  // Save a longitude text value.
  $field_key = "field_630895602f7af";
  update_field( $field_key, $_POST['longitude'], $post_id );

  // Save a address text value.
  $field_key = "field_6308a727d1320";
  update_field( $field_key, $_POST['address'], $post_id );

  // Save a country text value.
  $field_key = "field_622f9046bc81a";
  update_field( $field_key, $_POST['country'], $post_id );


  // Save a city text value.
  $field_key = "field_6283e92ac6f3a";
  update_field( $field_key, $_POST['city'], $post_id );

  // Save a region text value.
  $field_key = "field_6308ce9c3e1c5";
  update_field( $field_key, $_POST['region'], $post_id );

  // Save a Book Status value.
  $field_key = "field_630a348fc2537";
  update_field( $field_key, $_POST['status'], $post_id );


    echo 'Saved your post successfully! :)';
} ?>
