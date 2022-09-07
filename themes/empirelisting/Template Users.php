<?php
/**
 * Template Name: Template Users
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
include(dirname(__FILE__)."/reuse/PageHeader.php");

?>  


<div class="container">



<div class="row ng-scope">
    <div class="col-md-3 col-md-push-9">
        <h4>Results <span class="fw-semi-bold">Filtering</span></h4>
        <p class="text-muted fs-mini">Listed content is categorized by the following groups:</p>
        <ul class="nav nav-pills nav-stacked search-result-categories mt">
            <li><a href="#">Friends <span class="badge">34</span></a>
            </li>
            <li><a href="#">Pages <span class="badge">9</span></a>
            </li>
            <li><a href="#">Images</a>
            </li>
            <li><a href="#">Groups</a>
            </li>
            <li><a href="#">Globals <span class="badge">18</span></a>
            </li>
        </ul>
    </div>
    <div class="col-md-9 col-md-pull-3">
        <p class="search-results-count">About 94 700 000 (0.39 sec.) results</p>
        
       
       
        <!-- <section class="search-result-item">
            <a class="image-link" href="#"><img class="image" src="https://bootdey.com/img/Content/avatar/avatar6.png">
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <h4 class="search-result-item-heading"><a href="#">john doe</a> <span class="badge bg-danger fw-normal pull-right">Best Deal!</span></h4>
                        <p class="info">Los Angeles, NY 20188</p>
                        <p class="description">You will never know exactly how something will go until you try it. You can think three hundred times and still have no precise result.</p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                        <p class="value3 mt-sm">$10, 300</p>
                        <p class="fs-mini text-muted">PER WEEK</p><a class="btn btn-primary btn-info btn-sm" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </section> -->

        <?php
// $defaultDescription =  "This user description is not available";

// function defaultDescription($description)
// {
//     (if $user->description) ? ($user->description) : ($defaultDescription);
// }


$args = array(
	'number' => -1
);

// The Query
$user_query = new WP_User_Query( $args );

// User Loop
if ( ! empty( $user_query->get_results() ) ) {
	foreach ( $user_query->get_results() as $user ) {
      
        ?>
        <section class="search-result-item">
            <a class="image-link" href="#">
            <?php

if ( get_avatar_url( $user->ID ) )
{
    ?>
    <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
<?php ;
}
else {
    ?>
    <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
<?php
}
            ?>
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <h4 class="search-result-item-heading"><a href="#"> <?php echo ucwords($user->display_name)  ?> </a> <span class="badge bg-danger fw-normal pull-right">Top Rated</span></h4>
                        <p class="info">
                        
                             
                        <?php
                        
                        if($user->billing_address_1)
                        {
                           echo $user->billing_address_1;
                        }
                        else
                        {
                            echo "This user Address is not available";
                        }
                        ?>
                        </p>
                        <p class="description"> 
                        
                        <?php
                        
                        if($user->description)
                        {
                           echo $user->description;
                        }
                        else
                        {
                            echo "This user description is not available";
                        }
                        ?>
                        
                        </p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                        <p> 
                       
                        
                    </p>
                        <p class="value3 mt-sm">★★★☆☆</p>
                        <p class="fs-mini text-muted">PERSON</p><a class="btn btn-primary btn-info btn-sm" href="http://localhost/empirelisting/users-<?php echo $user->ID ?>">View User</a>
                    </div>
                </div>
            </div>
        </section>
        <?php
	}
} else {
	echo 'No users found.';
}
?>
      
       
       
        <div class="text-align-center">
            <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#">Prev</a>
                </li>
                <li class="active"><a href="#">1</a>
                </li>
                <li><a href="#">2</a>
                </li>
                <li><a href="#">3</a>
                </li>
                <li><a href="#">4</a>
                </li>
                <li><a href="#">5</a>
                </li>
                <li><a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
    

<?php

get_footer();
