<div class="dashboard-wrapper">
                     <div class="dashboard-sections">
                        <div class="row">
                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                              <div class="dashboardbox">
                                 <div class="icon"><i class="lni-write"></i></div>
                                 <div class="contentbox">
                                    <h2><a href="#">Total Ad Posted</a></h2>
                                    <?php
                                       $count_posts = wp_count_posts($type = 'book', $perm = '');
                                       
                                       if ( $count_posts ) {
                                         $published_posts = $count_posts->publish;
                                       }
                                       
                                       ?>
                                    <h3>
                                       <?php 
                                          if( is_user_logged_in()  ){
                                            echo ($published_posts).' Ad Posted' ;
                                          }
                                          
                                          else{
                                            echo "<p> Plz Login to see data </p>";  
                                          }
                                          
                                          ?>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                              <div class="dashboardbox">
                                 <div class="icon"><i class="lni-add-files"></i></div>
                                 <div class="contentbox">
                                    <h2><a href="#">Featured Ads</a></h2>
                                    <h3>
                                       <?php 
                                          if( is_user_logged_in()  ){
                                            echo ($published_posts).' Ad Posted' ;
                                          }
                                          
                                          else{
                                            echo "<p> Plz Login to see data </p>";  
                                          }
                                          
                                          ?>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                              <div class="dashboardbox">
                                 <div class="icon"><i class="lni-support"></i></div>
                                 <div class="contentbox">
                                    <h2><a href="#">Offers</a></h2>
                                    <h3>
                                       <?php 
                                          if( is_user_logged_in()  ){
                                            echo 'You have '.($published_posts).'Offers' ;
                                          }
                                          
                                          else{
                                            echo "<p> Plz Login to see data </p>";  
                                          }
                                          
                                          ?>  
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <table class="table table-responsive dashboardtable tablemyads">
                        <thead>
                           <tr>
                              <th>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkedall">
                                    <label class="custom-control-label" for="checkedall"></label>
                                 </div>
                              </th>
                              <?php 

                              if(is_page_template( 'Template offers.php' ))
                              {
                                 dashboardTable("Photo", "Title", "Category", "Posted By", "Price");
                              }
                              else{
                                 dashboardTable("Photo", "Title", "Category", "Status", "Price");
                              }

                              ?>

                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                              if( is_user_logged_in() ) 
                              {
                                displayUserBooks();
                              }
                              else 
                              {
                              echo "<p> Plz Login to see data </p>";
                              }
                              ?>
                           </ul>
                           </nav>
                  </div>