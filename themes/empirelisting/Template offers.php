<?php
/**
 * Template Name: Template Offers
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
                  <div class="dashboard-box">
                     <h2 class="dashbord-title">Offers</h2>
                  </div>
                  <?php 
               $dashbordTitle = "Your Offers";
               dashbordTitle($dashbordTitle);
               
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
