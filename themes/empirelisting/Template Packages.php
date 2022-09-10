<?php
/**
 * Template Name: Template Packages
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

<br><br><br><br>
<h1>This is packages page</h1>
<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'product'
));

if( $posts ): ?>
	
	<div class="form-group">
    <form method="post">
    <label for="exampleSelect">packages select</label>
    <select class="form-control" id="exampleSelect" name = "ID">
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
      <option value =" <?php the_ID(); ?> "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></option>
	<?php endforeach; ?>
	
	</select>
    <input type="submit" name="submit" value="Go"/>
    </form>
</div>
	
	<?php wp_reset_postdata(); ?>

<?php endif; 



if(isset($_POST['submit'])){
    if(!empty($_POST['ID'])) {
        $selected = $_POST['ID'];
    //     $content_post = get_post($selected);
    // $content = $content_post->post_content;
    // $content = apply_filters('the_content', $content);
    // $content = str_replace(']]>', ']]&gt;', $content);
    // echo $content;
    // echo $selected;
    $paramters = array( 'postID' => $selected );
    $passedURL = add_query_arg( $paramters, 'http://localhost/empirelisting/checkout/' );
  
    redirect($passedURL);
    } 
    }
?>


    
<?php 

get_footer();
