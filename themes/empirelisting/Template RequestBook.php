<?php
   /**
   * Template Name: Template Post Book
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
   
       echo do_shortcode('[themedomain_frontend_post]'); 
   
      //  $API_kEY = AIzaSyAcCLQVSzOTJXz9bEUa0V53p_QCjM2lzxI
   
      //  $curl = "https://api.ip2location.com/v2/?ip=111.88.121.18&key={YOUR_API_KEY}&package=WS25"
   
   
      
   //    $IP = $_SERVER['REMOTE_HOST'];
   //   $geoPluginAPI = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$IP));
      
   //   echo "<h1>".$geoPluginAPI['geoplugin_latitude']."</h1>";
   //   echo "<h1>".$geoPluginAPI['geoplugin_longitude']."</h1>";
   //   echo "<h1>".$geoPluginAPI['geoplugin_city']."</h1>";
   
      // printf( '<a href="%s" class="your-class"><h1>' . __( 'Go To Dashboard' ) . '</h1></a>',  __( 'http://localhost/empirelisting/wp-admin/' ) );
      
      // edit_post_link( __( 'Edit', 'textdomain' ), '<p>', '</p>', null, 'btn btn-primary btn-edit-post-link' );
      
      ?>
   <?php 
      // include(dirname(__FILE__)."/reuse/pageHeader.php");
      
      ?>
   <!-- <div id="content" class="section-padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
               <?php 
                  // include dirname(dirname(__FILE__))."..\reuse\booksport\sideMenu.php"
                  // include(dirname(__FILE__)."/reuse/sideBarMenu.php");
                  
                  ?>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-9">
               <div class="page-content">
                  <div class="inner-box">
                     <div class="dashboard-box">
                        <h2 class="dashbord-title">
                           <?php 
                              // if( is_user_logged_in() ) 
                              // {
                              //   echo '<a class="btn btn-primary" href="http://localhost/empirelisting/wp-admin/" role="button">Post New Book</a>';
                              // }
                              // else 
                              // {
                              // echo "<p> Plz Login to Upload New Book </p>";
                              // }
                              ?>
                        </h2>
                     </div> -->
   
                     <?php 
      // include(dirname(__FILE__)."/reuse/dashboardWrapper.php");
      
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