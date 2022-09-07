<?php
/**
 * Template Name: Template Favourites
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


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-wrapper">
               <h2 class="product-title">My Ads</h2>
               <ol class="breadcrumb">
                  <li><a href="#">Home /</a></li>
                  <li class="current">My Ads</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- <a href="<?php echo admin_url('post-new.php?post_type=book'); ?>">aaaa</a> -->
<div id="content" class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
         <?php 
include(dirname(__FILE__)."/reuse/sideBarMenu.php");

?>  
         </div>
         <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="page-content">
               <div class="inner-box">
                  <!-- <div class="dashboard-box">
                     <h2 class="dashbord-title">My Ads</h2>
                  </div> -->
               <?php 
               $dashbordTitle = "My Favourites";
               dashbordTitle($dashbordTitle);
               ?>


<?php 
   include(dirname(__FILE__)."/reuse/dashboardWrapper.php");
   
   ?>
                           </div>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

    

<?php

get_footer();
