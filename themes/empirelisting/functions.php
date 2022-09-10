<?php
/**
 * Empire Listing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Empire_Listing
 */


$roots_includes = array(
	'/Template Edit Book Code.php', // Template Edit Book Code
  	'/connections.php',				// dummy
  	'/Template Post Book Code.php'	//Template Post Book Code
);

foreach($roots_includes as $file){
  if(!$filepath = locate_template($file)) {
    trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function empirelisting_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Empire Listing, use a find and replace
		* to change 'empirelisting' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'empirelisting', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'empirelisting' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'empirelisting_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'empirelisting_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function empirelisting_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'empirelisting_content_width', 640 );
}
add_action( 'after_setup_theme', 'empirelisting_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function empirelisting_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'empirelisting' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'empirelisting' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'empirelisting_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function empirelisting_scripts() {
	wp_enqueue_style( 'booksport-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'booksport-style', 'rtl', 'replace' );
	wp_enqueue_style( 'booksport-main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style( 'booksport-bootstrap_min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'booksport-line_icons', get_template_directory_uri() . '/assets/fonts/line-icons.css');
	wp_enqueue_style( 'booksport-slicknav', get_template_directory_uri() . '/assets/css/slicknav.css');
	wp_enqueue_style( 'booksport-color_switcher', get_template_directory_uri() . '/assets/css/color-switcher.css');	
	wp_enqueue_style( 'booksport-animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'booksport-owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style( 'booksport-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_script( 'booksport-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-color-switcher', get_template_directory_uri() . '/assets/js/color-switcher.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-jquery_counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-wow', get_template_directory_uri() . '/assets/js/wow.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-form-validator', get_template_directory_uri() . '/assets/js/form-validator.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-contact', get_template_directory_uri() . '/assets/js/contact-form-script.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-summernote', get_template_directory_uri() . '/assets/js/summernote.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'booksport-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'empirelisting_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * WooCommerce
*/
add_theme_support('woocommerce');

// Remove WooCommerce Styles
function remove_woocommerce_styles($enqueue_styles) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	// unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	// unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

add_filter( 'woocommerce_enqueue_styles',  'remove_woocommerce_styles');

/**
 * Enqueue your own stylesheet
*/
function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

/**
 * Custom Logo on login
*/
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png);
		height:65px;
		width:320px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Register a ACTIVE post status
function my_custom_status_creation(){
        register_post_status( 'ACTIVE', array(
            'label'                     => _x( 'ACTIVE', 'post' ),
            'label_count'               => _n_noop( 'ACTIVE <span class="count">(%s)</span>', 'ACTIVE <span class="count">(%s)</span>'),
            'public'                    => true,
            'exclude_from_search'       => false,
            'show_in_admin_all_list'    => true,
            'show_in_admin_status_list' => true
        ));
    }
    add_action( 'init', 'my_custom_status_creation' );

    function my_custom_status_add_in_quick_edit() {
        echo "<script>
        jQuery(document).ready( function() {
            jQuery( 'select[name=\"_status\"]' ).append( '<option value=\"ACTIVE\">ACTIVE</option>' );      
        }); 
        </script>";
    }
    add_action('admin_footer-edit.php','my_custom_status_add_in_quick_edit');
    function my_custom_status_add_in_post_page() {
        echo "<script>
        jQuery(document).ready( function() {        
            jQuery( 'select[name=\"post_status\"]' ).append( '<option value=\"ACTIVE\">ACTIVE</option>' );
        });
        </script>";
    }
    add_action('admin_footer-post.php', 'my_custom_status_add_in_post_page');
    add_action('admin_footer-post-new.php', 'my_custom_status_add_in_post_page');



//Register a INACTIVE post status
function my_custom_status_inactive_creation(){
        register_post_status( 'INACTIVE', array(
            'label'                     => _x( 'INACTIVE', 'post' ),
            'label_count'               => _n_noop( 'INACTIVE <span class="count">(%s)</span>', 'INACTIVE <span class="count">(%s)</span>'),
            'public'                    => true,
            'exclude_from_search'       => false,
            'show_in_admin_all_list'    => true,
            'show_in_admin_status_list' => true
        ));
    }
    add_action( 'init', 'my_custom_status_inactive_creation' );

    function my_custom_status_inactive_add_in_quick_edit() {
        echo "<script>
        jQuery(document).ready( function() {
            jQuery( 'select[name=\"_status\"]' ).append( '<option value=\"INACTIVE\">INACTIVE</option>' );      
        }); 
        </script>";
    }
    add_action('admin_footer-edit.php','my_custom_status_inactive_add_in_quick_edit');
    
    function my_custom_status_inactive_add_in_post_page() {
        echo "<script>
        jQuery(document).ready( function() {        
            jQuery( 'select[name=\"post_status\"]' ).append( '<option value=\"INACTIVE\">INACTIVE</option>' );
        });
        </script>";
    }
    add_action('admin_footer-post.php', 'my_custom_status_inactive_add_in_post_page');
    add_action('admin_footer-post-new.php', 'my_custom_status_inactive_add_in_post_page');


	// Display the page header
function displayPageHeader(){
	global $post;
$post_slug = $post->post_name;
echo strtoupper($post_slug);
}

	// get website home url
function url(){
	$url = "http://localhost/empirelisting";
}

function deletePost($postId){
	echo $postId;
	// wp_delete_post($postId); 
}


// function for logging in user
// function is_Logined(){

// if ( is_user_logged_in() ){
// {
//    echo "asas";
// } 

// else {
// 	echo "asas";
//  }
 
// }


// Display user books
function displayUserBooks()
{
	$current_user = wp_get_current_user();

  $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
   

  if(is_page_template( 'Template offers.php' ))
  {
    echo $bookCat = "asasas";
  }
  else{
    echo $bookCat = "lksasas";
  }
  
  // $queried_object = get_queried_object(); 
  // // $taxonomy = $queried_object->taxonomy;
  // $term_id = $queried_object->term_id;  

// get the current taxonomy term
// $term = get_queried_object();

  ?>
  <!-- <h2><?php echo esc_html( $term->name ); ?></h2> -->
  <?php
  

  if(is_page_template( 'Template offers.php' ))
  {
    $args = array(
      'posts'	=> 10,
    'post_type'		=> 'book',
    'meta_key'		=> 'Book Status',
    'meta_value'	=> 'Sell'
    );
  }
  else{
    $args = array(
      'post_type' => 'book' ,
      'orderby' => 'date' ,
      'order' => 'DESC' ,
      'posts_per_page' => 6,
      // 'cat'         => '31',
      // 'category_name'  => $term->name,
      'paged' => $paged
      // 'post_parent' => $parent
    ); 
  }


  $the_query = new WP_Query(
    $args
    
    //$args
  //   array(
  //     'post_type' => 'book',
  //     'post_status' =>array( 'publish', 'ACTIVE' ),
  //     //'post_status' => 'ACTIVE',
  //     //'post_status' => 'INACTIVE',
  //     'posts_per_page' => 10,
	//   'author'    =>  $current_user->ID,
  // //   'tax_query' => (
  // //     (
  // //         'taxonomy' => 'book_cat',
  // //         'terms' => 7,
  // //         'include_children' => false // Remove if you need posts from term 7 child terms
  // //   ),
  // // ),
  //     'paged' => $paged,
  //     // 
  //     'cat'         => '31',
    //  ) 
     
     ); ?>
      <?php if ( $the_query->have_posts() ) { ?>
        <?php while ( $the_query->have_posts() ) {
          $the_query->the_post(); ?>
          
          
          <a href="<?php the_permalink(); ?>">
          <tr data-category="active">
          <td>
          <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="adone">
          <label class="custom-control-label" for="adone"></label>
          </div>
          </td>
          <td class="photo">
          <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('full'); ?>
            </a>
            <?php endif; ?>
            
            </td>
            <td data-title="Title">
            <h3><?php the_title(); ?></h3>
            <?php $postid = get_the_ID(); ?>
            
            <span>Ad ID: <?php echo ($postid) ?></span>
            </td>
            <td data-title="Category"><span class="adcategories">Laptops & PCs</span></td>
            <?php $postid = get_the_ID(); 
            $post_status = get_post_status ( $postid )
            
            ?>
             
            <td data-title="Ad Status"><span class="adstatus adstatusactive">
            <a class="btn-action btn-view" href="<?php the_permalink(); ?>" target="_blank">
              <?php 
            if(is_page_template( 'Template offers.php' ))
            {
              the_author();
            }
            else{
              echo ($post_status) ;
            }

           ?></a></span></td>
            
            <td data-title="Price">
            <?php if(   get_field('price') ): ?> 
              <h3>PKR <?php the_field('price'); ?></h3>
              <?php endif; ?>
              </td>
              <td data-title="Action">
              <div class="btns-actions">

              <?php 

if(is_page_template( 'Template offers.php' ))
{
 
?>

<a class="btn-action btn-view" href="<?php the_permalink(); ?>" target="_blank"><i class="lni-eye"></i></a>
              <a class="btn-action btn-delete" href="<?php the_permalink(); ?>"><i class="lni-trash"></i></a>
              
<?php 

}
else{
   ?>

<a class="btn-action btn-view" href="<?php the_permalink(); ?>" target="_blank"><i class="lni-eye"></i></a>
              <a class="btn-action btn-delete" href="<?php the_permalink(); ?>"><i class="lni-trash"></i></a>
              <?php edit_post_link( __( '', 'textdomain' ), '<a><i>', '</i></a>', null, 'btn-action btn-edit lni-pencil' );
}

?>
              <!-- <a class="btn-action btn-view" href="<?php the_permalink(); ?>" target="_blank"><i class="lni-eye"></i></a>
              <a class="btn-action btn-delete" href="<?php the_permalink(); ?>"><i class="lni-trash"></i></a> -->
              <!-- <a class="btn-action btn-edit" href="http://localhost/booksport/edit-book/"><i class="lni-pencil"></i></a> -->
              
             
              <!-- <script>
              function echoHello(){
                alert("<?PHP hello(); ?>");
              }
              </script> -->
              
              <?PHP
              // FUNCTION hello(){
              //   $deletepost = get_the_ID();
              //   wp_delete_post($deletepost); 
              // }
              
              ?>
              
             
              
              </div>
              </td>
              </tr>
              </a>
              
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
                  <?php } 

}



// User dashbord title

function dashbordTitle($heading)
{
	echo '<div class="dashboard-box">
	<h2 class="dashbord-title">'.$heading. '</h2>
 </div>';
	// echo $heading;
}


function dashboardTable ($Photo, $Title, $Category, $Status, $Price)
{
	echo '<th>'.$Photo.'</th>
  <th>'.$Title.'</th>
  <th>'.$Category.'</th>
  <th>'.$Status.'</th>
  <th>'.$Price.'</th>
  <th>Action</th>';
}




// Make the search to index custom
/**
 * Extend WordPress search to include custom fields
 * http://adambalee.com
 *
 * Join posts and postmeta tables
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
  global $wpdb;
  if ( is_search() ) {    
      $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
  }
  return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
* Modify the search query with posts_where
* http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
*/
function cf_search_where( $where ) {
  global $pagenow, $wpdb;
  if ( is_search() ) {
      $where = preg_replace(
          "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
          "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
  }
  return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
* Prevent duplicates
* http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
*/
function cf_search_distinct( $where ) {
  global $wpdb;
  if ( is_search() ) {
      return "DISTINCT";
  }
  return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );



// notify when new book upload
// add_action( 'save_post_book', 'wpdocs_notify_subscribers', 10, 3 );
 
// function wpdocs_notify_subscribers( $post_id, $post, $update ) {
//   // $status = get_field( "Book Status", $post_id );
//     // If an old book is being updated, exit
//     if ( $update ||  get_field('Book Status', $post_id) != "Sell" ) {
//         return;
//     }

//     $currentCategories = array(the_terms( $post_id, 'book_cat', '', ' / ' ));
//     $currentBrands = array(the_terms( $post_id, 'brand', '', ' / ' ));
//     $currentCities = array(the_terms( $post_id, 'book_city', '', ' / ' ));
   
 

// // args
// $args = array(
// 	'posts'	=> -1,
// 	'post_type'		=> 'book',
// 	'meta_key'		=> 'Book Status',
// 	'meta_value'	=> 'Sell'
// );


// // query
// $the_query = new WP_Query( $args );

// if( $the_query->have_posts() ): 

// while( $the_query->have_posts() ) : $the_query->the_post();
	
//         //  if(   get_field('email') ):
        
//         //     $subscribers = array(
//         //        get_field('email')
//         //      );
//         //      echo $emails[0]; 
//         //   endif;

//         //  get_the_ID();
//          $storedCategories = array(the_terms( get_the_ID(), 'book_cat', '', ' / ' ));
//          $storedBrands = array(the_terms( get_the_ID(), 'brand', '', ' / ' ));
//          $storedCities = array(the_terms( get_the_ID(), 'book_city', '', ' / ' ));
         
//          if (storedCategories[0] === currentCategories[0] && storedBrands[0] === currentBrands[0] && storedCities[0] === currentCities[0]){
//              if(   get_field('email') ):
//             $subscribers = array(get_field('email'));
//           endif;

//           // $subscribers = array( 'john@doe.com', 'jane@doe.com', 'amjadsaeedmail@gmail.com' ); // list of your subscribers
//          $subject     = 'A new book has beed added!';
//           $message     = sprintf( 'We\'ve added a new book, %s. Click <a href="%s">here</a> to see the book', get_the_title( $post ), get_permalink( $post ) );
 
//               wp_mail( $subscribers, $subject, $message );


//          }

         



         
//         //  if(   get_field('Book Status') == "Sell" )
//         //  { 
//         //     echo "This is books status post";
//         //  }
//         //  else
//         //  {
//         //     echo "This is not books status post";
//         //  }  
         

// 	endwhile;
// endif;

// wp_reset_query();	 // Restore global post data stomped by the_post()

// }


// Code for likes and dislikes
?>
<?php
	function ip_post_likes($content) {
		if(is_singular('book')) {
			ob_start();
      ?>
				<ul class="likes">
					<li class="likes__item likes__item--like">
						<a href="<?php echo add_query_arg('post_action', 'like'); ?>">
							Like (<?php echo ip_get_like_count('likes') ?>)
						</a>
					</li>
					<li class="likes__item likes__item--dislike">
						<a href="<?php echo add_query_arg('post_action', 'dislike'); ?>">
							Dislike (<?php echo ip_get_like_count('dislikes') ?>)
						</a>
					</li>
				</ul>
			<?php

			$output = ob_get_clean();

			return $output . $content;
		}else {
			return $content;
		}
	}

	add_filter('the_content', 'ip_post_likes');

	//---- Get like or dislike count
	function ip_get_like_count($type = 'likes') {
		$current_count = get_post_meta(get_the_id(), $type, true);

		return ($current_count ? $current_count : 0);
	}

	//---- Process like or dislike
	function ip_process_like() {
		$processed_like = false;
		$redirect       = false;

		// Check if like or dislike
		if(is_singular('book')) {
			if(isset($_GET['post_action'])) {
				if($_GET['post_action'] == 'like') {
					// Like
					$like_count = get_post_meta(get_the_id(), 'likes', true);

					if($like_count) {
						$like_count = $like_count + 1;
					}else {
						$like_count = 1;
					}

					$processed_like = update_post_meta(get_the_id(), 'likes', $like_count);
				}elseif($_GET['post_action'] == 'dislike') {
					// Dislike
					$dislike_count = get_post_meta(get_the_id(), 'dislikes', true);

					if($dislike_count) {
						$dislike_count = $dislike_count + 1;
					}else {
						$dislike_count = 1;
					}

					$processed_like = update_post_meta(get_the_id(), 'dislikes', $dislike_count);
				}

				if($processed_like) {
					$redirect = get_the_permalink();
				}
			}
		}

		// Redirect
		if($redirect) {
			wp_redirect($redirect);
			die;
		}
	}

	add_action('template_redirect', 'ip_process_like');

// add_action( 'save_post_book', 'wpdocs_notify_subscribers', 10, 3 );

  function wpdocs_notify_subscribers( $post_id, $post, $update )
  {

    if ( $update ) {
              return;
          }


// $currenTittle = get_permalink($post_id); //  save it in curenttitile variable
          
// Start get all emails with status requests a book
// $posts = get_posts(array(
//   'posts_per_page'	=> -1,
//   'name' => 'sdfsd', 
//   'post_type'		=> 'book',
//    'post_status' => 'publish',
//   'meta_key'		=> 'Book Status', // Query all emails where the status has requested a book
//   'meta_value'	=> 'Sell'
// ));

// // $currenTittle = get_permalink(619); //  save it in curenttitile variable

// if( $posts ):

//    foreach( $posts as $post ): 
//     $email =  get_field('email'); 
//     // global $subscribers;
//     // $email =  get_field('email');//some processing here to determine value of $myVal
//     // $subscribers = array($email);
//     $subject = "New Book Has ben added GHFHG khjkj";
// $subscribers = array($email);  // save those emails in the subscriber variable

//     foreach ($subscribers as $sub)
//     {
//       $message     = sprintf( 'We\'ve added a new book, %s. Click <a href="%s">here</a> to see the book', get_the_title( $post ), get_the_title( $post ) );
      
//       wp_mail( $sub, $subject, $message );

//     }
  
//    endforeach;
  
//   wp_reset_postdata();

// endif;

// echo $comma_separated; 
          // $message     = sprintf( 'We\'ve added a new book, %s. Click <a href="%s">here</a> to see the book', get_the_title( $post ), get_permalink( $post ) );
          // $subscribers = array("amjadsaeedmail@gmail.com");
          // $subject = "New Book Has ben added GHFHG";
          //  $message     = sprintf( 'We\'ve added a new book, %s. Click <a href="%s">here</a> to see the book', get_the_title( $post ), get_the_title( $post ) );

          //     wp_mail( $subscribers, $subject, $message );

  }


  /**
 * Register Custom Navigation Walker
 */

  if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';
}

// Expire books with cron functionility
// add_action( 'expire_ads_cron', 'cw_function' );
function cw_function() {

	$Object = new DateTime();  
    $Object->setTimezone(new DateTimeZone('Europe/Amsterdam'));
    $DateAndTime = $Object->format("d/m/Y");  
    // echo "The current date and time in Amsterdam are $DateAndTime.\n";
    // echo "expire is $expire.\n";
    
    // echo $DateAndTime."<br>";
    // echo $expire."<br>";


$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'book',
  'post_status' => 'Publish'
));

if( $posts ):
	
	
		
foreach( $posts as $post ): 
  $post_ID = get_the_ID();
		setup_postdata( $post );

    $expire = get_field('Expire');
    
    if(strcmp($expire, $DateAndTime) == 0):
    
      // Update post
    $my_post = array(
      'ID'           => $post_ID,
      'post_status' => 'Draft',
      'post_content' => 'This is Post has been expired',
    );
    
    // Update the post into the database
    wp_update_post( $my_post );
    endif;

			
	endforeach;
	
	
	
	wp_reset_postdata(); 

 endif;

}

// Prevent images larger than 200kb from being uploaded.
// function waterMark( $file ) {
  
//            // Load the stamp and the photo to apply the watermark to
// $stamp = imagecreatefrompng('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg');
// $im = imagecreatefromjpeg($file);

// // Set the margins for the stamp and get the height/width of the stamp image
// $marge_right = 10;
// $marge_bottom = 10;
// $sx = imagesx($stamp);
// $sy = imagesy($stamp);

// // Copy the stamp image onto our photo using the margin offsets and the photo 
// // width to calculate positioning of the stamp. 
// imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// // Output and free memory
// header('Content-type: image/png');
// imagepng($im);
// imagedestroy($im);
           
//             return $file;
// }
// add_filter( 'wp_handle_upload_prefilter', 'waterMark' );


// add_action( 'template_redirect', 'redirect_to_other_page' );
// function redirect_to_other_page() {
//   if(isset($_POST['submit'])){
	  
//       wp_redirect( "example.com", 301 );
//       ///wp_redirect( 'example.com/page', 301 ); 
//     exit;
//     }
// }

// function my_function_on_save_post( $post_id ) {

// 	// Find parent post_id.
//   wp_redirect( "example.com", 301 );

// 	// Do something.

// }
// add_action( 'save_post', 'my_function_on_save_post' );


// function my_function_on_save_post( $post_id ) {

// 	// Find parent post_id.
//   wp_redirect( "example.com", 301 );

// 	// Do something.

// }
// do_action( 'wp_insert_post', 'my_function_on_save_post' );

// redirect to new page
function redirect($url){
  $string = '<script type="text/javascript">';
  $string .= 'window.location = "' . $url . '"';
  $string .= '</script>';
  echo $string;
}

// limit to cart only one product
add_filter( 'woocommerce_add_to_cart_validation', 'only_one_item_in_cart', 9999, 2 );
   
function only_one_item_in_cart( $passed, $added_product_id ) {
   wc_empty_cart();
   return $passed;
}

//  skip cart page woocommerce
add_filter('add_to_cart_redirect', 'lw_add_to_cart_redirect');
function lw_add_to_cart_redirect() {
 global $woocommerce;
 $lw_redirect_checkout = $woocommerce->cart->get_checkout_url();
 return $lw_redirect_checkout;
}


//ACTIVE
//INACTIVE
//SOLD
//EXPIRED
//DELETED

//get_category_link($category->term_id)
//$category->name
//$image['url']
