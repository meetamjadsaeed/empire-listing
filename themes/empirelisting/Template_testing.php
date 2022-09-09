<?php
/**
 * Template Name: Template Testing
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



<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<style>
/* .grey-bg {  
    background-color: #F5F7FA;
} */




    </style>


<section class="featured section-padding">

<div class="container">

<br><br><br>
<h1> this is testing section </h1>

<?php 

// $Object = new DateTime();  
//     $Object->setTimezone(new DateTimeZone('Europe/Amsterdam'));
//     $DateAndTime = $Object->format("d/m/Y");  
//     // echo "The current date and time in Amsterdam are $DateAndTime.\n";
//     // echo "expire is $expire.\n";
    
//     // echo $DateAndTime."<br>";
//     // echo $expire."<br>";


// $posts = get_posts(array(
// 	'posts_per_page'	=> -1,
// 	'post_type'			=> 'book',
//   'post_status' => 'Publish'
// ));

// if( $posts ):
	
	
		
// foreach( $posts as $post ): 
//   $post_ID = get_the_ID();
// 		setup_postdata( $post );

//     $expire = get_field('Expire');
    
//     if(strcmp($expire, $DateAndTime) == 0):
    
//       // Update post
//     $my_post = array(
//       'ID'           => $post_ID,
//       'post_status' => 'Draft',
//       'post_content' => 'This is Post has been expired',
//     );
    
//     // Update the post into the database
//     wp_update_post( $my_post );
//     endif;

			
// 	endforeach;
	
	
	
// 	wp_reset_postdata(); 

//  endif; 

?>
<?php 



// echo $check = (strcmp($expire, $DateAndTime) == 0) ? "expired" : "not expired";





// if ($DateAndTime === $expire)? "expired":"not expired";



// Start get all emails with status requests a book
// $name = "sdfsd";
// $posts = get_posts(array(
//   'posts_per_page'	=> -1,
//   "s" => $name,
//   'post_type'		=> 'book',
//    'post_status' => 'publish',
//   'meta_key'		=> 'Book Status', // Query all emails where the status has requested a book
//   'meta_value'	=> 'Sell'
// ));
// $currenTittle = get_permalink(619); //  save it in curenttitile variable

// if( $posts ):

//    foreach( $posts as $post ): 

//     // $posttitle = 'sdfsd';
//     // $postid = $wpdb->get_results( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "'" );




//     $email =  get_field('email'); 
//     global $subscribers;
//     $email =  get_field('email');//some processing here to determine value of $myVal
//     $subscribers = array($email);

// // $subscribers = array($email);  // save those emails in the subscriber variable

//     foreach ($subscribers as $sub)
//     {
//       // $subject = "New Book Has ben added";
//       // $message     = sprintf( 'We\'ve added a new book, %s. Click <a href="%s">here</a> to see the book', $postlink, get_permalink( $post ) );
      
//       echo "<p>".$sub."</p><br>";

//       $subject = "New Book Has ben added ";
//       $message     = sprintf( 'We\'ve added a new book, %s. Click <a href="%s">here</a> to see the book', $currenTittle, $currenTittle );
      
//       // wp_mail( $sub, $subject, $message );

//     }
  
//    endforeach;
  
//   wp_reset_postdata();

// endif;
// End get all emails with status requests a book
?>

<!-- Start get current book title -->

<!-- get the current book title -->
<?php 
// $currenTittle = get_permalink(619); //  save it in curenttitile variable

// echo  $currenTittle;

// End get current book title


//Start get  all books titles whos title match with current book title


  //get all books titles on the basis of current title
// $posttitle = 'sdfsd';
// $postid = $wpdb->get_results( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "'" );

// foreach($postid as $post)
// {
//   $postId = $post->ID; //get the id of all new posts on the basis of title and save those ids in an array
//   $postTittle = get_the_title($postId); 
//   echo "Post Tittle ".$postTittle.'<br/>';
//   $postLink = get_permalink($postId).'<br/>';  // get all permalinks on basis of ids and  save those links in the array
//   echo "Post URL ".$postLink.'<br/>';
//   echo "Post id ".$postId.'<br/>';
// }






//End get  all books titles whos title match with current book title






?>







</div>
</section>

<!-- <div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Minimal Statistics Cards</h4>
        <p>Statistics on minimal cards.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>278</h3>
                  <span>New Posts</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-speech warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>156</h3>
                  <span>New Comments</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-graph success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>64.89 %</h3>
                  <span>Bounce Rate</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pointer danger font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>423</h3>
                  <span>Total Visits</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="danger">278</h3>
                  <span>New Projects</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-rocket danger font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="success">156</h3>
                  <span>New Clients</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-user success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="warning">64.89 %</h3>
                  <span>Conversion Rate</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-pie-chart warning font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="primary">423</h3>
                  <span>Support Tickets</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-support primary font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="primary">278</h3>
                  <span>New Posts</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-book-open primary font-large-2 float-right"></i>
                </div>
              </div>
              <div class="progress mt-1 mb-0" style="height: 7px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="warning">156</h3>
                  <span>New Comments</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-bubbles warning font-large-2 float-right"></i>
                </div>
              </div>
              <div class="progress mt-1 mb-0" style="height: 7px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="success">64.89 %</h3>
                  <span>Bounce Rate</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-cup success font-large-2 float-right"></i>
                </div>
              </div>
              <div class="progress mt-1 mb-0" style="height: 7px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="danger">423</h3>
                  <span>Total Visits</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-direction danger font-large-2 float-right"></i>
                </div>
              </div>
              <div class="progress mt-1 mb-0" style="height: 7px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="stats-subtitle">
  <div class="row">
    <div class="col-12 mt-3 mb-1">
      <h4 class="text-uppercase">Statistics With Subtitle</h4>
      <p>Statistics on minimal cards with Title &amp; Sub Title.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-md-12">
      <div class="card overflow-hidden">
        <div class="card-content">
          <div class="card-body cleartfix">
            <div class="media align-items-stretch">
              <div class="align-self-center">
                <i class="icon-pencil primary font-large-2 mr-2"></i>
              </div>
              <div class="media-body">
                <h4>Total Posts</h4>
                <span>Monthly blog posts</span>
              </div>
              <div class="align-self-center">
                <h1>18,000</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body cleartfix">
            <div class="media align-items-stretch">
              <div class="align-self-center">
                <i class="icon-speech warning font-large-2 mr-2"></i>
              </div>
              <div class="media-body">
                <h4>Total Comments</h4>
                <span>Monthly blog comments</span>
              </div>
              <div class="align-self-center"> 
                <h1>84,695</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body cleartfix">
            <div class="media align-items-stretch">
              <div class="align-self-center">
                <h1 class="mr-2">$76,456.00</h1>
              </div>
              <div class="media-body">
                <h4>Total Sales</h4>
                <span>Monthly Sales Amount</span>
              </div>
              <div class="align-self-center">
                <i class="icon-heart danger font-large-2"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body cleartfix">
            <div class="media align-items-stretch">
              <div class="align-self-center">
                <h1 class="mr-2">$36,000.00</h1>
              </div>
              <div class="media-body">
                <h4>Total Cost</h4>
                <span>Monthly Cost</span>
              </div>
              <div class="align-self-center">
                <i class="icon-wallet success font-large-2"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div> -->

    
<?php 

get_footer(); ?>
