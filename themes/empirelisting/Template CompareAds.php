<?php
   /**
   * Template Name: Template Compare Ads
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
    <h1>Compare Products</h1>

   <?php 
    // Test if the query exists at the URL

    $postID =  $_GET['postID']; ?>


    


    
    <div class="container text-center">
  <div class="row">
    <div class="col">
    <h2>
     <?php 
    $content_post = get_post($postID);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content;
     ?>
     </h2>
    </div>
    
    <div class="col">
   
    <div class="form-group">
    <label for="exampleSelect">Plz select Product</label>
    <?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'book'
));

if( $posts ): ?>
	<form method="post">
	<select class="form-control" id="exampleSelect" name="ID">
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<option value= "<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </option>
	
	<?php endforeach; ?>
	
	</select>
    <input type="submit" name="submit" value="Go"/>
    </form>
	<?php wp_reset_postdata(); ?>

<?php endif; ?>
    </div>

    

    <?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['ID'])) {
        $selected = $_POST['ID'];
        $content_post = get_post($selected);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content;
    } else {
        echo 'No Content Found';
    }
    }
?>


</div>



</div>
</div>

   <?php 

   get_footer();