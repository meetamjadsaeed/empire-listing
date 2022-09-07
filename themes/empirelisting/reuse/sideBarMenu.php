<?php 
 $url = get_home_url();
?>     


            <aside>
               <div class="sidebar-box">
                  <div class="user">
                     <figure>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/author/img1.jpg" alt=""></a>
                     </figure>
                     <div class="usercontent">
                        <?php $current_user = wp_get_current_user(); ?>
                        
                        <?php 
                        
if ( is_user_logged_in() )
   { ?>
      <h3><?php 
                           // printf( __( 'Hello %s', 'textdomain' ), esc_html( $current_user->display_name ) ) ;
                        //   echo $url;
                           printf( '<a href="%s" class="your-class">' . __( 'Hello  '.$current_user->display_name ) . '</a>',  __( $url.'/booksportwp/public-profile/' ) );
                           
                            ?>!</h3>
                            <?php
   } 
   
   else {
      echo "<p> Plz Login to see data </p>";
    }
                        
                        
                        ?>
                        <h4>
                           <?php
                              if( is_user_logged_in() ) {
                               $user = wp_get_current_user();
                               printf( __( 'I am %s', 'textdomain' ), esc_html( $user->roles[0] ) ) ;
                              }
                              else {
                                 echo "<p> Plz Login to see data </p>";
                               }
                                  
                              ?>
                        </h4>
                     </div>
                  </div>
                  <nav class="navdashboard">
                     <ul>
                        <li>
                           <a class="active" href="<?php $url ?>/booksportwp/dashboard">
                           <i class="lni-dashboard"></i>
                           <span>Dashboard</span>
                           </a>
                        </li>

                        <li>
                           <a class="active" href="<?php $url ?>/booksportwp/post-book">
                           <i class="lni-dashboard"></i>
                           <span>Post a book</span>
                           </a>
                        </li>

                        <li>
                           <a class="active" href="<?php $url ?>/booksportwp/request-book/">
                           <i class="lni-dashboard"></i>
                           <span>Request a Book</span>
                           </a>
                        </li>

                        <li>
                           <a href="<?php echo get_edit_user_link(); ?>">
                           <i class="lni-cog"></i>
                           <span>Profile Settings</span>
                           </a>
                        </li>
                        <li>
                           <a href="<?php $url ?>/booksportwp/my-ads">
                           <i class="lni-layers"></i>
                           <span>My Ads</span>
                           </a>
                        </li>
                        <li>
                           <a href="<?php $url ?>/booksportwp/offers">
                           <i class="lni-envelope"></i>
                           <span>Offers</span>
                           </a>
                        </li>
                        <li>
                           <a href="<?php $url ?>/booksportwp/favourites">
                           <i class="lni-heart"></i>
                           <span>My Favourites</span>
                           </a>
                        </li>
                        <li>
                           <a href="<?php echo get_edit_user_link(); ?>">
                           <i class="lni-star"></i>
                           <span>Privacy Settings</span>
                           </a>
                        </li>
                        <li>
                        
                        <?php 
                           
                           if( is_user_logged_in() ) 
                           {
                              echo '<a href="<?php echo wp_logout_url( home_url() ); ?>">
                              <i class="lni-enter"></i>
                              <span>Logout</span>
                              </a>';
                              // echo  '<span>Logout</span>';
                           }
                           else 
                           {
                              echo '<a href="http://localhost/booksportwp/wp-admin/">
                              <i class="lni-enter"></i>
                              <span>Login </span>
                              </a>';
                           }
                           ?>
                           
                           


                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="widget">
                  <h4 class="widget-title">Advertisement</h4>
                  <div class="add-box">
                     <img class="img-fluid" src="assets/img/img1.jpg" alt="">
                  </div>
               </div>
            </aside>
