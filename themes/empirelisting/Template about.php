<?php
/**
 * Template Name: Template About
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


<section id="about" class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="about-wrapper">
               <h2 class="intro-title">Why We Are Unique</h2>
               <p class="intro-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum, doloremque quaerat sit tempora eius est reiciendis accusamus magnam quae. Explicabo dolore officia, iure a ullam aliquam nemo excepturi, repellat. uod ut delectus ad tempora.</p>
               <a href="" class="btn btn-common btn-lg">Add Listing</a>
               <a></a>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-xs-12">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about.png" alt="">
         </div>
      </div>
   </div>
</section>
<section class="counter-section section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-sm-6 work-counter-widget">
            <div class="counter">
               <div class="icon"><i class="lni-layers"></i></div>
               <h2 class="counterUp">8325</h2>
               <p>Ad Posted</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 work-counter-widget">
            <div class="counter">
               <div class="icon"><i class="lni-users"></i></div>
               <h2 class="counterUp">5487</h2>
               <p>Members</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 work-counter-widget">
            <div class="counter">
               <div class="icon"><i class="lni-briefcase"></i></div>
               <h2 class="counterUp">2012</h2>
               <p>Premium Ads</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 work-counter-widget">
            <div class="counter">
               <div class="icon"><i class="lni-map"></i></div>
               <h2 class="counterUp">200</h2>
               <p>Locations</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="services section-padding">
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

<?php

get_footer();
