<?php
/**
 * Template Name: Template Delete Book
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
//$my_post = get_page_by_title( 'bbbbThis is the post title.', OBJECT, 'book' );

//$pos = $my_post->ID;


wp_delete_post(295); 

// Update post 37
 // $my_post = array(
   //   'ID'           => $pos,
     // 'post_title'   => 'uuuThis is the post title.',
     // 'post_content' => 'This is the updated content.',
 // );
 
// Update the post into the database
//  wp_update_post( $my_post );

get_footer();
